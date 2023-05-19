<?php

namespace App\Http\Controllers;

use App\Http\Requests\NacionalityRequest;
use App\Models\Nacionality;
use Illuminate\Http\Request;

class NacionalityController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Nacionality $nacionality)
    {
        $nacionalities = Nacionality::orderBy('id', 'desc')->paginate();
        return view('nacionality.index', compact('nacionalities', 'nacionality'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nacionality.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NacionalityRequest $request)
    {
        $nacionality = Nacionality::create($request->all());
        return redirect()->route('nacionality.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nacionality $nacionality)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nacionality $nacionality)
    {
        return view('nacionality.edit', compact('nacionality'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NacionalityRequest $request, Nacionality $nacionality)
    {
        $nacionality->update($request->all());
        return redirect()->route('nacionality.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nacionality $nacionality)
    {
        $nacionality->delete();
        return redirect()->route('nacionality.index');
    }
}
