<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\ClienteEndereco;
use App\Models\Marcacao;

class ApiMarcacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Marcacao =  Marcacao::all();
        
        $arr = [];
        

        foreach($Marcacao as $marcacoes){
            $a = ['leitura_mes'=>$marcacoes->leitura_mes, 'data' => $marcacoes->data,'hora' => $marcacoes->hora, 'endereco_id' => $marcacoes->endereco_id];
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
        
        $marcacao = new Marcacao();
        $marcacao->leitura_mes = $request->leitura_mes;
        $marcacao->data = $request->data;
        $marcacao->hora = $request->hora;
        $marcacao->endereco_id = $request->endereco_id;
        $marcacao->save();

        return response()->json([
            'success'   =>  true,
            'data'      =>  $marcacao
        ], 200);

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
