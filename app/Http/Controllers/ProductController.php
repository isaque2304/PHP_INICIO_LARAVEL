<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Método para retornar todos os produtos
    public function index(Product $product)
    {
        //$model = new Product();
        return view('products.index', [
            "allProducts" => $product->where('quantity','>', 0)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Método para retornar a view para cadastro dos produtos
    public function create(Product $product)
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //Método para gravar produto no banco de dados
    public function store(Request $request, Product $product)
    {
        $product->create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'value' => $request->input('value'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    //Método para visualizar o produto
    public function show(Product $products, $id)
    {
        $product = $products->find($id);
        return view('products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

     //Método para visualizar o produto para edição
    public function edit(Product $products, $id)
    {
        $product = $products->find($id);
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

     //Método para editar o produto
    public function update(Request $request, Product $products, $id)
    {
        $product = $products->find($id);
        $product->update([
            'name'=> $request->input('name'),
            'quantity'=> $request->input('quantity'),
            'value'=> $request->input('value'),
            'description' => $request->input('description')
        ]);
        return redirect()->route('products.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

     //Método para deletar um produto
    public function destroy(Product $products, $id)
    {
        //return view('products.destroy');
        $product = $products->find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
