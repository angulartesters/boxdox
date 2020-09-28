<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function showPage(){
    //     $data = [];
    //     $data['en'] = 'en';
    //     $data['ar'] = 'ar';
    //     return view('landingpage.index', $data);
    // }

    public function aboutus(){
        return view('landingpage.aboutus');
    }

    public function checksomething(){
        // $objs = new \stdClass();
        // $objs->username = 'mohamedsayed';
        // return view('welcome', compact('objs'));

        $datas = ['mohamed', 'sayed', 'ahmed', 'kamel'];
        return view('welcome', compact('datas'));
    }
     
    // public function index($locale = null)
    // {
    //     //
    //     // if(!in_array($locale, ['ar', 'en'])){
    //     //     abort(400);
    //     // }else{
    //         App::setLocale($locale);
            
    //         $obj = new \stdClass();
    //         $obj->en = 'en';
    //         $obj->ar = 'ar';
    //         return view('landingpage.index', compact('obj'));
    //     // }
            
        
            

        
    // }

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
