<?php

namespace App\Controllers;

class PagesController {

    public function home() {
        return view('home');
    }

    public function about() {
        $company = 'Laracast';

        return view('about', compact('company'));
    }

    public function contact() {
        return view('contact');
    }
}
