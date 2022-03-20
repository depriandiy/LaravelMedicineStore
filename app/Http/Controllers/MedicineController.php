<?php

namespace App\Http\Controllers;

use App\Category;
use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata = Medicine::all();
        // $name = $listdata->generic_name;
        // $form = $listdata->form;
        // $price = $listdata->price;

        return view('product.index', compact('listdata'));
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
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        // select * from medicine where id = $medicine
        $res = Medicine::find($medicine);
        // dd($res->generic_name);
        $message = "";
        if ($res) {
            $message = $res;
        } else {
            $message = null;
        }

        return view('medicine.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }

    public function report () 
    {
        $listdata = DB::table('medicines')
                    ->join('categories', 'medicines.category_id', '=', 'categories.id')
                    ->select('medicines.generic_name', 'medicines.form', 'categories.name')
                    ->get();

        return view('medicine.report', compact('listdata'));
    }

    public function drug_one_form ()
    {
        $one_form = Medicine::select('generic_name', DB::raw('count(generic_name) as total'))
                    ->groupBy('generic_name')
                    ->havingRaw('count(generic_name) = 1')
                    ->get();

        return view('report.drug_one_form', compact('one_form'));
    }
}
