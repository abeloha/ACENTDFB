<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use DB;
use Auth;

class PagesController extends Controller {
    
    // started 30/10/2018
    
    public function __construct()
    {
         //test session
        //if ($request->session()->has('userId')) {
            //return redirect('/home');  
       // }
    }
    
    public function index(Request $request) 
    {
        return view('pages.index');        
    }
    
    public function about(Request $request) 
    {
        return view('pages.about');        
    }

    public function staff(Request $request) 
    {
        return view('pages.staff');        
    }
	
	public function advisory(Request $request) 
    {
        return view('pages.advisory');        
    }
    
    public function research(Request $request) 
    {
        return view('pages.research');        
    }
    
    public function partners(Request $request) 
    {
        return view('pages.partners');        
    }
    
    public function facilities(Request $request) 
    {
        return view('pages.facilities');        
    }
    public function faq(Request $request) 
    {
        return view('pages.faq');        
    }
    public function news(Request $request) 
    {
        return view('pages.news');        
    }

    public function newsDetails(Request $request, $title = '') 
    {
        if($title == 'abu-vice-chancellor-visits-acentdfb'){
            return view('pages.news.abu-vice-chancellor-visits-acentdfb');  
        }elseif($title == 'kaduna-state-deputy-governor-others-visit-acentdfb'){
            return view('pages.news.kaduna-state-deputy-governor-others-visit-acentdfb');  
        }elseif($title == 'acentdfb-organizes-workshops'){
            return view('pages.news.acentdfb-organizes-workshops'); 
        }elseif($title == 'meet-acentdfb-advisory-boards'){
            return view('pages.news.meet-acentdfb-advisory-boards'); 
        }

        return view('pages.news');  
    }
	
	public function programs(Request $request, $title = '') 
    {
	
		$data = '';
		$page_title = '';
        if($title == 'msc-biotechnology'){
			$data = $this->website_content(3);
			$page_title = "MSc Biotechnology";
		}elseif($title == 'phd-biotechnology'){
			$data = $this->website_content(4);
			$page_title = "PhD Biotechnology";
		}elseif($title == 'msc-forensic'){
			$data = $this->website_content(2);
			$page_title = "MSc Forensic";
		}elseif($title == 'pgd-forensic'){
			$data = $this->website_content(1);
			$page_title = "PGD Forensic";
		}
		
		
		if($data){
			return view('pages.programs',['title' => $page_title, 'data'=>$data]); 
		}
		return view('errors.404');  
	}
    
	private function website_content($type_id){
		$data = DB::selectOne("select * from website_content WHERE id = $type_id");
		return $data;
	}
    public function documents(Request $request) 
    {
        return view('pages.documents.documents');        
    }
    
    public function documentsProcurementCategory(Request $request, $type = '') 
    {
       $type_ms3 = array("l1","l2");
       $type_ms4 = array("cbrt","hostel","animal");
         
        if($type == 'prequalification'){
            return view('pages.documents.prequalification');
        }elseif(in_array($type,$type_ms3)){
            return view('pages.documents.ms3',['type'=>$type]);
        }elseif(in_array($type,$type_ms4)){
            return view('pages.documents.ms4',['type'=>$type]);
        }elseif($type == '2015'){
            return view('pages.documents.older',['type'=>$type]);
        }elseif($type == 'procurementplan'){
            return view('pages.documents.procurementplan');
        }
        
        return $this->documents($request);
    }
    
    public function documentsCategory(Request $request, $type = '') 
    {
        $type_array = array("committee","accounts","financial","audit","others", "financialplan");
         
        if($type == 'procurement'){
            return view('pages.documents.procurement');  
        }elseif(in_array($type,$type_array)){
            return view('pages.documents.others',['type'=>$type]);
        }
        return $this->documents($request);
    }
    
    public function contact(Request $request)
    {
     
     $this->validate($request,[
         'name'=>'required',
         'subject' =>'required',
         'message' =>'required',
         'email'    =>'required|email',
         'phone'    =>'required|numeric',
     ]);
        
        
     $name     = $request->input('name');
     $subject      = $request->input('subject');
     $email         = $request->input('email'); 
     $phone         = $request->input('phone'); 
     $message      = $request->input('message');
        
     DB:: insert('insert into contact (name, subject, email, phone, message) value(?,?,?,?,?)', [$name, $subject, $email, $phone, $message]);
     return redirect('/?info=success#contactUs');  
    }
    
    
     public function test()
    {
         return view('pages.documents1');  
    }
       

}
