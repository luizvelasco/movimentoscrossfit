<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Moviment;

class MovimentController extends Controller
{
    public function index() {

        $moviments = Moviment::all();

        return view('welcome', ['moviments' => $moviments]);
    }

    public function create() {
        return view ('moviments.create');
    }

    public function store(Request $request) {
        $moviment = new Moviment;

        $moviment->title = $request->title;
        $moviment->description = $request->description;
        $moviment->link = $request->link;

        $moviment->save();

        return redirect('/')->with('msg', 'Movimento criado com sucesso');
    }
}
