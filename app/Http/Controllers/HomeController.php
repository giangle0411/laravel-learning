<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

use App\Special;

class HomeController extends Controller
{
    public function index()
    {

        $pages = Page::All();

        $pageDetail = Page::where('id', 1)->first();

        $specials = Special::All();

        return view('home', ['pages' => $pages, 'pageDetail' => $pageDetail, 'specials' => $specials]);
    }

    public function page($pageId)
    {
        $pages = Page::All();

        $specials = Special::All();

        $pageDetail = Page::where('id', $pageId)->first();

        return view('home', ['pages' => $pages, 'pageDetail' => $pageDetail, 'specials' => $specials]);
    }

    public function specialEntry($id)
    {
        $special = Special::where('id', $id)->first();

        return view('special-entry', ['special' => $special]);
    }
}
