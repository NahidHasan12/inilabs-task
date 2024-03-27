<?php

namespace App\Http\Controllers;

use App\Models\To_do;
use Illuminate\Http\Request;

class To_do_Controller extends Controller
{
    public function index(){
        $data = To_do::all();
        return view('to_do_curd.table', compact('data'));
    }

    public function add_people(){
        return view('to_do_curd.store');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'min:3'],
            'number' => ['required'],
            'address' => ['required'],
            'status' => ['required'],
            'image' => ['required'],
        ]);

        $image = $this->file_upload($request->file('image'),'image');

        $data = To_do::create([
            'name' => $request->name,
            'number' => $request->number,
            'address' => $request->address,
            'status' => $request->status,
            'image' => $image,
        ]);

        if($data){
            return redirect()->back()->with('success','data has Been Saved');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }

    public function edit_people($id){
        $data = To_do::findOrFail($id);
        return view('to_do_curd.edit', compact('data'));
    }

    public function update_people(Request $request, $id){
        $data = To_do::findOrFail($id);

        if($request->hasFile('image')){
            $image = $this->file_update($request->file('image'),'image/',$data->image);
        }else{
            $image = $data->image;
        }

        $data = $data->update([
            'name' => $request->name,
            'number' => $request->number,
            'address' => $request->address,
            'status' => $request->status,
            'image' => $image
        ]);

        if($data){
            return redirect()->back()->with('success','data has Been updated');
        }else{
            return redirect()->back()->with('error','Something Error');
        }

    }

    public function delete($id){
        $data = To_do::findOrFail($id);
        // dd($data);
        if(file_exists('image/'.$data->image)){
            unlink('image/'.$data->image);
        }
        $data->delete();

        if($data){
            return redirect()->back()->with('success','data has Been Deleted');
        }else{
            return redirect()->back()->with('error','Something Error');
        }
    }
}
