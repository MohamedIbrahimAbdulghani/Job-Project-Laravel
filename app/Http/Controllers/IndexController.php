<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class IndexController extends Controller
{
    public function index() {
        $jobs = Job::all();
        return view('index', compact('jobs'));
    }
    public function about() {
        return view('about', ['AboutPageTitle'=>'About Page']);
    }
    public function contact() {
        return view('contact');
    }
}
