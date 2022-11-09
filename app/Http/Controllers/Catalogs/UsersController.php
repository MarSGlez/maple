<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    /**
     * Show index page
     */
    public function index()
    {
        return view('catalogs.users.index');
    }

    /**
     * Return user books via AJAX API REQUEST [json]
     */
    public function api(Request $request)
    {
        return datatables()->collection(User::all())->toJson();
    }
}
