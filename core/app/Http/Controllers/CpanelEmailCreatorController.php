<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class CpanelEmailCreatorController
 * @package App\Http\Controllers
 */
class CpanelEmailCreatorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     *
     * @method indexAction
     */
    public function indexAction(){



        return view('home');

    }


    /**
     * @method createAccountAction()
     * @throws \Exception
     */
    public function createAction(Request $request){


        $cpanel = new \Gufy\CpanelPhp\Cpanel([
            'host'        =>  config('cpanel.host'),
            'username'    =>  config('cpanel.username'),
            'auth_type'   =>  'password', // set 'hash' or 'password'
            'password'    =>  config('cpanel.password')
        ]);



        //@creates an email account
        $response =  $cpanel->addEmailAccount(
            config('cpanel.domainUsername'),
            $request->get('username'),
            $request->get('password')
        );

        $status = "";

        if($response["cpanelresult"]["event"]["result"] == 1){

            $status = "Email address has been created";

        }else{
            $status = "Something went wrong" . json_encode($response);
        }

        return $status;
    }


    //
}
