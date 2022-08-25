<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Models\Taxi;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Cache;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TaxiRepository {

    private $repo_taxi;

    public function __construct(Taxi $model_taxi) {
        $this->repo_taxi = $model_taxi;
    }


    public function setCreateTaxi(array $date): Taxi {
        //dd(($date));
        /*
        $count_taxi = $this->repo_taxi::count();
        $date = Carbon::now()->format('d'). $count_taxi + 1;
        $hash = str_pad($date, 6, '0', STR_PAD_RIGHT);

        $url_qr_code = config('app.url').'/'.$hash;
        $name_qr_code = $hash.'qrcode.svg';
        $path_qr_code = public_path('uploads/qrcodes/taxis/').$name_qr_code;

        QrCode::generate($url_qr_code, $path_qr_code);
        */

        $taxi = $this->repo_taxi::insert([
                    'name' => $date['name'],
                    'email' => $date['email'],
                    'phone' => $date['phone'],
                    'cpf' => $date['cpf'],
                    'date_birth' => Carbon::parse($date['date_birth'])->format("Y-m-d"),
                    'gender' => $date['gender'],
                    'password' => Hash::make($date['password']),
                    'image' => null,
                    'hash' => (int) "123",
                    'qr_code' => "TESTE",
                    'status' => 1,
                    'accept_lgpd' => 1
                ]); 
               
        return $taxi;           
    /*
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

*/
       if($taxi) {
            return $taxi;
       }

       return false;
    }


}
