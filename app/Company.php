<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];

    public $timestamps = false;


    public function customer()
    {
        return $this->hasMany(Customer::class);
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = Str::title($title);
    }
}
