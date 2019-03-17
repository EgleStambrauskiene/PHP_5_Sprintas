<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'email',
        'comment',
        'company_id',
    ];

    public $timestamps = false;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = Str::title($name);
    }

    public function setLastnameAttribute($lastname)
    {
        $this->attributes['lastname'] = Str::title($lastname);
    }
}
