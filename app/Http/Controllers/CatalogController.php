<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    
    public function getShow($id)
{
    return view('catalog.show', array('id'=>$id));

    ($this->arrayPeliculas[$id]);
}

public function getEdit($id)
{
    return view('catalog.edit', array('id'=>$id));
}

public function getIndex($id)
{
    return view('catalog.index', ($this->arrayPeliculas));

    

    
}

public function getCreate($id)
{
    return view('catalog.create');
}


}
