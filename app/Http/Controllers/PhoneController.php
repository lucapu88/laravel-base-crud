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
    public function show(Phone $phone)
    {
        //$phone = Phone::find($id); //per utilizzarlo bisogna aggiungere $id tra parentesi del show al posto di 'Phone $phone'
        return view('phones.show', ['phone'=> $phone]);
    }

    /**
     * Show the form for editing the specified resource.

     */
    public function edit(Phone $phone)
    {
        return view('phones.edit', ['phone'=> $phone]);
    }

    public function confirm(Phone $phone)
    {
        return view('phones.confirm', ['phone'=> $phone]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phone $phone)
    {
        $form_data = $request->all();
        $phone->update($form_data);
        return redirect()->route('phones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        $phone->delete();
        return redirect()->route('phones.index');
    }
}
