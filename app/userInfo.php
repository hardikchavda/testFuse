<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userInfo extends Model {

    protected $table = 'userInfo';
    protected $fillable = ['firstname', 'lastname','middlename'];

}
