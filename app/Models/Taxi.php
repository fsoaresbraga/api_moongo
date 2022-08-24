<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Taxi extends Model
{
    use HasFactory, Notifiable, UuidTrait;


    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $table = 'taxi';

    //protected $fillable = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'cpf', 'date_of_birth', 'gender', 'password',
        'image', 'hash', 'qr_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $genderOptions = [
        'mas' => 'Masculino',
        'fem' => 'Feminino'
    ];

    public $statusOptions = [
        0 => 'Inativo',
        1 => 'Ativo'
    ];

    public function car() {
        return $this->hasOne(TaxiCar::class);
    }

    public function place() {
        return $this->hasOne(TaxiPlace::class);
    }
}
