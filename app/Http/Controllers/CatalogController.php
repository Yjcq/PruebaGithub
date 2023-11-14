<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    
  public function getIndex()
    {
        $movies = Movie::all();
        return view('catalog.index', compact('movies'));
    }

    public function getShow($id)
    {
        $movie = Movie::findOrFail($id);
        return view('catalog.show', compact('movie'));
    }

    public function getEdit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('catalog.edit', compact('movie'));
    }

    public function getCreate()
    {
        return view('catalog.create');
    }
}