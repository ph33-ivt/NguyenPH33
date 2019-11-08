<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cat;


class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCats = Cat::all();
        $data = [
            'message' => 'create cat success',
            'data' => $listCats,
        ];

         return response()->json($data, 200);// 200 is status code
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
        $rule = [
            'name' => 'required|min:4',
            'age' => 'required|numeric',
            'breed_id' => 'required|numeric',
        ];
        $validator = \Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return response()->json([
                'error' => $validator->errors(),
                'message' => 'validation fail'
            ],401);
        }

        $data = $request->all();
        $cat = Cat::create($data);
        //$message = "create cat success";

        return response()->json($data,201,);
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

        $cat = Cat::find($id);
        //dd($cat);
        //Cat::destroy($id);
        $breedId = $cat->breed_id;
        $cat->delete();
        $listCats = Cat::where('breed_id',$breedId)->get();
        //Cat::destroy($id);

        return response()->json([
            'message' => 'Delete Cat success',
            'listCats' => $listCats
        ], 200);
    }
}
