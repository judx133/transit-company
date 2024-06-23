<?php

namespace App\Http\Controllers;

use App\Models\application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('section');
    }
    
    public function indexrequ()
    {
        $data = application::all();
        return view('newapplication', compact('data'));
    }
    public function zakazs(Request $request){
        $newRequest = new application([
            'name'=>$request->name,
            'number'=>$request->number,
            'email'=>$request->email,
            'cityfirst'=>$request->cityfirst,
            'citysecond'=>$request->citysecond,
        ]);
        $newRequest->save();
        return redirect()->route('indexrequ')->with('success', 'Заявка выполнена успешно!');
    }
}

