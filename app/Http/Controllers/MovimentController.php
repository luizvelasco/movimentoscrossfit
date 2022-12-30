<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Moviment;

class MovimentController extends Controller
{
    public function index() {

        $search = request('search');

        if ($search) {

            $moviment = Moviment::where ([
                ['title', 'like', '%' . $search . '%']
            ])->get();

        } else {
            $moviment = Moviment::all();
        }
      

        return view('welcome', ['moviments' => $moviment, 'search' => $search]);
    }

    public function create() {
        return view ('moviments.create');
    }

    public function store(Request $request) {
        $moviment = new Moviment;

        $moviment->title = $request->title;
        $moviment->description = $request->description;
        $moviment->link = $request->link;
        // $moviment->tags = $request->tags;

        //Imagem Upload
        if ($request->hasfile('image') && $request->file('image')->isvalid()) {
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/moviments'), $imageName);

            $moviment->image = $imageName;

        }

        $moviment->save();

        return redirect('/')->with('msg', 'Movimento criado com sucesso');
    }

    public function show ($id) {
        
        $moviment = Moviment::findOrFail($id);

        return view('moviments.show', ['moviment' => $moviment]);
    }

    public function dashboard() {

        $moviment = Moviment::all();

        return view('moviments.dashboard', ['moviments' => $moviment]);

    }

    public function destroy($id) {

        Moviment::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Movimento excluído com sucesso');

    }

    public function edit($id) {

        $moviment = Moviment::findOrFail($id);

        return view ('moviments.edit', ['moviment' => $moviment]);

    }

    public function update(Request $request) {

        $data = $request->all();

         //Imagem Upload
         if ($request->hasfile('image') && $request->file('image')->isvalid()) {
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/moviments'), $imageName);

            $data['image'] = $imageName;

        }

        Moviment::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Movimento editado com sucesso');

    }
}
