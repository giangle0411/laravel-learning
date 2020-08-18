<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class TestController extends Controller
{
    public function test() {
        // $pages = Page::All();
        // $page = Page::where('name', 'About us')->get();
        $page = Page::where('id', 1)->first();
        // echo $page->name;
        // echo '<br>';
        // echo $page->description;
        // echo '<br>';

        // dd($pages);
        // foreach($pages as $page) {
        //     // echo $page->name.' - '. $page->description; 
        //     echo "$page->name - $page->description";
        //     echo '<br>';
        // }

        return view('test1', ['page' => $page]);
    }
    //
}
