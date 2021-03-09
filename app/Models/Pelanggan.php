<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pelanggan extends Model
{
    protected $table = "pelanggans";
    protected $guarded = [];

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y');
    }
}
