<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckController extends Controller
{
    public function index()
    {
        $checks = Check::orderBy('created_at', 'desc')->get();
        return view('index', compact('checks'));
    }

    public function create(Request $request)
    {
        $user   = Auth::user()->id;
        $photo  = $request->file('photo')->store('checks');
        $type   = getTypeCheck();
        $code   = getCodeCheck($type);
        $status = getStatusCheck($photo);

        $params = [
            'user_id'   => $user,
            'photo'     => $photo,
            'type'      => $type,
            'code'      => $code,
            'status'    => $status
        ];

        Check::create($params);
    }
}
