<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public $subCategory,$image,$imageName,$directory,$imageUrl;
    public function subCategory(){
        return view('admin.subCategory.subCategory',[
            'category'=>Category::all()
        ]);
    }
    public function addSubCategory(Request $request){
        return $request;
        $request->validate([
            'subCate_name'=>'required|unique:sub_categories',
            'subCate_image'=>'required',
        ]);
        $this->subCategory=new SubCategory();
        $this->subCategory->category_id=$request->category_id;
        $this->subCategory->subCate_name=$request->subCate_name;
        $this->subCategory->subCate_image=$this->makeImage($request);
        $this->subCategory->save();
        return back()->with('message','Sub Category add Successfully');
    }
    private function makeImage($request){
        $this->image=$request->file('subCate_image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/sunCategory_image/';
        $this->imageUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imageUrl;
    }
}
