<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Data::all();
        return response()->json($data);
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
        $data = Data::find($id);

        if (!$data) 
        {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 404);

            return response()->json($data);
        }
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
