<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products; 
use Barryvdh\DomPDF\Facade as PDF;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Products::orderBy('id','asc')->paginate(5);
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'quality' => 'required',
            'product' => 'required',
            'description' => 'required',
            'code' => 'required',
            'bill' => 'required',
            'date' => 'required',
            'number' => 'required',
            'date_out' => 'required',
            'person' => 'required',
            'place' => 'required',
        ]);
        Products::create($request->all());
        return redirect()->route('products.index') ->with('success','Product Registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::all();
        $pdf = PDF::loadview('products.mostrar', compact('products'));
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products=product::find($id);
        return view('products.edit',compact('product'));
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
        $request->validate([
            'quality' => 'required',
            'product' => 'required',
            'description' => 'required',
            'code' => 'required',
            'bill' => 'required',
            'date' => 'required',
            'number' => 'required',
            'date_out' => 'required',
            'person' => 'required',
            'place' => 'required',
        ]);
    Products::find($id)->update($request->all());
        return redirect()->route('products.index')->with('success','Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::find($id)->delete();
        return redirect()->route('products.index')->with('success','El producto fue Eliminado correctamente');
    }
}
