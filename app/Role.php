<?php namespace Calendar;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany('Calendar\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('Calendar\Permission');
    }

}
