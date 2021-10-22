<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Campaign;
use App\Models\CampaignCreative;

class CampaignController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $campaigns = Campaign::with('creatives')
            ->orderBy('id', 'desc')
            ->get();
        return response()->json($campaigns);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'from' => 'required|date',
            'to' => 'required|date',
            'daily_budget' => 'required|numeric|min:1',
            'total_budget' => 'required|numeric|min:1',
            'creatives' => 'required',
            'creatives.*' => 'mimes:jpg,jpeg,png',
        ]);
        DB::beginTransaction();
        try {
            // return Auth::user()->id;
            $campaign = new Campaign();
            $campaign->user_id = Auth::user()->id ?? 0;
            $campaign->name = $request->name;
            $campaign->from = $request->from;
            $campaign->to = $request->to;
            $campaign->total_budget = $request->total_budget;
            $campaign->daily_budget = $request->daily_budget;
            $campaign->save();

            foreach ($request->file('creatives') as $index => $creative) {
                $campaignCreative = new CampaignCreative();
                $campaignCreative->campaign_id = $campaign->id;
                $campaignCreative->path = Storage::put(
                    'campaign/creatives',
                    $creative
                );
                $campaignCreative->save();
            }

            DB::commit();
            return response('created', 201);
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error(
                'CampaignController@store :: ' . $exception->getMessage()
            );
            return response($exception->getMessage(), 400);
        }
    }
    public function show($id)
    {
        $campaign = Campaign::findOrFail($id);
        return response()->json($campaign);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'from' => 'required|date',
            'to' => 'required|date',
            'daily_budget' => 'required|numeric|min:1',
            'total_budget' => 'required|numeric|min:1',
        ]);
        try {
            $campaign = Campaign::findOrFail($id);
            $campaign->name = $request->name;
            $campaign->from = $request->from;
            $campaign->to = $request->to;
            $campaign->total_budget = $request->total_budget;
            $campaign->daily_budget = $request->daily_budget;
            $campaign->save();

            return response('updated', 204);
        } catch (\Exception $exception) {
            Log::error(
                "CampaignController@update($id) :: " . $exception->getMessage()
            );
            return response($exception->getMessage(), 400);
        }
    }
}
