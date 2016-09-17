<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'email',
        'phone',
        'address_l1',
        'address_l2',
        'city',
        'state',
        'country',
        'currency',
        'tax',
        'shipping',
        'fb',
        'twitter',
        'gplus',
        'youtube',
        'instagram',
    ];
}