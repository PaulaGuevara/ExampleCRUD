<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rentals extends Model
{
    protected $table = 'rentals';
    protected $fillable = ['start_date','end_date','total','user_id','status_id'];
    protected $guarded = ['id'];
}
