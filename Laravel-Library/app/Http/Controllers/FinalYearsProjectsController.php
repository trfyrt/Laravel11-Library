<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinalYearsProjectsController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from final_year_projects order by title desc');
        }
        else{
            $datas=DB::select('select * from final_year_projects order by title asc');
        }
        return view('fyps', compact('datas'));
    }
}
