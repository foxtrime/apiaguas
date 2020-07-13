<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteEndereco;


class ApiClienteEnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clienteEndereco = ClienteEndereco::all();


        $arr = [];
        

        foreach($clienteEndereco as $clienteEnderecos){
            $a = ['id'=>$clienteEnderecos->id, 'num_hidro'=>$clienteEnderecos->num_hidro,'rua'=>$clienteEnderecos->rua, 'numero'=>$clienteEnderecos->numero, 'bairro'=>$clienteEnderecos->bairro,'complemento'=>$clienteEnderecos->complemento   ];
            array_push($arr,$a);
        }

         //dd($arr);
        return response()->json(
            $arr
        ); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
