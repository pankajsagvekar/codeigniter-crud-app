<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    public function index()
    {
        // echo "This Is A Product Controller";
        return view('frontend/product');
    }

    public function find($prod_name){
        // echo "Product : ".$prod_name;
        // $data['name'] = $prod_name;
        // $data['prod_list'] = ["nokia", "redmi", "samsung"];

        //easier way to do this
        $data = [
            'name' => $prod_name,
            'prod_list' => ["nokia", "redmi", "samsung"]
        ];
        
        return view('frontend/product', $data); //sending parameter to the view
    }
}
