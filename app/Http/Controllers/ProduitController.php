<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function ajouterproduit()
    {
        $categories = Category::All()->pluck('category_name', 'category_name');

        return view('admin.ajouterproduit')->with('categories', $categories);
    }

    public function sauverproduit(Request $request)
    {
        $this->validate($request,[
            'product_name'=>'required|unique:products',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_image'=>'image|nullable|max:4000']);

        if($request->hasFile('product_image'))
        {
           // $fileNameWithExt = $request->file('product_image')->getClientOriginalName();

           // $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('product_image')->getClientOriginalExtension();
            //nouvelle ligne
            $fileName = $request->product_image->getClientOriginalName();

            $fileNameToStore = $fileName.'assinie_'.time().'.'.$extension;
            
           // $path = 'Images/' . $fileName;
           // store::put($path, file_get_contents($request->product_image->getRealPath()));

            $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
        }
        else
        {
            $fileNameToStore= 'noimage.jpg';
        }

        $product = new Product();

        $product->product_name=$request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');
        $product->product_image = $fileNameToStore;
        $product->status =1;

        $product->save();

        return redirect('/ajouterproduit')->with('status', 'Le produit ' . $product->product_name. ' a été inserer avec succès');
    }

    public function produits()
    {
        $produits = Product::get();

        return view('admin.produits')->with('produits', $produits);
    }

    public function edit_produit($id)
    {
        $produit = Product::find($id);
        $categories = Category::All()->pluck('category_name', 'category_name');

        return view('admin.editproduit')->with('produit', $produit)->with('categories', $categories);
    }

    public function modifierproduit(Request $request)
    {
        $this->validate($request,[
            'product_name'=>'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_image'=>'image|nullable|max:4000']);


        $product = Product::find($request->input('id'));

        $product->product_name=$request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_category = $request->input('product_category');

        if($request->hasFile('product_image'))
        {

            $extension = $request->file('product_image')->getClientOriginalExtension();

            //nouvelle ligne
            $fileName = $request->product_image->getClientOriginalName();

            $fileNameToStore = $fileName.'assinie_'.time().'.'.$extension;

            $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);


            if($product->product_image != 'noimage.jpg')
            {
                Storage::delete('public/product_images/'.$product->product_image);
            }

            $product->product_image = $fileNameToStore;
        }

        $product->update();

        return redirect('/produits')->with('status', 'Le produit ' . $product->product_name. ' a bien été mis à jour');

    }

    public function supprimerproduit($id)
    {
        $produit = Product::find($id);

        if($produit->product_image != 'noimage.jpg')
        {
            Storage::delete('public/product_images/'.$produit->product_image);
        }
        $produit->delete();

        return redirect('/produits')->with('status', 'Le produit ' . $produit->product_name. ' a bien été supprimer avec succes');

    }

    public function activer_produit($id)
    {
        $produit = Product::find($id);
        $produit->status = 1;

        $produit->update();

        return redirect('/produits')->with('status', 'Le produit ' . $produit->product_name. ' a été activer avec succes');

    }

    public function desactiver_produit($id)
    {
        $produit = Product::find($id);
        $produit->status = 0;

        $produit->update();

        return redirect('/produits')->with('status', 'Le produit ' . $produit->product_name. ' a été desactiver avec succes');

    }
}
