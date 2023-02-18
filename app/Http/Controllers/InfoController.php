<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $info=Info::find(1);
        return view('admincp.info.form',compact('info'));
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
          $data = $request->validate(
            [
                  'title'=>'required|unique:categories|max:255',
                  'description'=>'required|max:255',
                  'image'=>'image|mimes:jpg,png,jpeg,gif,svg',
                  'copyright'=>'required|max:200',
              ],
              [
                'title.required'=>'Nhập tên thể loại',
                'description.required'=>'Nhập mô tả',
            ],
         );
        $info = info::find($id);
        $info->title = $data['title'];
        $info->copyright = $data['copyright'];
        $info->description = $data['description'];
        $get_image = $request->file('image');

         if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/logo/',$new_image);
            $info->logo = $new_image;
        }
        $info->save();
        toastr()->info('Cập nhật','Cập nhật thông tin thành công');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
