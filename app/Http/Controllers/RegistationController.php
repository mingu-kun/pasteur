<?php

namespace App\Http\Controllers;

use App\registation;
use Illuminate\Http\Request;

class RegistationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration');
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
        request()-> validate([
            'nama' => ['required'],
            'email' => ['required'],
            'telp' => ['required'],
            'alamat' => ['required']
        ]);

        $registation = new registation;
        $registation->nama = request('nama');
        $registation->email = request('email');
        $registation->telp = request('telp');
        $registation->alamat = request('alamat');
        $registation->save();

        return redirect('/registration')->with('success','Terimakasih .. ! registration berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registation  $registation
     * @return \Illuminate\Http\Response
     */
    public function show(registation $registation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registation  $registation
     * @return \Illuminate\Http\Response
     */
    public function edit(registation $registation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registation  $registation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registation $registation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registation  $registation
     * @return \Illuminate\Http\Response
     */
    public function destroy(registation $registation)
    {
        //
    }
}
