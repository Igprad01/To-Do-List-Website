<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;

class taskscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = 'belum';

        tasks::create([
        'name'=> $request -> name,
        'deskripsi' => $request -> deskripsi,
        'batas_tgl' => $request -> batas_tgl,
        'batas_waktu' => $request -> batas_waktu,
        'status' => $status
       ]);

       return redirect('/');
    }

    public function exit($id) {
        $task = tasks::findOrFail($id);
        $status = 'selesai';
        $task->status = $status;
        $task->save();
    
        return redirect('/');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $show = tasks::where('status', 'belum')->get();
        return view('read', compact('show'));

    }

    public function history()
    {
        $riwayat = tasks::where('status', 'selesai')->paginate(5);
        return view('history', compact('riwayat'));
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
