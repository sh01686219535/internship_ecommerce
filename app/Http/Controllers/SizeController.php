<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public $size;
    public function size(){
        return view('admin.size.size',[
            'sizes'=>Size::all()
        ]);
    }

    //----size Store----

    public function addSize(Request $request){
        $request->validate([
            'size_name'=>'required',
        ]);
        $this->size=new Size();
        $this->size->size_name=$request->size_name;
        $this->size->save();
        return back()->with('message','size Add Successfully');
    }

    //----size Edit----

    public function sizeEdit($id){
        return view('admin.include.edit-size',[
            'size'=>Size::find($id)
        ]);
    }

    //----size Update----

    public function updateSize(Request $request){
        $this->size=Size::find($request->size_id);
        $this->size->size_name=$request->size_name;
        $this->size->save();
        return redirect('/size');
    }

    //----size Delete----

    public function deleteSize(Request $request){
        $this->size=Size::find($request->size_id);
        $this->size->delete();
        return back();
    }

}
