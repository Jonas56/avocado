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
        $cases = LawyerCase::where('user_id', auth()->user()->id)->latest()->with('client')->get();

        return new LawyerCaseResource($cases);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $this->validateCase();

        $attributes['user_id'] = auth()->user()->id;

        $case = LawyerCase::create($attributes);

        return response($case, 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LawyerCase  $lawyerCase
     * @return \Illuminate\Http\Response
     */
    public function show(LawyerCase $lawyerCase)
    {
        $case = LawyerCase::where('id', $lawyerCase->id)->with('client')->get();
        return new LawyerCaseResource($case);
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
        $case = LawyerCase::find($lawyerCase)->first();

        $attributes = $this->validateCase($lawyerCase);

        $case->update($attributes);

        return response()->json(['message' => "Case updated succesfully"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LawyerCase  $lawyerCase
     * @return \Illuminate\Http\Response
     */
    public function destroy(LawyerCase $lawyerCase)
    {
        $case = LawyerCase::find($lawyerCase)->first();
        $case->delete();
        return response()->json(['message' => 'case deleted succesfully'], 200);
    }

    protected function validateCase(?LawyerCase $lawyerCase = null): array
    {
        $lawyerCase??=new LawyerCase();

        return request()->validate([
            'client_id' => 'required|exists:clients,id',
            'title' => 'required',
            'description' => 'required',
            'judge_name' => 'required',
            'enemy' => 'required',
            'place' => 'required',
        ]);
    }
}