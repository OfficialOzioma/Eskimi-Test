import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

import campaigns from './components/campaign/list';
import createNewCampaign from './components/campaign/create';
import editCampaign from './components/campaign/edit';


const routes = [{
        path: '/home',
        component: campaigns,
        name: 'campaign.list'
    },
    {
        path: '/campaign/create',
        component: createNewCampaign,
        name: 'campaign.create'
    },
    {
        path: '/campaign/edit/:id',
        component: editCampaign,
        name: 'campaign.edit'
    }
]

export default new Router({
    mode: 'history',
    routes: routes
})
