<?php

namespace App\Http\Controllers\Catalogs;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    /**
     * Show index page
     */
    public function index()
    {
        return view('catalogs.categories.index');
    }

    /**
     * Return user books via AJAX API REQUEST [json]
     */
    public function api(Request $request)
    {
        $query = Category::select();

        $dir = 'asc';
        $field = 'id';

        //SORT
        if(isset($request['order'])){
            if(isset($request['order'][0])){
                if(isset($request['order'][0]['dir']))
                {
                    $dir = $request['order'][0]['dir'];
                }
            }

            if(isset($request['order'][0])){
                if(isset($request['order'][0]['column']))
                {
                    $field = $request['order'][0]['column'];
                    $column = $request['columns'][$field];
                    if(isset($column['name']))
                    {
                        $field = $column['name'];
                    }else{
                        $field = 'id';
                    }

                }
            }
        }

        $query->orderBy($field, $dir);

        if(isset($request['search']['value'])){
            $query->where('name', 'like', '%' . $request['search']['value'] . '%')
                ->orWhere('id', 'like', '%' . $request['search']['value'] . '%');
        }

        //COUNT BEFORE PAGINATION
        $total_records = $query->count();

        //PAGINATION
        $query->skip(($request['start']));
        $query->limit($request['length']);
//

        return response([
            'recordsTotal' => Category::count(),
            'recordsFiltered' => $total_records,
            'data' => $query->get()->toArray()
        ]);
    }
}
