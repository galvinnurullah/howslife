<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SambatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("curhat/index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'pesan'=>'required',
        // ],[
        //     'pesan.required'=>'Isi pesan dulu ya baru bisa kirim...',
        // ]);

        // $infocurhat = [
        //     'pesan'=> $request->pesan
        // ];

        // if(Auth::attempt($infocurhat)){
        //     return redirect('curhat')->with('success', 'Berhasil membuat pesan curhat');
        // }

        $pesan=$request->input('pesan');


        $curhat = DB::table('curhat')->insert([
            'pesan' => $pesan,
        ]);

        return redirect('curhat')->with('success','Berhasil mengirim pesan');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
