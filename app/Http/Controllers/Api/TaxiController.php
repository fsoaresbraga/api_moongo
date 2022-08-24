<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\TaxiRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaxiResource;
use App\Repositories\TaxiRepository;

class TaxiController extends Controller
{
    private $repository_taxi;

    public function __construct(TaxiRepository $taxiRepository) {

        $this->repository_taxi = $taxiRepository;

    }



    public function store (TaxiRequest $request) {
        $courses = $this->repository->setCreateTaxi($request->validated());
        return new TaxiResource($courses);
    }


}
