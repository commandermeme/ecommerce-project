<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Ecommerce!';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        return view('pages.about');
    }

    public function pricing() {
        $data = array(
            'title' => 'Pricing',
            'pricelist' => ['10$', '100$', '1000$']
        );
        return view('pages.pricing')->with($data);
    }

    public function developer() {
        return view('pages.developer');
    }
}
