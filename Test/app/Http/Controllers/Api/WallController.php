<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WallResource;
use App\Wallpaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class WallController extends Controller
{
    public function index(){
        $wall = Wallpaper::latest()->paginate(10);

        return WallResource::collection($wall);
    }

    public function show(Wallpaper $wp){
        return new WallResource($wp);
    }

    public function store(Request $request){
        $this->validate($request,[
            'foto' => 'required|image:jpeg,png,jpg,gif,svg',
            'judul' => 'required',
            'desc' => 'required',
        ]);
        $uploadFolder = 'wallpaper';
        $image = $request->file('foto');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
        $uploadedImageResponse = array(
            "image_name" => basename($image_uploaded_path),
            "image_url" => Storage::disk('public')->url($image_uploaded_path),
            "mime" => $image->getClientMimeType()
        );
        $wall = Wallpaper::create([
            'user_id' => auth()->id(),
            'foto' => $uploadedImageResponse['image_name'],
            'judul' => $request->judul,
            'desc' => $request->desc,
        ]);
        return (new WallResource($wall))->additional([
            'statusCode' => 200
        ]);
    }

    public function update(Request $request,Wallpaper $wp){
        // $this->validate($request,[
        //     'foto' => 'required|image:jpeg,png,jpg,gif,svg',
        //     'desc' => 'required',
        // ]);
        // $uploadFolder = 'wallpaper';
        // $image = $request->file('foto');
        // $image_uploaded_path = $image->update($uploadFolder, 'public');
        // $uploadedImageResponse = array(
        //     "image_name" => basename($image_uploaded_path),
        //     "image_url" => Storage::disk('public')->url($image_uploaded_path),
        //     "mime" => $image->getClientMimeType()
        // );
        $this->authorize('update',$wp);
        $wp->update([
            // 'foto' => $uploadedImageResponse['image_url'],
            'judul' => $request->judul,
            'desc' => $request->desc
        ]);
        return (new WallResource($wp))->additional([
            'statusCode' => 200
        ]);
    }

    public function destroy(Wallpaper $wp){
        $this->authorize('delete',$wp);

        $wp->delete();

        // return redirect()->back();
        return json_encode(array(
            'statusCode'=>200,
            'message' => "Wallpaper Deleted"
        ));
    }

}
