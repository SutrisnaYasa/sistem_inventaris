<?php

namespace App\Exports;

use App\BarcodeModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    //public function collection()
    //{
    //    return BarcodeModel::all();
    //}

    public function __construct($post)
    {
        $this->post = $post;
    }

    public function collection()
    {
        return $this->post->get();
    }
}
