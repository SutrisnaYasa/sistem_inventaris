<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarcodeModel extends Model
{
    //
    protected $table = "barcode_models";

    protected $guarded = ['*', 'id'];
}
