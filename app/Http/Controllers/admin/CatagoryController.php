<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminCatagory;
use App\Models\Catalog;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listCatagories = AdminCatagory::listCatagories()->get();
        return view("admin.catagories.listcatagories", compact("listCatagories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.catagories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ten_dm' => 'required|string|max:100',
            'stt' => 'required|numeric |max:100',
            'sethome' => 'required|in:0,1',
        ]);

        $catagory = AdminCatagory::create($validatedData);
        return back()->with('success', 'Created Catagory Successfully');
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
    public function edit(string $catagory_id)
    {
        $catagory = AdminCatagory::findOrFail($catagory_id);
        return view("admin.catagories.edit", compact("catagory"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $catagory_id)
    {
        $catagory = AdminCatagory::findOrFail($catagory_id);
        $request->validate([
            'ten_dm' => 'required|string|max:100',
            'stt' => 'required|numeric|max:100',
            'sethome' => 'required|numeric|in:0,1',
        ]);
        $catagory->update($request->all());
        return back()->with('success', 'Catagory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catalog = AdminCatagory::findOrFail($id);
        $catalog->delete();
        return redirect()->route('catagories.index')->with('successDeleteUser', 'Danh mục đã được xóa!');
    }
}
