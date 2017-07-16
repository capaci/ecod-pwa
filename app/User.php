<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'birthday',
        'nationality',
        'gender',
        'custom-gender',
        'blood_type',
        'allergies',
        'nome_familiar1',
        'tel_familiar1',
        'nome_familiar2',
        'tel_familiar2',
        'nome_medico',
        'tel_medico',
        'nome_plano',
        'tel_plano',
        'tabagismo',
        'sedentarismo',
        'etilismo',
        'atividade-fisica',
        'musculoesqueletica',
        'cardiovascular',
        'uroginecologia',
        'neurologia',
        'cardio',
        'outras',
        'hipertensao',
        'diabetes',
        'CA',
        'degenerativas',
        'vasculares',
        'neurologicas',
        'neurologia',
        'cirurgias'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [
//        'password', 'remember_token',
//    ];
}
