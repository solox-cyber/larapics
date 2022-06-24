<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\Gate;

class ImageController extends Controller
{
    //
    public function index(){
       $images = Image::published()->latest()->paginate(15)->withQueryString();
       return view('image.index', compact('images'));
    }

    public function show(Image $image){
       return view('image.show', compact('image'));
    }

    public function create(){
        return view('image.create');
     }

     public function store(ImageRequest $request){
        Image::create($request->getData());
        return to_route('images.index')->with('message',"Image has been uploaded successfullu");
     }

     public function edit(Image $image){
     $this->authorize('update-image', $image);

        return view('image.edit', compact('image'));
     }

     public function update(Image $image, ImageRequest $request){
        $image->update($request->getData());
        return to_route('images.index')->with('message',"Image has been updated successfully");
     }

     public function destroy(Image $image){
      if(Gate::denies('delete-image', $image)){
         abort(403,"Access Denied");
     }
      $image->delete();
      return to_route('images.index')->with('message',"Image has been removed successfully");
   }
}

