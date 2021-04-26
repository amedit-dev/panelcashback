<?php

namespace App\Models;
use App\Models\User;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'screenshot',
        'transactions',
    ];

    public function user(){

        return $this->belongsTo('App\Models\User');

    }


    public function getCreatedAtAttribute($value){

        $dt = Carbon::parse($value);
        return $dt->format('d/m/Y');

    }

    public function getPositionAttribute($value){

     //   return  number_format($value, 0, ',', '.');

        return     $value; //$followers = number_format( $value , 0 , ',' , ' ' );


    }

    public function OFFgetTransactionsAttribute($value){

        return number_format($value , 0, ',', ' ');

    }

    public function getScreenshotAttribute($value)
    {

        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('thumbnail/' . $value);
    }



}
