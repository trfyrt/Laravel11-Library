<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{
    public function index($type = 'all', $sort = 'asc'){
        if($sort == 'desc' && $type == 'all'){
            $datas=DB::select('
            (select title, year, author from books)
            union all
            (select title, year, producer from cds)
            union all
            (select title, year, author from final_year_projects)
            union all
            (select title, year, author from journals)
            union all
            (select title, publicationDate, publisher from news_papers)
            order by title desc
            ');
        }
        else if ($sort == 'asc' && $type == 'all'){
            $datas=DB::select('
            (select title, year, author from books)
            union all
            (select title, year, producer from cds)
            union all
            (select title, year, author from final_year_projects)
            union all
            (select title, year, author from journals)
            union all
            (select title, publicationDate, publisher from news_papers)
            order by title asc
            ');
        }
        else if($sort == 'desc' && $type == 'books'){
            $datas=DB::select('select * from books order by title desc');
        }
        else if($sort == 'asc' && $type == 'books'){
            $datas=DB::select('select * from books order by title asc');
        }
        else if($sort == 'desc' && $type == 'cds'){
            $datas=DB::select('select * from cds order by title desc');
        }
        else if($sort == 'asc' && $type == 'cds'){
            $datas=DB::select('select * from cds order by title asc');
        }
        else if($sort == 'desc' && $type == 'fyps'){
            $datas=DB::select('select * from final_year_projects order by title desc');
        }
        else if($sort == 'asc' && $type == 'fyps'){
            $datas=DB::select('select * from final_year_projects order by title asc');
        }
        else if($sort == 'desc' && $type == 'journals'){
            $datas=DB::select('select * from journals order by title desc');
        }
        else if($sort == 'asc' && $type == 'journals'){
            $datas=DB::select('select * from journals order by title asc');
        }
        else if($sort == 'desc' && $type == 'newspapers'){
            $datas=DB::select('select * from news_papers order by title desc');
        }
        else if($sort == 'asc' && $type == 'newspapers'){
            $datas=DB::select('select * from news_papers order by title asc');
        }


        return view('catalogue', compact('datas', 'type'));
    }
}
