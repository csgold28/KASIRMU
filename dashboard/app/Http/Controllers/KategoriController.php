<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('id', 'desc')->get();
        return view('kategori.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $outlet = $user->outlet;
        return view('kategori.create', compact('outlet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'outlet'    => 'required',
            'name'      => 'required'
        ], [
            'outlet.required'   => 'Pilih Outlet',
            'name.required'     => 'Kolom Nama Kategori masih kosong'
        ]);

        if ($request->outlet == 'all') {
            $user = Auth::user();
            $outlets = $user->outlet;
            $category = Category::create([
                'name'  => $request->name
            ]);
            foreach ($outlets as $outlet) {
                $outlet->category()->attach($category->id);
            }
        } else {
            $category = Category::create([
                'name'  => $request->name
            ]);
            $category->outlet()->attach($request->outlet);
        }
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
        //
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
        //
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
