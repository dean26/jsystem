<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderDbController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->paginate(5);
        return view('orders.index', ['orders' => $orders]);
    }

    public function show(int $id)
    {
        $order = DB::table('orders')->where('id', $id)->first();

        if(empty($order)){
            abort(404);
        }        

        return view('orders.show', ['order' => $order]);
    }

    public function create()
    {
        return view('orders.index');
    }

    public function store()
    {
        return view('orders.index');
    }

    public function edit()
    {
        return view('orders.index');
    }

    public function update()
    {
        return view('orders.index');
    }

    public function destroy()
    {
        return view('orders.index');
    }
}
