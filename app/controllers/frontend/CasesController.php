<?php namespace Frontend;

use \DB;
use \View;
use \Post;
use \Cases;
use \Image;
use \Input;
use \Request;
use \Category;

/**
* 案例控制器
*/
class CasesController extends BaseController {

    /**
     * 案例列表
     *
     * @return Response
     */
    public function all($industry = 0, $specialty = 0)
    {
        if ($industry != 0) {
            $Cases = Cases::where('case_industry', $industry)->orderBy('updated_at', 'desc')->paginate(8);
        } elseif ($specialty != 0 ) {
            $Cases = Cases::where('case_specialty', $specialty)->orderBy('updated_at', 'desc')->paginate(8);
        } else {
            $Cases = Cases::orderBy('updated_at', 'desc')->paginate(16);    
        }        

        $industries = Category::where('type', 1)->get();
        $specialties = Category::where('type', 2)->get();

        if (Request::wantsJson()) {
            return $Cases->toArray();
        }
        return View::make('frontend.pages.case-list')
                    ->withCases($Cases)
                    ->withIndustries($industries)
                    ->withSpecialties($specialties)->withPagedesc('案例');
    }
        
    /**
     * 案例详情
     *
     * @return Response
     */
    public function detail($id)
    {
        $case = Cases::findOrFail($id);

        $in_id = $case->case_industry;
        $sp_id = $case->case_specialty;
        $case->in_name = Category::findOrFail($in_id)->name;

        $before = Cases::where('id', '<', $id)->orderBy('id', 'desc')->take(1)->get();
        $after = Cases::where('id', '>', $id)->take(1)->get();

        $relates = Cases::whereRaw('(case_industry = ? or case_specialty = ?) and id != ?', array($in_id, $sp_id, $id))->take(4)->get();
        // $relates = Cases::where(function($query) use ($in_id, $sp_id) {
        //     $query->where('case_industry', $in_id)->orWhere('case_specialty', $sp_id);
        // })->where('id', '!=', $id)->get();
        return View::make('frontend.pages.case-detail')
                        ->withCase($case)
                        ->withBefore($before)
                        ->withAfter($after)
                        ->withRelates($relates)
                        ->withPagedesc($case->case_title);
    }
}
