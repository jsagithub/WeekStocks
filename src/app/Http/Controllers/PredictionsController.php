<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Predictions;
use App\Http\Resources\Predictions as PredictionsResource;

class PredictionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $predictions = Predictions::paginate(15);

        return PredictionsResource::collection($predictions);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $predictions = Predictions::findOrFail($id);
        return new PredictionsResource($predictions);
    }
}
