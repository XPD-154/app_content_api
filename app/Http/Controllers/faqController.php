<?php

namespace App\Http\Controllers;

use App\Models\FaqInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Validator;

class faqController extends Controller
{
    //

    //Get API
    function fetchData($title=null){

        $result = FaqInfo::where("title", "like", "%".$title."%")->get();

        if(count($result) > 0){
            return $result;
        }else{
            return FaqInfo::all(); 
        }
        
    }

    //Post API function
    function insertData(Request $request){

        if($request->has('title') && $request->has('information') && $request->has('category') && $request->has('status')) {

            ////validation carried out////
            $validationRules = array(
                "title"=>"required",
                "information"=>"required",
                "category"=>"required",
                "status"=>"required"
            );

            $validator = Validator::make($request->all(), $validationRules);
            ////end of validation carried out////

            ////check validation////
            if($validator->fails()){
                
                return response()->json($validator->errors(), 401);

            }else{

                ////submit data////
                $faq_request = new FaqInfo();

                $faq_request->title = $request['title'];
                $faq_request->information = $request['information'];
                $faq_request->category = $request['category'];
                $faq_request->status = $request['status'];

                $result = $faq_request->save();
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

            $faq_request = FaqInfo::find($id);

            $faq_request->title = $request['title'];

            $result = $faq_request->save();
            /////end of update request table/////

            if($result){
                return ["status"=>"success", "message"=>"title updated"];
            }else{
                return ["status"=>"error", "message"=>"failed title update"];
            }
    
        }elseif($request->has('id') && $request->has('information')){

            /////update request table/////
            $id = $request['id'];

            $faq_request = FaqInfo::find($id);

            $faq_request->information = $request['information'];

            $result = $faq_request->save();
            /////end of update request table/////

            if($result){
                return ["status"=>"success", "message"=>"information updated"];
            }else{
                return ["status"=>"error", "message"=>"failed information update"];
            }

        }elseif($request->has('id') && $request->has('category')){

            /////update request table/////
            $id = $request['id'];

            $faq_request = FaqInfo::find($id);

            $faq_request->category = $request['category'];

            $result = $faq_request->save();
            /////end of update request table/////

            if($result){
                return ["status"=>"success", "message"=>"category updated"];
            }else{
                return ["status"=>"error", "message"=>"failed category update"];
            }

        }elseif($request->has('id') && $request->has('status')){

            /////update request table/////
            $id = $request['id'];

            $faq_request = FaqInfo::find($id);

            $faq_request->status = $request['status'];

            $result = $faq_request->save();
            /////end of update request table/////

            if($result){
                return ["status"=>"success", "message"=>"status updated"];
            }else{
                return ["status"=>"error", "message"=>"failed status update"];
            }

        }else{

            return ["status"=>"error", "message"=>"incomplete data"];
        }

    }
}
