<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsPapersController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from news_papers order by name desc');
        }
        else{
            $datas=DB::select('select * from news_papers order by name asc');
        }
        return view('newspapers', compact('datas'));
    }
}
