<?php

namespace App\Http\Controllers;
use App\Descricao;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class DescricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::with('descricao')->get();
        return view('Descricao.create')->with('categorias', $categorias);
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
            'descricaonome' => 'required'
        ]);

        $descricao = new Descricao();
        $descricao->categoria_id= $request['categoria_id'];
        $descricao->descricaonome = $request['descricaonome'];
        $descricao->slug = Str::slug($request['descricaonome']);
        $latestSlug = Descricao::whereRaw("slug RLIKE '^{$descricao->slug}(-[0-9]*)?$'")
        ->latest('id')
        ->value('slug');
            if ($latestSlug){
                $pieces = explode('-', $latestSlug);
                $number = intval(end($pieces));
                $descricao->slug .= '-' . ($number + 1);
            
                
            }
            $descricao->save();
                return redirect('home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Descricao  $descricao
     * @return \Illuminate\Http\Response
     */
    public function show(Descricao $descricao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Descricao  $descricao
     * @return \Illuminate\Http\Response
     */
    public function edit(Descricao $descricao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Descricao  $descricao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descricao $descricao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Descricao  $descricao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descricao $descricao)
    {
        //
    }
}
