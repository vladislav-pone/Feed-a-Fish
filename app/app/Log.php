<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function date(): string
    {
        return $this->created_at->setTimezone('EEST')->isoFormat('MMMM Do YYYY, hh:mm:ss');
    }
}