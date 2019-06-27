<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Auth;
use Hash;
use Carbon\Carbon;
use App\Image;
use App\Portfolio;
use App\Slider;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Response;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios=Portfolio::count();
        $sliders=Slider::count();
        return view('admin.home',compact('sliders','portfolios'));
    }
    public function getProfile()
    {
        return view('admin.profile');
    }
    public function postProfile(Request $request)
    {
        $rules = [
			'name' => 'required|max:50',
			'email' => 'required|max:255'			
        ];
        $messages = [
			'name.required' => 'Name is required',
			'email.required' => 'Email is required',
			
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $msg .= $value . ', ';
            }
            $msg = rtrim($msg, ', ');
            return redirect()->back()->with('error', $msg);
        } else {
        Auth::user()->name=$request->name;
        Auth::user()->email=$request->email;
        if($request->current_password && $request->new_password){
        
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        Auth::user()->password = bcrypt($request->get('new_password'));
    }
        if(Auth::user()->save()){
            return redirect()->back()->with('success', 'Profile detail has been updated.');
        }
        return redirect()->back()->with('error', 'Could not update.');
    }
		
    }
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:6'
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    
		
    }
    public function formPortfolio()
    {
        return view('admin.portfolio_add');
    }
    public function postPortfolio(Request $request)
    {
        $rules = [
            'event_name' => 'required',	
            'banner' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',			
        ];
        $messages = [
            'event_name.required' => 'Name is required',	
            'banner.required' => 'Banner is required',
            'banner.max' => 'Banner size should be max 2 MB',
						
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $msg .= $value . ', ';
            }
            $msg = rtrim($msg, ', ');
            return redirect()->back()->with('error', $msg);
        } else {
            
            $cover = $request->file('banner');  
            $portfolio=new Portfolio();             
            $portfolio->event_name=$request->event_name;
            $portfolio->priority=$request->priority;
            $portfolio->event_address=$request->event_address;
            $portfolio->client_feedback=$request->client_feedback;
            $portfolio->event_date=$request->event_date?Carbon::parse($request->event_date)->format('Y-m-d'):null;
            $portfolio->save();
            if( $cover ){
                $extension = $cover->getClientOriginalExtension();
                $portfolio->banner=$portfolio->id.'.'.$extension; 
                Storage::disk('portfolio')->put($portfolio->id.'.'.$extension,  File::get($cover));
            }
            $additional=$request->file('additionals');           
            if($additional){
                $arry=[];
               
                foreach($additional as $key=> $val){                  
                    $extension = $val->getClientOriginalExtension();
                    $basename = bin2hex(random_bytes(8));
                    $name_img = sprintf('%s.%0.8s', $basename, $extension);
                    Storage::disk('additionals')->put($portfolio->id.'_'.$name_img,  File::get($val));               
                    $path['path']=$portfolio->id.'_'.$name_img;
                    $path['portfolio_id']=$portfolio->id;
                    $path['name']='additional_'.$portfolio->id.'_'. $name_img; 
                    array_push($arry,$path);  
                   
                }
                Image::insert($arry);
              
              
            }
           
        if($portfolio->save()){
            return redirect()->route('portfolio.list')->with('success', 'Portfolio image has been saved.');
        }
        return redirect()->back()->with('error', 'Could not save.');
    }
}
public function generateNumber(){
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

// generate a pin based on 2 * 7 digits + a random character
$pin = mt_rand(1000000, 9999999)
    . mt_rand(1000000, 9999999)
    . $characters[rand(0, strlen($characters) - 1)];

// shuffle the result
return str_shuffle($pin);
}
    public function getPortfolioList(Request $request)
    {
        $images=Portfolio::search($request->search)->sortable(['id' => 'desc'])->paginate(10);   
   
         return view('admin.portfolio_list',compact('images'));
    }
    public function getPortfolioEdit(Portfolio $portfolio)
    {    
        if($portfolio){
            $images= Image::where('portfolio_id',$portfolio->id)->get();
        }      
        return view('admin.portfolio_edit',compact('portfolio','images'));
    }
    public function updatePortfolio(Portfolio $portfolio,Request $request)
    { 
        $rules = [
            'event_name' => 'required',	
            'banner' => 'image|mimes:jpeg,png,jpg,svg|max:2048',			
        ];
        $messages = [
            'name.required' => 'Name is required',	
			'banner.max' => 'Banner size should be max 2 MB',
						
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $msg .= $value . ', ';
            }
            $msg = rtrim($msg, ', ');
            return redirect()->back()->with('error', $msg);
        } else {
            $cover = $request->file('banner');                       
            $portfolio->event_name=$request->event_name;
            $portfolio->priority=$request->priority;
            $portfolio->event_address=$request->event_address;
            $portfolio->client_feedback=$request->client_feedback;
            $portfolio->event_date=$request->event_date?Carbon::parse($request->event_date)->format('Y-m-d'):null;
            $portfolio->save();
          
            if( $cover ){
                $extension = $cover->getClientOriginalExtension();  
                $portfolio->banner=$portfolio->id.'.'.$extension; 
                Storage::disk('portfolio')->put($portfolio->id.'.'.$extension,  File::get($cover));          
            
            }          
        
        if($portfolio->save()){
            return redirect()->route('portfolio.list')->with('success', 'Portfolio image has been updated.');
        }
        return redirect()->back()->with('error', 'Could not save.');
    }       
        
    }
    
    public function deletePortfolio(Portfolio $portfolio)
    {      
        
        if($portfolio->destroy($portfolio->id)){
           
            $images=Image::where('portfolio_id',$portfolio->id)->get();                
            foreach ($images as $image) {   
                $img=Image::findOrFail($image->id);          
                if (Storage::disk('additionals')->exists($img->path)) {                   
                    Storage::disk('additionals')->delete($img->path);
                }
                $image->destroy($image->id);               
            }
           
            if (Storage::disk('portfolio')->exists($portfolio->banner)) {
                Storage::disk('portfolio')->delete($portfolio->banner);
            }

            return redirect()->route('portfolio.list')->with('success', 'Portfolio image has been deleted.');
        }
        return redirect()->back()->with('error', 'Could not delete.');
    }
    public function deleteImage(Image $image)
    {      
        
        if($image->destroy($image->id)){
          
            if (Storage::disk('additionals')->exists($image->path)) {
                Storage::disk('additionals')->delete($image->path);
            }
            return redirect()->route('portfolio.edit',$image->portfolio_id)->with('success', 'Addtional image has been deleted.');
        }
        return redirect()->back()->with('error', 'Could not delete.');
    }
    public function getSliderList(Request $request)
    {
        $images=Slider::search($request->search)->sortable(['id' => 'desc'])->paginate(10);
        return view('admin.slider_list',compact('images'));
    }
    public function formSlider()
    {
       $slider=Slider::all()->last()?Slider::all()->last()->id+1:1;        
        return view('admin.slider_add',compact('slider'));
    }
    public function postSlider(Request $request)
    {
        $rules = [
            'name' => 'required',	
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',			
        ];
        $messages = [
            'name.required' => 'Name is required',	
			'image.required' => 'Slider image is required',
						
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $msg .= $value . ', ';
            }
            $msg = rtrim($msg, ', ');
            return redirect()->back()->with('error', $msg);
        } else {
            $s=new Slider();
            $s->name=$request->name;
            $s->priority=$request->priority;
            $s->main_text=$request->main_text;
            $s->sub_text=$request->sub_text;
            $s->save();           
            $cover = $request->file('image');
            if($cover){
                $extension = $cover->getClientOriginalExtension();
            Storage::disk('slider')->put($s->id.'.'.$extension,  File::get($cover)); 
            $s->path=$s->id.'.'.$extension;
          
            }          
                   
        
        if($s->save()){
            return redirect()->route('slider.list')->with('success', 'Silder image has been saved.');
        }
        return redirect()->back()->with('error', 'Could not save.');
    }
		
    }
    public function getSliderEdit(Slider $slider)
    {        
        return view('admin.slider_edit',compact('slider'));
    }
    public function updateSlider(Slider $slider,Request $request)
    { 
        $rules = [
            'name' => 'required',	
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:2048',			
        ];
        $messages = [
            'name.required' => 'Name is required',	
			//'image.required' => 'Slider image is required',
						
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $msg .= $value . ', ';
            }
            $msg = rtrim($msg, ', ');
            return redirect()->back()->with('error', $msg);
        } else {
            $cover = $request->file('image');
            if($cover){
                $extension = $cover->getClientOriginalExtension();
                Storage::disk('slider')->put($slider->id.'.'.$extension,  File::get($cover));   
                $slider->path=$slider->id.'.'.$extension;   
            }          
             
            $slider->name=$request->name;
            $slider->priority=$request->priority; 
            $slider->main_text=$request->main_text;
            $slider->sub_text=$request->sub_text;          
                   
        
        if($slider->save()){
            return redirect()->route('slider.list')->with('success', 'Silder image has been updated.');
        }
        return redirect()->back()->with('error', 'Could not save.');
    }       
        
    }
    public function postImageUpload(Portfolio $portfolio,Request $request)
    { 
        
        $rules = [
          	
            'additionls.*' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',			
        ];
        $messages = [
            	
			'additionls.required' => 'Additinal image is required',
						
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $msg = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $msg .= $value . ', ';
            }
            $msg = rtrim($msg, ', ');
            return redirect()->back()->with('error', $msg);
        } else {
       
            $checkFile=$request->hasFile('additionals');  
           
            if($checkFile){
                $additional=$request->file('additionals');
                $arry=[];
                $name_img=Carbon::now()->getTimestamp();
                foreach($additional as $key=> $val){
                   
                    $extension = $val->getClientOriginalExtension();
                    $basename = bin2hex(random_bytes(8));
                    $name_img = sprintf('%s.%0.8s', $basename, $extension);
                    Storage::disk('additionals')->put($portfolio->id.'_'.$name_img,  File::get($val));               
                    $path['path']=$portfolio->id.'_'.$name_img;
                    $path['portfolio_id']=$portfolio->id;
                    $path['name']='additional_'.$portfolio->id.'_'. $name_img; 
                    array_push($arry,$path);  
                }
                Image::insert($arry);
                return redirect()->route('portfolio.edit',$portfolio->id)->with('success', 'Additional image has been saved.');
              
            }else{
                return redirect()->back()->with('error', 'Select atleast one additinal image');
            }
        }
        
       
         
        
    }
    public function deleteSlider(Slider $slider)
    {      
        
        if($slider->destroy($slider->id)){
            if(Storage::disk('slider')->exists($slider->path)) {
                Storage::disk('slider')->delete($slider->path);
            }
            return redirect()->route('slider.list')->with('success', 'Silder image has been deleted.');
        }
        return redirect()->back()->with('error', 'Could not delete.');
    }
    public function deleteAllSliders(Request $request)
    {
     
        $arr=explode(",",$request->ids);
        if(count($arr)>0){
        foreach ($arr as $s) {
        $slider = Slider::findOrFail($s);
        if (Storage::disk('slider')->exists($slider->path)) {
            Storage::disk('slider')->delete($slider->path);
        }
    }}

        $res=DB::table("sliders")->whereIn('id',$arr)->delete();
        return $res? response()->json(['code'=>200,'message'=>"Slider image has been deleted successfully."]):response()->json(['code'=>404,'message'=>"Could not delete!"]);
    }
    public function deleteAllPortfolio(Request $request)
    {
     
        $arr=explode(",",$request->ids);
        if(count($arr)>0){
        foreach ($arr as $s) {
            $portfolio = Portfolio::findOrFail($s);
            if (Storage::disk('portfolio')->exists($portfolio->banner)) {
                Storage::disk('portfolio')->delete($portfolio->banner);
            }
            
            $images=Image::where('portfolio_id',$portfolio->id)->get();                
            foreach ($images as $image) {   
                $img=Image::findOrFail($image->id);          
                if (Storage::disk('additionals')->exists($img->path)) {                   
                    Storage::disk('additionals')->delete($img->path);
                }
                $image->destroy($image->id);               
            }
         }
        }

        $res=DB::table("portfolios")->whereIn('id',$arr)->delete();
        return $res? response()->json(['code'=>200,'message'=>"Slider image has been deleted successfully."]):response()->json(['code'=>404,'message'=>"Could not delete!"]);
    }
    public function deleteAllImages(Request $request)
    {
     
        $arr=explode(",",$request->ids);
        if(count($arr)>0){
        foreach ($arr as $s) {
        $image = Image::findOrFail($s);
        if (Storage::disk('additionals')->exists($image->path)) {
            Storage::disk('additionals')->delete($image->path);
        }
    }}

        $res=DB::table("images")->whereIn('id',$arr)->delete();
        return $res? response()->json(['code'=>200,'message'=>"Additional images has been deleted successfully."]):response()->json(['code'=>404,'message'=>"Could not delete!"]);
    }
    public function downloadSlider(Slider $slider)
    {
       
    $filepath = public_path('storage/uploads/slider/').$slider->path;
    if(Storage::disk('slider')->exists($slider->path)){
        return Response::download($filepath);
    }else{
        return redirect()->back()->with('error', 'File not found');
    }
    }
    public function downloadImage(Image $image)
    {
    $filepath = public_path('storage/uploads/portfolio/additionals/').$image->path;
    if(Storage::disk('additionals')->exists($image->path)){
        return Response::download($filepath);
    }else{
        return redirect()->back()->with('error', 'File not found');
    }
    }
    public function downloadPortfolio(Portfolio $portfolio)
    {
    $filepath = public_path('storage/uploads/portfolio/').$portfolio->banner;   
    if(Storage::disk('portfolio')->exists($portfolio->banner)){
        return Response::download($filepath);
    }else{
        return redirect()->back()->with('error', 'File not found');
    }
   
    }
}
