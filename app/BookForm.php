<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookForm extends Model
{
    
    public $table = 'booknow';

    public $fillable = ['classes','name','lastname','email','cellphone',
    'country','city','state','pk_adress', 'special_required'];

    
}
