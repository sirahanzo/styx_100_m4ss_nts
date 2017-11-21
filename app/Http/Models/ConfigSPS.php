<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ConfigSPS extends Model {


    protected $table = 'config_sps';

    protected $fillable = ['parameter', 'min', 'max', 'scale', 'state', 'unit'];


    public function monitoring()
    {
        return $this->belongsTo(Monitoring::class, 'id', 'id');
    }

}
