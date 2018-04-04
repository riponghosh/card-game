<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\District;
use App\Upzilla;
use App\Union;
use App\Village;

class SearchController extends Controller
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

    public function division()
    {
        $division = Division::all();

        if(count($division) > 0)
        {
            $data = [
                'division' => $division,
                'status'     => 'success',
                'code'       => 200,
                'message'    => 'Division are available.',
            ];

            return response()->json($data, 200);
        }
        else
        {
            $data = [
                'status'     => 'error',
                'code'       => 404,
                'message'    => 'Division are not available.',
            ];

            return response()->json($data, 404);
        }
    }

    public function district($id)
    {
        $district = District::where('division_id',$id)->get();

        if(count($district) > 0)
        {
            $data = [
                'district' => $district,
                'status'     => 'success',
                'code'       => 200,
                'message'    => 'Division are available.',
            ];

            return response()->json($data, 200);
        }
        else
        {
            $data = [
                'status'     => 'error',
                'code'       => 404,
                'message'    => 'Division are not available.',
            ];

            return response()->json($data, 404);
        }
    }

    public function upzilla($id)
    {
        $upzilla = Upzilla::where('district_id',$id)->get();

        if(count($upzilla) > 0)
        {
            $data = [
                'upzilla' => $upzilla,
                'status'     => 'success',
                'code'       => 200,
                'message'    => 'Division are available.',
            ];

            return response()->json($data, 200);
        }
        else
        {
            $data = [
                'status'     => 'error',
                'code'       => 404,
                'message'    => 'Division are not available.',
            ];

            return response()->json($data, 404);
        }
    }

    public function union($id)
    {
        $union = Union::where('upazila_id',$id)->get();

        if(count($union) > 0)
        {
            $data = [
                'union' => $union,
                'status'     => 'success',
                'code'       => 200,
                'message'    => 'Division are available.',
            ];

            return response()->json($data, 200);
        }
        else
        {
            $data = [
                'status'     => 'error',
                'code'       => 404,
                'message'    => 'Division are not available.',
            ];

            return response()->json($data, 404);
        }
    }


    public function village($id)
    {
        $village = Village::where('union_id',$id)->get();

        if(count($village) > 0)
        {
            $data = [
                'village' => $village,
                'status'     => 'success',
                'code'       => 200,
                'message'    => 'Division are available.',
            ];

            return response()->json($data, 200);
        }
        else
        {
            $data = [
                'status'     => 'error',
                'code'       => 404,
                'message'    => 'Division are not available.',
            ];

            return response()->json($data, 404);
        }
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
