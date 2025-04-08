<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EngineController extends Controller
{
    public function index()
    {
        $engines = DB::table('engines')->paginate(5);
        return view('engines.index', ['engines' => $engines]);
    }

}