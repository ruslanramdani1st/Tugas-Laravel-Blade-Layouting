<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengarang = Pengarang::all();
        return view('layouts.admin.pengarang.index', compact('pengarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.admin.pengarang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:pengarangs,email',
            'tlp' => 'required|unique:pengarangs,tlp'
        ]);
        $pengarang = new Pengarang();
        $pengarang->nama = $request->nama;
        $pengarang->email = $request->email;
        $pengarang->tlp = $request->tlp;
        $pengarang->save();
        // dd($penulis);
        return redirect()->route('pengarang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengarang = Pengarang::findOrFail($id);
        return view('layouts.admin.pengarang.show', compact('pengarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengarang = Pengarang::findOrFail($id);
        return view('layouts.admin.pengarang.edit', compact('pengarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:pengarangs,email,' .$id,
            'tlp' => 'required|unique:pengarangs,tlp,' .$id
        ]);
        $pengarang = Pengarang::findOrFail($id);
        $pengarang->nama = $request->nama;
        $pengarang->email = $request->email;
        $pengarang->tlp = $request->tlp;
        $pengarang->save();
        // dd($penulis);
        return redirect()->route('pengarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengarang::findOrFail($id)->delete();
        return redirect()->route('pengarang.index');

    }
}
