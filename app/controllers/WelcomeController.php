<?php

class WelcomeController extends BaseController{
    
    public function index(){
        $data=new stdClass();
        //$blocks=DB::table('blocks')->where('block_active','1')->get();
        $blocks=Block::where('block_active','1')->orderBy('block_index','asc')->get();
        //dd($blocks);
        $data->header='Welcome to';
        $data->title='Home page'; 
        return View::make('home',compact('data','blocks'));
    }
    
    public function about(){
        $data=new stdClass();
        $data->header='About';
        $data->title='About Marie';
        return View::make('about',compact('data'));
    }
    
    public function services(){
        //$services=Service::with('category');
        $data=new stdClass();
        $data->header='Services at';
        $data->title='Services page';
        //$services=Service::all();
        $services=Service::service_list();
        return View::make('services',compact('data','services'));
    }
    
    public static function contact(){
        $data=new stdClass();
        $data->header='How to contact';
        $data->title='How to contact us';
        $data->show_form=true;
        return View::make('contact',compact('data'));
    }
    
    public function formpost(){
        $form=Input::all();
        $validation=Validator::make($form,Contact::$rules);
        
        if($validation->fails()){
            return Redirect::back()->withInput()->withErrors($validation);
        }
        
        /* Data collected from form to be added to email later */
        $formdetails="NAME\n".$form['firstname']." ".$form['lastname']."\n\n";
        $formdetails.="ADDRESS\n".$form['address']."\n".$form['postcode']."\n\n";
        $formdetails.="TELEPHONE NUMBER\n".$_POST['phone']."\n\n";
        $mobile=(!empty($form['mobile'])) ? $form['mobile']:"Not Supplied";
        $formdetails.="MOBILE NUMBER\n".$mobile."\n\n";
        $formdetails.="EMAIL ADDRESS\n".$form['email']."\n\n";
        $formdetails.="MESSAGE\n".$form['message']."\n\n";
        
        
        /*Email message to the client*/
        $cto=$form['email'];
        $csubject="Confirmation of request sent to Maries Of Ludlow";
        $cheader="From: www.mariesofludlow.co.uk\r\n";
	$client_message="Dear ".$form['firstname']." ".$form['lastname'].",\n\n";
        $client_message.="This is to confirm that you message to Maries Of Ludlow has been successfully sent. She will do her best to get in contact with you as soon as she can.\n\n";
        $client_message.="Please check the detail below. if you find any error, please feel free to submit a new request or email Marie directly on marie@mariesofludlow.co.uk\n\n";
        $client_message.=$formdetails;
        mail($cto, $csubject, $client_message,$cheader) or print "Could not send mail";
        
        /* Email to Marie */
        $mto="marie@mariesofludlow.co.uk";
        $mreply="-f".$cto;
        //$bcc="david@crusade_multimedia.co.uk";
        $msubject="Request for information submitted at www.mariesofludlow.co.uk";
        $mheader="From:".$cto."\r\n";
        $maries_message="You have received a request from ".$form['firstname']." ".$form['lastname'].".\n\n";
        $maries_message.="They left you the following information and message.\n\n";
        $maries_message.=$formdetails;
        mail($mto, $msubject, $maries_message,$mheader,$mreply) or print "Could not send mail";
        
        $data=new stdClass();
        $data->header='How to contact';
        $data->title='How to contact us';
        $data->maries_message= $maries_message;
        $data->client_message=$client_message;
        $data->show_form=false;
        return View::make('contact',compact('data'));
        
        
    }
    
}