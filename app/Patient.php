<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $primarykey = 'Pid';

    public function Record()
    {
        return $this->hasMany(Record::Class,'RPid','Pid');
    }
}
