<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\Breed;
use App\Http\Requests\CreateCatRequest;
use App\Http\Requests\UpdateCatRequest;

//use Illuminate\Http\Request\;

class CatController extends Controller
{

    // public function __construct()
    // {
    //   //  $this->middleware('IsAdmin');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCats = Cat::all();
        //$listCats = Cat::withTrashed()->get();//lấy tất cả con mèo kể cả bị xóa
        //dd($listCats);

        //\DB::enableQueryLog();
        //$listCats = Cat::onlyTrashed()->get();
        //dd(\DB::getQueryLog());
        //$cat = Cat::withTrashed()->find(2);// tim lay lai thanh vien bi xoa de restore
        //$cat->restore();
        //dd($listCats)
        //$cat = Cat::find(4);
      // dd($cat);
       // $cat->delete();
        //dd($listCats);
       // $cat->forceDelete($cat); // xoa mat luoon
        return view('cat.list_cat', ['listCats' => $listCats ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listBreeds = Breed::all();
        // $selectedID = Breed::where('id','3')->first()->id;
        // $listID = Breed::pluck('name','id');
       //$listID = Breed::first()->id;
       //dd($listID);
        return view('cat.form-create',compact('listBreeds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCatRequest $request)
    {
        //dd($request->all()); tất cả các dữ liệu truyền lên thì đều trong biến request
        //$data = $request->all();
        $data = $request->except('_token');
        //$data = $request->only('name','age','breed_id')
        //c1 : hàm insert
       // $result = Cat::insert($data);
       // dd($result);
         $cat = Cat::create($data);
         //dd($cat);
         return redirect()->route('list-cat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Cat::find($id);
        $listBreeds = Breed::all();
        return view('cat.edit-cat',compact('cat','listBreeds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatRequest $request, $id)
    {
        $data = $request->except('_token','_method');
        $cat = Cat::find($id);
        $cat->update($data);
        return redirect()->route('list-cat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::find($id);
        $cat ->delete();
        return redirect()->route('list-cat');
    }
}
