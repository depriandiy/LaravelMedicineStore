<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listcat = Category::all();

        return view('category.index', compact('listcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function showlist($id_category) 
    {
        // using Eloquent method
        $data = Category::find($id_category); // krn pake find, maka hasil $data adalah single class
        $namecategory = $data->name;
        $result = $data->medicines; // $medicines dari Category.php, isinya nnti array krn pake hasMany

        if ($result)
            $getTotalData = $result->count();
        else
            $getTotalData = 0;

        return view('report.list_medicine_by_category', compact('id_category', 'namecategory', 'result', 'getTotalData'));
    }

    public function report ()
    {
        // Categories that doesn't have medicines data
        $data = Category::whereNotIn('id', function($q) {
            $q->select('category_id')->from('medicines');
        })->get();
                
        return view('category.report', compact('data')); 
    }

    public function avg_price ()
    {
        // average price of each drug category
        $avg = Category::select('name', DB::raw('avg(medicines.price) as average'))
                        ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
                        ->groupBy('categories.name')
                        ->get();

        return view('report.avg_price_each_category', compact('avg'));
    }

    public function one_medicine () 
    {
        // Category that only have one medicine data 
        $one = Category::select('name', DB::raw('count(medicines.id) as total'))
                        ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
                        ->groupBy('categories.name')
                        ->havingRaw('count(medicines.id) = 1')
                        ->get();

        return view('report.list_category_one_medicine', compact('one'));
    }

    public function highest_price ()
    {
        $highest = Category::select('name', 'medicines.generic_name', 'medicines.price')
                    ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
                    ->orderBy('medicines.price', 'desc')
                    ->first();

        return view('report.category_highest_price', compact('highest'));
    }
}
