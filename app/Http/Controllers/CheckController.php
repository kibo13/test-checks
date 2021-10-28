<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
        $checks = Check::get();
        return view('index', compact('checks'));
    }

    public function create(Request $request)
    {
        dd($request);
    }
}
