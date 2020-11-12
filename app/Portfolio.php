<?php

namespace App;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class Portfolio extends Model
{
    use Translatable;
    use Resizable;
    public $table = "portfolio";

    protected $fillable = ['picture', 'images'];

    protected $translatable= ['name', 'description'];

   
}
