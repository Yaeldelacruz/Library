<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditorialRequest;
use App\Models\Editorial;
use App\Models\Gender;
use App\Models\Nacionality;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editorials = Editorial::orderBy('id', 'desc')->paginate();
        return view('editorial.index', compact('editorials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::all();
        $nacionalities = Nacionality::all();
        return view('editorial.create', compact('nacionalities', 'genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EditorialRequest $request)
    {
        $editorial = Editorial::create($request->all());
        return redirect()->route('editorial.show', $editorial);
    }

    /**
     * Display the specified resource.
     */
    public function show(Editorial $editorial)
    {
        $gender = Gender::all();
        if($gender){
            $gender = Gender::where('id', $editorial->gender_id)->get();
            $nacionality = Nacionality::where('id', $editorial->nacionality_id)->get();
        }
        return view('editorial.show', compact('editorial', 'gender','nacionality'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editorial $editorial)
    {
        $genders = Gender::all();
        $nacionalities = Nacionality::all();
        return view('editorial.edit', compact('editorial', 'nacionalities', 'genders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditorialRequest $request, Editorial $editorial)
    {
        $editorial->update($request->all());
        return redirect()->route('editorial.show', $editorial);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editorial $editorial)
    {
        $editorial->delete();
        return redirect()->route('editorial.index');
    }
}
