<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    public function creatives()
    {
        return $this->hasMany(CampaignCreative::class);
    }

    /**
     * Get the user that owns the Campaign.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
