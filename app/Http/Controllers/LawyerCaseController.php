<?php

namespace App\Http\Controllers;

use App\Http\Resources\LawyerCaseResource;
use App\Models\LawyerCase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LawyerCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new LawyerCaseResource(LawyerCase::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(Auth::user());
        // $request->validate([
        //     '',
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LawyerCase  $lawyerCase
     * @return \Illuminate\Http\Response
     */
    public function show(LawyerCase $lawyerCase)
    {
        return new LawyerCaseResource(LawyerCase::find($lawyerCase));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LawyerCase  $lawyerCase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LawyerCase $lawyerCase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LawyerCase  $lawyerCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(LawyerCase $lawyerCase)
    {
        //
    }
}