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
    //instructions for Associated API
    function index(){
        return [
            "status"=>"success",
            "Instruction"=>"This is the instruction associated with use of the API. The Endpoints associated every section of the UI/UX design is listed below. Upon call with the appropriate token, the listing of content associated that section of the design will be fetched. To fetch the specific content of an aspect of a page, just append its appropriate key the Endpoint.",
            "Mobile App Content API Listing"=>[
                    "Onboarding"=>"https://univasa.com/app_content/api/onboarding/", 
                    "Call"=>"https://univasa.com/app_content/api/call/",
                    "Home"=>"https://univasa.com/app_content/api/home/",
                    "Loading Screen"=>"https://univasa.com/app_content/api/loading_screen/",
                    "Menu Settings"=>"https://univasa.com/app_content/api/menu_settings/",
                    "Notification"=>"https://univasa.com/app_content/api/notification/",
                    "Packages"=>"https://univasa.com/app_content/api/packages/",
                    "Recharge"=>"https://univasa.com/app_content/api/recharge/",
                    "Sign Up"=>"https://univasa.com/app_content/api/sign_up/",
                    "Transaction History"=>"https://univasa.com/app_content/api/transaction_history/",
                    "VAS"=>"https://univasa.com/app_content/api/vas/", 
                    "Sign In Forgot Password"=>"https://univasa.com/app_content/api/sign_in_forgot_password/",
                    "Notification Information"=>"https://univasa.com/app_content/api/search_info/",
                    "FAQ Information"=>"https://univasa.com/app_content/api/search_faq/",
            ]
        ];
    }

    //function for Onboarding section
    function getOnboarding($key=null){

        if($key){

            $result = Onboarding::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){
        
                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ]; 
            }

        }else{
 
            $result = Onboarding::all('key','value');
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for call section
    function getCall($key=null){

        if($key){

            $result = Call::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ];
            }

        }else{

            $result=Call::all('key','value');
            return [
                "status"=>"success",
                "data"=>$result
            ];  
        }
        
    }

    //call for home section
    function getHome($key=null){

        if($key){

            $result = Home::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ];  
            }

        }else{

            $result = Home::all('key','value');  
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for loading screen section
    function getLoadingScreen($key=null){

        if($key){

            $result = LoadingScreen::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ];  
            }

        }else{

            $result = LoadingScreen::all('key','value');
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for settings section
    function getMenuSettings($key=null){

        if($key){

            $result = MenuSettings::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ];  
            }

        }else{

            $result = MenuSettings::all('key','value'); 
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for Notification section
    function getNotification($key=null){

        if($key){

            $result = Notification::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ]; 
            }

        }else{

            $result = Notification::all('key','value'); 
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for package section
    function getPackages($key=null){

        if($key){

            $result = Packages::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ]; 
            }

        }else{

            $result = Packages::all('key','value'); 
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for recharge section
    function getRecharge($key=null){

        if($key){

            $result = Recharge::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ];  
            }

        }else{

            $result = Recharge::all('key','value');
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for sign in/forgot password section
    function getSignInFp($key=null){

        if($key){

            $result = SignInFp::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ];  
            }

        }else{

            $result = SignInFp::all('key','value');
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for sign up section
    function getSignUp($key=null){

        if($key){

            $result = SignUp::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ]; 
            }

        }else{

            $result = SignUp::all('key','value'); 
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for transaction section
    function getTransactionHistory($key=null){

        if($key){

            $result = TransactionHistory::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ]; 
            }

        }else{

            $result = TransactionHistory::all('key','value');
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }

    //function for VAS section
    function getVas($key=null){

        if($key){

            $result = Vas::select('key','value')->where("key", "like", "%".$key."%")->get();

            if(count($result) > 0){

                return [
                    "status"=>"success",
                    "data"=>$result
                ];

            }else{

                return [
                    "status"=>"error", 
                    "message"=>"no matching data"
                ];  
            }

        }else{

            $result = Vas::all('key','value'); 
            return [
                "status"=>"success",
                "data"=>$result
            ];
        }
        
    }
}
