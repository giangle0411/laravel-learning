<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class HomeController extends Controller
{
    public function index()
    {

        $pages = Page::All();

        $pageDetail = Page::where('id', 1)->first();

        return view('home', ['pages' => $pages, 'pageDetail' => $pageDetail]);
    }

    public function page($pageId)
    {
        $pages = Page::All();

        $pageDetail = Page::where('id', $pageId)->first();

        return view('home', ['pages' => $pages, 'pageDetail' => $pageDetail]);
    }
}
