<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        "app_name",
        "address",
        "phone",
        "email",
        "meta_keyword",
        "meta_description",
        "facebook",
        "twitter",
        "instragram",
        "linked_in",
        "site_logo",
        "fav_icon",
    ];
}
