<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\userImage;

class insertImageController extends Controller
{
    public function imageUpload(Request $request) {

        $postObj = new userImage;

        if($request->has('user_id') && $request->has('image')) {

                $user_id = $request['user_id'];
                $img_url = "https://univasa.com/app_content/storage/app/public/user_img/";

                if($request->hasFile('image')) {

                    $filename = $request->file('image')->getClientOriginalName(); // get the file name
                    $getfilenamewitoutext = pathinfo($filename, PATHINFO_FILENAME); // get the file name without extension
                    $getfileExtension = $request->file('image')->getClientOriginalExtension(); // get the file extension

                    //$createnewFileName = time().'_'.str_replace(' ','_', $getfilenamewitoutext).'.'.$getfileExtension; // create new random file name

                    $createnewFileName = time().'_'.$user_id.'.'.$getfileExtension; // create new random file name

                    $img_path = $request->file('image')->storeAs('public/user_img', $createnewFileName); // get the image path

                    $postObj->image = $createnewFileName; // pass file name with column
                    $postObj->user_id = $user_id; // pass file name with column

                }else{

                    return [
                        "status"=>"error", 
                        "message"=>"no image file"
                    ];
                }

                // save file in databse
                if($postObj->save()) { 

                    return [
                        'status' => "success",
                        'message' => "Image uploded successfully",
                        'image'=> strval($img_url.$createnewFileName)
                    ];

                }else {

                    return [
                        'status' => "error", 
                        'message' => "Image not uploded successfully"
                    ];       

                }
        }else{

            return [
                "status"=>"error", 
                "message"=>"incomplete data"
            ];
        }

    }
}
