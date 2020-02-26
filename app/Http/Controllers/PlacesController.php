<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index(){
        $positions = Position::all();
        return response()->json($positions, 200);
    }

    public function getPlace(Request $request,$id){
        $position = Position::find($id);
        return response()->json($position, 200);
    }

    public function setPlace(Request $request){
        $credentials = \request(['name','description','position']);
        if(Position::where('position',$credentials['position'])->count()>0){
            return response([
                'message'=>'exists'
            ], 422);
        }
        new Position($credentials);
        return response()->json([
            'message'=>'success'
        ],201);
    }
}
