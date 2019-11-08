<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;
use App\Cat;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBreeds = Breed::all();
        return view('breed.index',compact('listBreeds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //c1
         $breed = Breed::find($id);
        //$listCat = $breed->cats()->where('name','nguyen')->get(); sử dụng query builder;
        //dd($breed,$listCat);
        //c2
        //  $breed = Breed::with(['cats' => function($query){
        //          return $query->where('name', 'like' , '%' .'e'.'%')
        //                       ->orwhere('age' ,'>=','10')->get();
        //  }])->find($id)->toArray();
         //dd($breed);

       // dd($breed->name,$listCat);
        return view('breed.show',compact('breed'));

    }
    public function showCat($id)
    {
        $breed = Breed::find($id);
        $listCats = $breed->cats;
         //$listCats = \DB::table('cats')->where('breed_id',$id)->get();//tương tự hàm trên
         //$listCats = Cat::where('breed_id',$id)->get();//tương tự hàm trên
         //$catname =  \DB::table('cats')->where('breed_id',$id)->value('name');//tìm cụ thể tên mà trong bảng cats
         //dd($catname);
        //dd($listCats);
        $catname =  \DB::table('cats')->where('breed_id',$id)->pluck('name','id');//tìm cụ thể tên mà trong bảng cats
        dd($catname);
        foreach ($catname as $id=>$name) {
            echo $id;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //b1 xóa bảng breeed có id
        $breed = Breed::find($id);
        //xóa breed_id trong bảng cat
        $breeds = Breed::pluck('id');
        Breed::destroy($breeds);


        // foreach ($breed->cats as  $cat) {
        //      $cat->delete();
        // }
        //dd($breed);
       // $cats = Cat::where('breed_id' , $id);
        //dd($cats);
        //$breed->cats()->delete();
       //dd($breed->cats);

        //$cat->delete();

        //$breed->delete();
    }
}
