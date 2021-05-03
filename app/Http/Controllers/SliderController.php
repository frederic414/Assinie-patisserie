<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function ajouterslider()
    {
        
        return view('admin.ajouterslider');
    }

    public function sauverslider(Request $request)
    {
        $this->validate($request,[
            'description1'=>'required',
            'description2'=>'required',
            'slider_image'=>'image|nullable|max:4000']);

        if($request->hasFile('slider_image'))
        {

            $extension = $request->file('slider_image')->getClientOriginalExtension();
            //nouvelle ligne
            $fileName = $request->slider_image->getClientOriginalName();

            $fileNameToStore = $fileName.'assinie_'.time().'.'.$extension;
            
            $path = $request->file('slider_image')->storeAs('public/slider_images', $fileNameToStore);
        }
        else
        {
            $fileNameToStore= 'noimage.jpg';
        }

        $slider = new Slider();

        $slider->description1 = $request->input('description1');
        $slider->description2 = $request->input('description2');
        $slider->slider_image = $fileNameToStore;
        $slider->slider_status =1;

        $slider->save();

        return redirect('/ajouterslider')->with('status', 'Le slider a été inserer avec succès');
  

    }

    public function slider()
    {
        $sliders = Slider::get();

        return view('admin.slider')->with('sliders', $sliders);
    }

    public function edit_slider($id)
    {
        $slider = Slider::find($id);

        return view('admin.editslider')->with('slider', $slider);
    }

    public function modifierslider(Request $request)
    {
        $this->validate($request,[
            'description1'=>'required',
            'description2' => 'required',
            'slider_image'=>'image|nullable|max:4000']);


        $slider = Slider::find($request->input('id'));

        $slider->description1=$request->input('description1');
        $slider->description2 = $request->input('description2');

        if($request->hasFile('slider_image'))
        {

            $extension = $request->file('slider_image')->getClientOriginalExtension();

            //nouvelle ligne
            $fileName = $request->slider_image->getClientOriginalName();

            $fileNameToStore = $fileName.'assinie_'.time().'.'.$extension;

            $path = $request->file('slider_image')->storeAs('public/slider_images', $fileNameToStore);


            if($slider->slider_image != 'noimage.jpg')
            {
                Storage::delete('public/slider_images/'.$slider->slider_image);
            }

            $slider->slider_image = $fileNameToStore;
        }

        $slider->update();

        return redirect('/slider')->with('status', 'Le slider a bien été mis à jour');

    }


    public function supprimerslider($id)
    {
        $slider = Slider::find($id);
        if($slider->slider_image != 'noimage.jpg')
        {
            Storage::delete('public/slider_images/'.$slider->slider_image);
        }
        $slider->delete();

        return redirect('/slider')->with('status', 'Le slider a bien été supprimer avec succes');

    }

    public function activer_slider($id)
    {
        $slider = Slider::find($id);

        $slider->slider_status = 1;
        $slider->update();

        return redirect('/slider')->with('status', 'Le slider a été activer avec succes');

    }

    public function desactiver_slider($id)
    {
        $slider = Slider::find($id);

        $slider->slider_status = 0;
        $slider->update();

        return redirect('/slider')->with('status', 'Le slider a été desactiver avec succes');

    }


}
