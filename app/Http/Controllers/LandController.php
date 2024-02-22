<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Land;

class LandController extends Controller
{
    public function index(){
        $lands = Land::all();
        return view('lands.index', ['lands' => $lands]);
        
    }

    public function create(){
        return view('lands.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'blockname' => 'required',
            'village' => 'required',
            'location' => 'required',
            'area' => 'required',
            'ownername' => 'nullable'
        ]);

        $newLand = Land::create($data);

        return redirect(route('land.index'));

    }
   

    public function edit(Land $land){
        return view('lands.edit', ['land' => $land]);
    }

    public function update(Land $land, Request $request){
        $data = $request->validate([
            'blockname' => 'required',
            'village' => 'required',
            'location' => 'required',
            'area' => 'required',
            'ownername' => 'nullable'
        ]);

        $land->update($data);

        return redirect(route('land.index'))->with('success', 'Land Updated Succesffully');

    }

    public function destroy(Land $land){
        $land->delete();
        return redirect(route('land.index'))->with('success', 'land deleted Succesffully');
    }
}
