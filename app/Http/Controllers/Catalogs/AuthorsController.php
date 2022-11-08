<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{

    /**
     * Show index page
     */
    public function index()
    {
        return view('catalogs.authors.index');
    }

    /**
     * Return user books via AJAX API REQUEST [json]
     */
    public function api(Request $request)
    {
        return datatables()->collection(Author::all())->toJson();
    }
}
