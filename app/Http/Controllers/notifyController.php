<?php

namespace App\Http\Controllers;

use App\Models\NotificationInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator;

class notifyController extends Controller
{
    //
    //Get API
    function fetchData($title=null){

        $result = NotificationInfo::where("title", "like", "%".$title."%")->get();

        if(count($result) > 0){
            return $result;
        }else{
            return NotificationInfo::all(); 
        }
        
    }

    //Post API function
    function insertData(Request $request){

        if($request->has('title') && $request->has('information') && $request->has('category') && $request->has('expired')) {

            ////validation carried out////
            $validationRules = array(
                "title"=>"required",
                "information"=>"required",
                "category"=>"required",
                "expired"=>"required"
            );

            $validator = Validator::make($request->all(), $validationRules);
            ////end of validation carried out////

            ////check validation////
            if($validator->fails()){
                
                return response()->json($validator->errors(), 401);

            }else{

                ////submit data////
                $notify_request = new NotificationInfo();

                $notify_request->title = $request['title'];
                $notify_request->information = $request['information'];
                $notify_request->category = $request['category'];
                $notify_request->expired = $request['expired'];

                $result = $notify_request->save();
                ////end of submit data////

                if($result){
                    return ["status"=>"success", "message"=>"data inserted"];
                }else{
                    return ["status"=>"error", "message"=>"failed data insert"];
                }
            }
            ////end of check validation////

        }else{
            return ["status"=>"error", "message"=>"incomplete data"]; 
        }
    }

    //Put API function
    function updateData(Request $request){

        if($request->has('id') && $request->has('title')) {

            /////update request table/////
            $id = $request['id'];

            $notify_request = NotificationInfo::find($id);

            $notify_request->title = $request['title'];

            $result = $notify_request->save();
            /////end of update request table/////

            if($result){
                return ["status"=>"success", "message"=>"title updated"];
            }else{
                return ["status"=>"error", "message"=>"failed title update"];
            }
    
        }elseif($request->has('id') && $request->has('information')){

            /////update request table/////
            $id = $request['id'];

            $notify_request = NotificationInfo::find($id);

            $notify_request->information = $request['information'];

            $result = $notify_request->save();
            /////end of update request table/////

            if($result){
                return ["status"=>"success", "message"=>"information updated"];
            }else{
                return ["status"=>"error", "message"=>"failed information update"];
            }

        }elseif($request->has('id') && $request->has('category')){

            /////update request table/////
            $id = $request['id'];

            $notify_request = NotificationInfo::find($id);

            $notify_request->category = $request['category'];

            $result = $notify_request->save();
            /////end of update request table/////

            if($result){
                return ["status"=>"success", "message"=>"category updated"];
            }else{
                return ["status"=>"error", "message"=>"failed category update"];
            }

        }elseif($request->has('id') && $request->has('expired')){

            /////update request table/////
            $id = $request['id'];

            $notify_request = NotificationInfo::find($id);

            $notify_request->expired = $request['expired'];

            $result = $notify_request->save();
            /////end of update request table/////

            if($result){
                return ["status"=>"success", "message"=>"expired updated"];
            }else{
                return ["status"=>"error", "message"=>"failed expired update"];
            }

        }else{

            return ["status"=>"error", "message"=>"incomplete data"];
        }

    }
}
