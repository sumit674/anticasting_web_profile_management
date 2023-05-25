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
    function seoUrl($string)
    {
        //Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
        $string = strtolower($string);
        //Strip any unwanted characters
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
    public function edit($id){
        $item = EmailTemplate::findOrFail($id);
        $trans = EmailTemplateTrans::where('etemplate_id',$id)->first();

        return view("EmailTempletes::edit",compact('item','trans'));
    }
    public function update(Request $request,$id){

        $request->validate([
            'subject'=>['required'],
        ],
          [
            'subject.required'=>"Please enter subject"
          ]
        );
        $emailtemplate = EmailTemplate::find($id);
        $emailtemplate->user_id = \Auth::user()->id;;
       // dd($request->all());
        $emailtemplate->active = true;
        $emailtemplate->save();
        $emailtemplateTrans = EmailTemplateTrans::where('etemplate_id', $emailtemplate->id)->where('lang', 'en')->first();
        if (empty($emailtemplateTrans)) {
            $emailtemplateTrans = new EmailTemplateTrans();
            $emailtemplateTrans->etemplate_id = $emailtemplate->id;
            $emailtemplateTrans->lang = 'en';
        }
        $template_key = $this->seoUrl($request->subject);
        $emailtemplateTrans->status = true;
        $emailtemplateTrans->subject = ucwords($request->subject);
        $emailtemplateTrans->html_content = $request->content;
        $emailtemplateTrans->template_key = $template_key;
        $emailtemplateTrans->save();

        $emailsPath = resource_path('views') . '/emails';
        $view_location = $emailsPath . "/" . $emailtemplateTrans->template_key . ".blade.php";
        $view_resource = fopen($view_location, "w+");
        fwrite($view_resource, $emailtemplateTrans->html_content);
        fclose($view_resource);
        return redirect()->route('admin.emailtempletes')->with('success','Record updated successfully');

    }
}
