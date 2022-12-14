<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $category;
    public function category(){
        return view('admin.category.category',[
            'categories'=>Category::all()
        ]);
    }
    public function addCategory(Request $request){
        $request->validate([
            'category_name'=>'required',
            'category_image'=>'required',
        ]);
        $this->category=new Category();
        $this->category->category_name=$request->category_name;
        if ($request->file('category_image')){
            $this->category->category_image=$this->makeImage($request);
        }
        $this->category->save();
        return back()->with('message','Category Add Successfully');
    }
    private function makeImage($request){
        $this->image=$request->file('category_image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/category-image/';
        $this->imageUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imageUrl;
    }
    public function catStatus($id){
        $this->category=Category::find($id);
        if ($this->category->status==1){
            $this->category->status=0;
            $this->category->save();
            return back();
        }else{
            $this->category->status=1;
            $this->category->save();
            return back();
        }
    }
    public function catEdit($id){
        return view('admin.include.add-category',[
            'category'=>Category::find($id)
        ]);
    }
    public function updateCategory(Request $request){
        $this->category=Category::find($request->category_id);
        $this->category->category_name=$request->category_name;
        if ($request->file('category_image')){
            $this->category->category_image=$this->makeImage($request);
        }
        $this->category->save();
        return redirect('/category');
    }
    public function deleteCategory(Request $request){
        $this->category=Category::find($request->category_id);
        if ($this->category->category_image){
            unlink($this->category->category_image);
        }
        $this->category->delete();
        return back();
    }
}

