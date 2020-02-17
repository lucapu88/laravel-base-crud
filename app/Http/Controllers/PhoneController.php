<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phone = Phone::all();
        $data = ['phones' => $phone];
        return view('phones.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $phone = new Phone();
        $phone->fill($form_data);
        $phone->save();
        return redirect()->route('phones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $phone = Phone::find($id);
        return view('phones.show', ['phone'=> $phone]);
    }

    /**
     * Show the form for editing the specified resource.

     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
