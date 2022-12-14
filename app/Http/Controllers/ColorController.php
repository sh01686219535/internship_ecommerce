<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public $color;
    public function color(){
        return view('admin.color.color',[
            'colors'=>Color::all()
        ]);
    }

    //------Color Store-------

    public function addColor(Request $request){
        $request->validate([
            'color_name'=>'required',
            'color_code'=>'required',
        ]);
        $this->color=new Color();
        $this->color->color_name=$request->color_name;
        $this->color->color_code=$request->color_code;
        $this->color->save();
        return back()->with('message','Color add successfully');
    }

    //------Color Status-------

    public function ColorStatus($id){
        $this->color=Color::find($id);
        if ($this->color->status==1){
            $this->color->status=0;
            $this->color->save();
            return back();
        }else{
            $this->color->status=1;
            $this->color->save();
            return back();
        }
    }
    //------Color Delete-------

    public function ColorDelete(Request $request){
        $this->color=Color::find($request->color_id);
        $this->color->delete();
        return back();
    }

    //------Color Edit-------

    public function ColorEdit($id){
        return view('admin.include.edit-color',[
            'color'=>Color::find($id)
        ]);
    }

    //------Color Update-------

    public function ColorUpdate(Request $request){
        $this->color=Color::find($request->color_id);
        $this->color->color_name=$request->color_name;
        $this->color->color_code=$request->color_code;
        $this->color->save();
        return redirect('/color');
    }
}
