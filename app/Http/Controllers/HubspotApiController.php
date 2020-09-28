<?php

namespace App\Http\Controllers;


use GuzzleHttp\Exception\GuzzleException;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HubspotApiController extends Controller
{
    //

    public function create(Request $r)
    {

/*
        
        $arr = [
            'properties' => [
                [
                    'property' => 'email',
                    'value' => $r['email']
                ],
                [
                    'property' => 'firstname',
                    'value' => $r['firstname']
                ],
                [
                    'property' => 'lastname',
                    'value' => $r['lastname']
                ],
                [
                    'property' => 'phone',
                    'value' => $r['phone']
                ]
                ,
                [
                    'property' => 'age',
                  	  'value' => $r['age']
                ],
                [
                    'property' => 'gender',
                    'value' => $r['gender']
		],
		[
		    'property' => 'case_of_descriptions',
		    'value' => $r['case_of_descriptions']
		]
                

                
                ]

	];*/


	    $creds = $r->all();
	    //return response()->json(['status'=> true, 'error'=>$creds]);
	    
	    
	    $post_json = json_encode($creds);
        $apikey = '';
        //$endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey='.$hpkey;
        $client = new Client([
            'headers' => ['Content-Type' => 'application/json']
        ]);
        $res = $client->request('POST', $endpoint, [
            'body' => $post_json
	]);
	     
    
        return back();
    }
}
