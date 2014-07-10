<?php namespace Backend;

use \View;
use \Demand;

class DemandController extends BaseController {

    
    /**
     * 全部需求
     *
     * @return Response
     */
    public function getAll()
    {
        $demands = Demand::orderBy('created_at', 'desc')->paginate(15);
        return View::make('backend.pages.demand-all')->withDemands($demands);
    }

    /**
     * 需求详情
     *
     * @return Response
     */
    public function getDetail($id)
    {
        $demand = Demand::findOrFail($id);
        return View::make('backend.pages.demand-detail')->withDemand($demand);
    }
}