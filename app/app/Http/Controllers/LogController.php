<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(): Renderable
    {
        return view('index', ['logs' => Log::orderBy('created_at', 'desc')->get()]);
    }

    public function log(): Renderable
    {
        return view('log');
    }

    public function create(Request $request): RedirectResponse
    {
        $log = new Log ();
        if ($request->input('name')) {
            $log->name = $request->input('name');
        }
        $log->save();
        return redirect('/');
    }
}
