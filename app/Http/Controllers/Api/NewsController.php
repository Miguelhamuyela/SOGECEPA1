<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {

            // Lógica para fazer upload da imagem
            $file = $request->file('path')->store('news');

            $news = News::create([
                'path' => $file,
                'title' => $request->title,
                'typewriter' => $request->typewriter,
                'body' => $request->body,
                'date' => $request->date,
                'state' => 'Autorizada'
            ]);

            return response()->json(['message' => 'Notícia criada com sucesso', 'data' => $news], 201);

        } catch (\Exception $e) {
            // Retorna uma resposta com erro interno do servidor (500) caso ocorra uma exceção
            return response()->json(['message' => 'Erro interno do servidor', 'error' => $e->getMessage()], 500);
        }
    }

}
