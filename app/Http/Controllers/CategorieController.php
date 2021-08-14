<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function ajoutercategorie()
    {
        return view('admin.ajoutercategorie');
    }

    public function sauvercategorie(Request $request)
    {
        $this->validate($request, ['Category_name' => 'required|unique:categories']);
        $categories = new Category();
        $categories->category_name = $request->input('Category_name');
        $categories->save();

        return redirect('/admin/ajoutercategorie')->with('status', 'La categorie ' .$categories->category_name. ' a été ajouter avec succès' );
    }

    public function categories()
    {
        $categories = Category::get();

        return view('admin.categories')->with('categories', $categories);
    }

    public function edit_categorie($id)
    {
        $categorie = Category::find($id);

        return view('admin.editcategorie')->with('categorie', $categorie);
    }

    public function modifiercategorie(Request $request )
    {
        $this->validate($request, ['Category_name' => 'required|unique:categories']);

        $categories = Category::find($request->input('id'));
        $categories->category_name = $request->input('Category_name');
        $categories->update();

        return redirect('/admin/categories')->with('status', 'La categorie ' .$categories->category_name. ' a été modifiée avec succès' );
  
    }

    public function supprimercategorie($id)
    {
        $categories = Category::find($id);

        $categories->delete();

        return redirect('/admin/categories')->with('status', 'La categorie ' .$categories->category_name. ' a été supprimée avec succès' );


    }
}
