<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklan = Iklan::all();

        return view('back.iklan.index', compact('iklan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('back.iklan.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iklan = Iklan::find($id);
        return view('back.iklan.edit', compact('iklan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        if (!empty($request->file('gambar_iklan'))) {

            $data = $request->all();
            $iklan = Iklan::find($id);
            $iklan->update([
                'judul_iklan' => $request->judul_iklan,
                'link' => $request->link,
                'status' => $request->status,

            ]);

            $data['gambar_iklan'] = $request->file('gambar_iklan')->store('iklan');


            $iklan = Iklan::findOrfail($id);
            Storage::delete($iklan->gambar_iklan);
            $iklan->update($data);
        } else {
            $data = $request->all();
            $iklan = Iklan::find($id);
            $iklan->update([
                'judul_iklan' => $request->judul_iklan,
                'link' => $request->link,
                'status' => $request->status,

            ]);

            $iklan = Iklan::findOrfail($id);

            $iklan->update($data);
        }
        return redirect()->route('iklan.index')->with('info', 'Data Berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
