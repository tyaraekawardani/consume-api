<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Store;
// use Symfony\Component\Console\Input\Input;

class StoreController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

        $input = $request->all();

        if($image = $request->file('image')) {
            $destinationPath = 'assets/images/';
            $profileImage = date('YmdHis') .'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        Store::create($input);
        return redirect('index');
    }

    public function index(){
        $data = Store::all();
        return view('index', ['data'=>$data]);
    }

    public function edit($id){
        $data = Store::find($id);
        return view('edit', ['data'=>$data]);
    }

    public function update(Request $request, $id){
        $data = Store::find($id);
        $data->update($request->all());
        return redirect('index')->with('success', 'Product berhasil diperbaharui');
    }

    public function delete($id){
        $data = Store::find($id)->delete();
        return redirect('index')->with('success', 'Product berhasil dihapus');
    }

}
