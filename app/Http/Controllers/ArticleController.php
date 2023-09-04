<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('index', ['articles' => $articles]
    );
    }

    public function create(){
        return view('formCreate');
    }

    public function store(Request $request) {
        $data = $request ->validate([
            'nom' => 'required|max:255',
            'description '=> 'required|max:255',
            'prix'=> 'required|integer min:0',
        ]);

        Article::create(data);
        return redirect('index')->with('Sucess','articles enregistré avec succes');


    }

    // public function edit($id){
    //     $article = Article::findOrFail($id);
    //     return view('articleEdit', ['article'=>$article]);

    // }

    public function delete($id){
        
    }


    
}
