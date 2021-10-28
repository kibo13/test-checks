<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckController extends Controller
{
    public function index()
    {
        $checks = Check::get();
        return view('index', compact('checks'));
    }

    public function create(Request $request)
    {
        $params = [
            'user_id'   => Auth::user()->id,
            'photo'     => $request->file('photo')->store('checks'),
            'type'      => 1,
            'code'      => 'test',
            'status'    => 1
        ];

        Check::create($params);
    }
}