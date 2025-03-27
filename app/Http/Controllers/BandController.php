<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    function index(Request $request)
    {
        $search = $request->input('search');
        $bands = Band::query();
        if ($search) {
            $bands = $bands->where('name', 'like', "%{$search}%");
        } 
        $bands = $bands->simplePaginate(12);
        return view('bands.index',['bands' => $bands]);
    }

    function create()
    {
        return view('bands.create');
    }

    function about()
    {
        return view('bands.about');
    }

    function store(Request $request)
    {
        $band = new Band();
        $band->name = $request->name;
        $band->startTime = $request->startTime;
        $band->endTime = $request->endTime;
        $band->date = $request->date;
        $band->stage = $request->stage;
        $band->save();
        return redirect('/bands');
    }

    function show($id)
    {
        $band = Band::find($id);
        return view('bands.show', ['band' => $band]);
    }

    function edit($id)
    {
        $band = Band::find($id);
        return view('bands.edit', ['band' => $band]);
    }

    function update(Request $request)
    {
        $id = $request->id;
        $band = Band::find($id);
        $band->name = $request->name;
        $band->startTime = $request->startTime;
        $band->endTime = $request->endTime;
        $band->date = $request->date;
        $band->stage = $request->stage;
        $band->save();
        return redirect('/bands');
    }

    function destroy(Request $request)
    {
        $id = $request->id;
        $band = Band::find($id);
        $band->delete();
        return redirect('/bands');
    }
}   