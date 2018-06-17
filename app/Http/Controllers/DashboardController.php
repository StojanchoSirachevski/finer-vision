<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Record;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
//        return Record::all();

        return view('dashboard.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:records',
            'phone_number' => 'required|numeric',
            'gender' => 'required',
            'dob' => 'required|date_format:"d/m/Y"',
            'comments' => 'nullable'
        ]);

//        dd(Carbon::parse($request->get('dob'))->format('d-m-Y'));

        $record = Record::create($request->all());

        return $record;
    }
}
