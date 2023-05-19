<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenderRequest;
use App\Models\Book;
use App\Models\Editorial;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Gender $gender)
    {
        $genders = Gender::orderBy('id', 'desc')->paginate();
        return view('gender.index', compact('genders', 'gender'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gender.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenderRequest $request)
    {
        $gender=Gender::create($request->all());
        return redirect()->route('gender.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gender $gender)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gender $gender)
    {
        return view('gender.edit', compact('gender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenderRequest $request, Gender $gender)
    {
        $gender->update($request->all());
        return redirect()->route('gender.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gender $gender)
    {
        $gender->delete();
        return redirect()->route('gender.index');
    }
}
