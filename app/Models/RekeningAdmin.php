<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekeningAdmin extends Model
{
    protected $fillable = ['bank_id', 'account_name', 'account_number'];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
