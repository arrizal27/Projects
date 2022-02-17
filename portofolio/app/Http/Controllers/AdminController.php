<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Hobby;
use Yajra\DataTables\DataTables;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data = Hobby::get();

        return view('admin.dashboard',['data'=>$data]);
    }
    public function add(){
        return view('admin.form');
    }
    public function store(Request $request){
        $validate = Validator::make($request->all(), [
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = Hobby::create($request->all());
        if($request->hasFile('gambar')){
            $file =  $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->storeAs('hobby/', $filename, 'public');
            $request->gambar->move(public_path('images'), $filename);
            $input->gambar = $filename;
            $input->save();
        }
        if(!$validate->fails()){
            return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan');
        }else{
            return redirect()->route('dashboard')->withErrors('error', $validate);
        }
    }

}
