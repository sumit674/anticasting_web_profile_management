<?php

namespace App\Modules\EmailTempletes\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\EmailTempletes\Models\{EmailTemplate,EmailTemplateTrans};

class EmailTempletesController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd('vbbb');
        $emailTempletes = EmailTemplate::all();

        return view("EmailTempletes::index",compact('emailTempletes'));
    }
    public function edit($id){
        return view("EmailTempletes::edit");
    }
}
