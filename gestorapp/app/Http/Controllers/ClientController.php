<?php

namespace App\Http\Controllers;

use App\Models\Client as Client;
use App\Http\Resources\Cliente as ClientResource;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $client = Client::paginate(15);
        return ClientResource::collection($client);
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
    public function store(Request $request) {
        $cliet = new Client;
        $client->nome = $request->nome;
        $client->numero = $request->numero;
        $client->endereco = $request->endereco;
        $client->complemento = $request->complemento;
        $client->bairro = $request->bairro;
        $client->cidade = $request->cidade;
        $client->estado = $request->estado;
        $client->cep = $request->cep;
        $client->cpf = $request->cpf;
        $client->identidade = $request->identidade;
        $client->telefone = $request->telefone;
        $client->celular = $request->celular;
        $client->email = $request->email;
        $client->site = $request->site;
        $client->nascimento = $request->nascimento;

        if($client->save()) {
            return new ClientResource($client);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $client = Client::findOrFail($id);
        return new ClientResource($client);
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
