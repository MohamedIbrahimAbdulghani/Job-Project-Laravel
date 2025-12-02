<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class IndexController extends Controller
{
    public function __invoke(Request $request) {
        $jobs = Job::all();
        return view('index', compact('jobs'));
    }
}