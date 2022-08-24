<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\Models\Taxi;

class TaxiRepository {

    private $taxi;

    public function __construct(Taxi $model_taxi) {
        $this->taxi = $model_taxi;
    }


    public function setCreateTaxi(array $date) : Taxi {

       $taxi = $this->taxi
       ->create([
           'name' => $date['name'],
           'email' => $date['email'],
           'cpf' => $date['cpf'],
           'date_of_birth' => $date['date_of_birth'],
           'gender' => $date['gender'],
           'password' => $date['password'],
           'image' => $date['image'],
           'hash' => $date['user'],
           'qr_code' => $date['user'],
           'status' => 1,

       ]);

       $car = $taxi->car()->create([
            'car_plate' => $date['car_plate'],
            'car_renamed' => $date['car_renamed'],
            'model' => $date['model'],
            'year' => $date['year'],
            'color' => $date['color']
       ]);

       $place = $taxi->place()->create([
            'cep' => $date['cep'],
            'street' => $date['street'],
            'number' => isset($date['number']) ? $date['number'] : null,
            'district' => $date['district'],
            'complement' => isset($date['complement']) ? $date['complement'] : null,
            'city' => $date['city'],
       ]);


       if($taxi && $car && $place) {
            return $taxi;
       }

       return false;
    }


}
