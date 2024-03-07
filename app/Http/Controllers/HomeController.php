<?php

namespace App\Http\Controllers;
use App\Models\Penerbit;
use App\Models\Buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $penerbit;
    public function __construct()
    {
        $this->penerbit = new Penerbit();
    }
    public function index()
    {
        $no = 1;
        $penerbit = Penerbit::all();
        $buku = Buku::all();
        return view('home', compact('penerbit','buku','no'));
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
