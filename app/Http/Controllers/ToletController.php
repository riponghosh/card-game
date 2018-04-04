<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\FileUpload;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

// model
use App\Tolet;
use App\Phone;
use App\Image;
use App\Features;

class ToletController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();

        $user_id=Auth::user()->id;
        $tolet=new Tolet;

        $tolet->sub_title=$data['sub_title'];
        $tolet->description=$data['description'];
        $tolet->amount=$data['amount'];
        $tolet->house=$data['house'];
        $tolet->user_id=$user_id;
        $tolet->division_id=$data['division_id'];
        $tolet->district_id=$data['district_id'];
        $tolet->upzilla_id=$data['upzilla_id'];
        $tolet->union_id=$data['union_id'];
        $tolet->village_id=$data['village_id'];

        $tolet->save();

        if ($tolet) {
            

            $tolet_info=Tolet::where('sub_title',$data['sub_title'])->where('description',$data['description'])->where('amount',$data['amount'])->where('house',$data['house'])->where('user_id',$user_id)->where('division_id',$data['division_id'])->where('district_id',$data['district_id'])->where('upzilla_id',$data['upzilla_id'])->where('union_id',$data['union_id'])->where('village_id',$data['village_id'])->orderBy('id', 'DESC')->first();

            $phone=explode(',', $data['phone']);
            // return response()->json($phone[0], 200);

            foreach ($phone as $key => $value) {
                $phone_store=new Phone;
                $phone_store->phone=$phone[$key];
                $phone_store->tolet_id=$tolet_info->id;

                $phone_store->save();


            }

            $features=explode(',', $data['features']);

            foreach ($features as $key => $value) {
                $features_store=new Features;
                $features_store->features=$features[$key];
                $features_store->tolet_id=$tolet_info->id;

                $features_store->save();


            }


            $file   = $request->file('image');
            foreach ($file as $key => $value) {
                $prefix = 'tolet';
                $path   = 'uploads/images/tolet';
                $file_upload = new FileUpload;

                $upload = $file_upload->upload($file[$key], $prefix, $path);

                $image=new Image;
                $image->image=$upload['file_name'];
                $image->tolet_id=$tolet_info->id;

                $image->save();

            }
        }
        else{
            $data = [
                'status'     => 'success',
                'code'       => 200,
                'message'    => 'Something Wrong on your data.',
            ];

            return response()->json($data, 200);
        }
        
        // $file=$data['image'];
        // print_r($data['image']);
        // $image=explode(',', $data['image']);
        // foreach ($image as $key => $value) {
        //     $c_image=$_FILES[$image[$key]]["name"];
        //     $prefix = 'tolet';
        //     $path   = 'uploads/images/tolet';
        //     $file_upload = new FileUpload;
        //     // $upload = $file_upload->upload($c_image, $prefix, $path);
        // }
        
        // $prefix = 'tolet';
        // $path   = 'uploads/images/tolet';
        // $file_upload = new FileUpload;

        // $upload = $file_upload->upload($file[0], $prefix, $path);
        
        // $phone=explode(',', $data['phone']);
        $data = [
            // 'data' => $data,
            'status'     => 'success',
            'code'       => 200,
            'message'    => 'Your Tolet Post Successfully.',
        ];

        return response()->json($data, 200);
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
        //
    }
}
