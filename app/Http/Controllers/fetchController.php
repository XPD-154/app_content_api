<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Call,
    Home,
    LoadingScreen,
    MenuSettings,
    Notification,
    Onboarding,
    Packages,
    Recharge,
    SignInFp,
    SignUp,
    TransactionHistory,
    User,
    Vas,
};

class fetchController extends Controller
{
    //
    

    function getOnboarding($key=null){

        if($key){

            $result = Onboarding::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return Onboarding::all('key','value'); 
        }
        
    }

    function getCall($key=null){

        if($key){

            $result = Call::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return Call::all('key','value');  
        }
        
    }

    function getHome($key=null){

        if($key){

            $result = Home::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return Home::all('key','value');  
        }
        
    }

    function getLoadingScreen($key=null){

        if($key){

            $result = LoadingScreen::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return LoadingScreen::all('key','value');
        }
        
    }

    function getMenuSettings($key=null){

        if($key){

            $result = MenuSettings::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return MenuSettings::all('key','value'); 
        }
        
    }

    function getNotification($key=null){

        if($key){

            $result = Notification::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return Notification::all('key','value'); 
        }
        
    }

    function getPackages($key=null){

        if($key){

            $result = Packages::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return Packages::all('key','value'); 
        }
        
    }

    function getRecharge($key=null){

        if($key){

            $result = Recharge::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return Recharge::all('key','value');
        }
        
    }

    function getSignInFp($key=null){

        if($key){

            $result = SignInFp::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return SignInFp::all('key','value');
        }
        
    }

    function getSignUp($key=null){

        if($key){

            $result = SignUp::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return SignUp::all('key','value'); 
        }
        
    }

    function getTransactionHistory($key=null){

        if($key){

            $result = TransactionHistory::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return TransactionHistory::all('key','value');
        }
        
    }

    function getVas($key=null){

        if($key){

            $result = Vas::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
                return $result;
            }else{
                return ["status"=>"error", "message"=>"no matching data"]; 
            }

        }else{

            return Vas::all('key','value'); 
        }
        
    }
}
