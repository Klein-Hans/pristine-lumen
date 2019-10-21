<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

    protected $fillable = ["first_name", "last_name", "email", "user_type_id"];

    protected $dates = [];

    public static $rules = [
        "first_name" => "required",
        "last_name" => "required",
        "email" => "required",
        "password" => "required",
        "user_type_id" => "numeric",
        "mobile_number" => "unsigned",
    ];

    // Relationships

}
