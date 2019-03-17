<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DateType extends Model
{
    /**
     * Hide the pivot table information, and the timestamps
     */
    protected $hidden = array('created_at', 'updated_at');


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'format'
    ];

    /**
     * The Releases for the DateType.
     */
    public function releases()
    {
        return $this->hasMany('App\Release');
    }
}
