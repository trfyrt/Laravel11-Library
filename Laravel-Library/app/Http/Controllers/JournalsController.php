<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JournalsController extends Controller
{
    public function index($sort = 'asc'){
        if($sort == 'desc'){
            $datas=DB::select('select * from journals order by title desc');
        }
        else{
            $datas=DB::select('select * from journals order by title asc');
        }
        return view('journals', compact('datas'));
    }
}
