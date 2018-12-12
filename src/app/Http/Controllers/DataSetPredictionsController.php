<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\DataSetPredictions;
use App\Http\Resources\DataSetPredictions as DataSetPredictionsResource;

class DataSetPredictionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_set_predictions = DataSetPredictions::paginate(15);

        return DataSetPredictionsResource::collection($data_set_predictions);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_set_predictions = DataSetPredictions::findOrFail($id);
        return new DataSetPredictionsResource($data_set_predictions);
    }
}
