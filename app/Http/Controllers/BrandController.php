<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public $brand,$image,$imageName,$directory,$imageUrl;
    public function brand(){
        return view('admin.brand.brand',[
            'brands'=>Brand::all()
        ]);
    }

    //-----Brand Store-------

    public function addBrand(Request $request){
        $request->validate([
            'brand_name'=>'required',
            'brand_image'=>'required',
        ]);
        $this->brand=new Brand();
        $this->brand->brand_name=$request->brand_name;
        if ($request->file('brand_image')){
            $this->brand->brand_image=$this->makeImage($request);
        }
        $this->brand->save();
        return back()->with('message','Brand add successfully');
    }

    //-----Brand Image-------

    private function makeImage($request){
        $this->image=$request->file('brand_image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/brand_image/';
        $this->imageUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imageUrl;
    }

    //-----Brand Status-------

    public function brandStatus($request){
        $this->brand=Brand::find($request);
        if ($this->brand->status==1){
            $this->brand->status=0;
            $this->brand->save();
            return back();
        }else{
            $this->brand->status=1;
            $this->brand->save();
            return back();
        }
    }

    //-----Brand Delete-------

    public function brandDelete(Request $request){
        $this->brand=Brand::find($request->brand_id);
        if ($this->brand->brand_image){
            unlink($this->brand->brand_image);
        }
        $this->brand->delete();
        return back();
    }

    //-----Brand Edit-------

    public function brandEdit($id){
        return view('admin.include.edit-brand',[
            'brand'=>Brand::find($id)
        ]);
    }

    //-----Brand Update-------

    public function brandUpdate(Request $request){
        $this->brand=Brand::find($request->brand_id);
        $this->brand->brand_name=$request->brand_name;
        if ($request->file('brand_image')){
            $this->brand->brand_image=$this->makeImage($request);
        }
        $this->brand->save();
        return redirect('/brand');
    }
}
