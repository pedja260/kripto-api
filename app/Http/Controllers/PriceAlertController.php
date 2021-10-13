<?php

namespace App\Http\Controllers;

use App\Http\Resources\PriceAlertResource;
use App\Price_alert;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class PriceAlertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PriceAlertResource::collection(Price_alert::latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Price_alert::create($request->all());
        return response('Created', \Symfony\Component\HttpFoundation\Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Price_alert $price_alert)
    {
        return new PriceAlertResource($price_alert);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price_alert $price_alert)
    {
        $price_alert->update($request->all());
        return response('Update', \Symfony\Component\HttpFoundation\Response::HTTP_ACCEPTED);

//        return new PriceAlertResource($price_alert);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price_alert $price_alert)
    {
        $price_alert->delete();
        return response()->noContent();
    }
}
