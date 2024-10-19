<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Ticket;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view("tiket",     compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function relasiOneToMany()
    {
        return $data = User::with('tikets')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $data = $request -> all();
    //     unset($data['_token']);
    //     Tiket::insert(values:$data);
    //     return redirect('/show_data');
    // }
    public function store(Request $request)
    {
      $request->validate([
        'user_id' => 'required|exists:users,id',
        'tanggal_keberangkatan' => 'required',
        'no_kursi' => 'required|string|max:255',
        'asal' => 'required|string|max:255',
        'tujuan' => 'required|string|max:255',
      ]);

      try{
        $data = $request -> all();
        unset($data['_token']);
        Tiket::insert(values:$data);
        return redirect('/show_data') -> with('Succes', 'data berhasil disimpan guys.');
      } catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => 'terjadi kesalahan saat menyimpan data.']);
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tiket $tiket)
    {
        $tiket = Tiket::all();
        return view('result_tiket', compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tiket $tiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiket $tiket)
    {
        //
    }
}
