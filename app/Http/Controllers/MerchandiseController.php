<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Merchandise;

class MerchandiseController extends Controller
{
    public function index() {
        return inertia('Merchandises/Index',[
            'categories' => Category::orderBy('name')->get(),
            'merchandises' => Merchandise::orderBy('name')->get()
        ]);
    }

    public function store(Request $request) {
        // $fields = $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'category_id' => 'required|numeric',
        //     'sku' => 'required',
        //     'barcode' => 'required',
        //     'wholesale_price' => 'required|numeric',
        //     'retail_price' => 'required|numeric',
        // ]);

        $save = Merchandise::create($request->all());

        return redirect('/merchandises');
    }
}
