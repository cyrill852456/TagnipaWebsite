<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Videos;
use App\Models\Post;
use App\Models\User;
use App\Models\BasuraStation;
use App\Models\SetRewardPoints;
use App\Models\CizitenReport;
use App\Models\CitizenReportVideo;
use Illuminate\Http\Request;
use App\Models\ReplyToMembers;
use App\Notifications\CitizenReports;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;
use Session;
use Illuminate\Support\Facades\Notification;
class MemberController extends Controller
{   /////// Citizen Report ///////////
      ///// Send Segregation Report Image /////////////////////
  public function CitizenReport(Request $request)
  {
    $request->validate([
        'address' => 'required|string|max:225',
        'date' => 'required',
        // 'video'=> 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'comments' => 'required',  
    ]);
    
    if($request->hasfile('image'))
    { 
      $profile = $request->file('image');
      $filename = time(). '.' . $profile->getClientOriginalExtension();
      Image::make($profile)->resize(300,300)->save(public_path('/Member/CitizenReportsImage/'. $filename));
      $data['image'] = $filename;

      $data = Member::where('id','=',Session::get('MemberId'))->first();
      DB::table('ciziten_reports')->insert([
          'member_id' => $data->id,
          'address' => $request->address,
          'date' => $request->date,
          'image' => $filename,
          'comments' => $request->comments,

      ]);
      $user = Member::first();
      Notification::send($user, new CitizenReports($data));
    }
    Alert::success('Successfully Posted! ','Citizen Report Posted');
     return redirect()->back();
  }

    ///// Send Segregation Report Video /////////////////////
  public function citizenReporVideo(Request $request)
  {
    $request->validate([
        'address' => 'required|string|max:225',
        'date' => 'required',
        'video'=> 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
        'comments' => 'required',  
    ]);
    if($request->hasfile('video'))
    {   $files = $request->file('video');
        $files->move('upload',$files->getClientOriginalName());
        $file_name = $files->getClientOriginalName();
        $data = Member::where('id','=',Session::get('MemberId'))->first();
        DB::table('citizen_report_videos')->insert([
            'member_id' => $data->id,
            'address' => $request->address,
            'date' => $request->date,
            'video' => $file_name,
            'comments' => $request->comments,

        ]);
        $user = Member::first();
        Notification::send($user, new CitizenReports($data));
        Alert::success('Successfully Posted! ','Citizen Report Posted');
        return redirect()->back();
    }
  }
  /////////////////////////////////////////////////////
    /////// Members Links ////////

    ////////// Junkshop Page ////////
    public function junkshops()
    {   $data = array();
        if(Session::has('MemberId'))
        {
        $data = Member::where('id', '=', Session::get('MemberId'))->first();
  
        }
        $reward = SetRewardPoints::latest()->paginate(6);
        return view('MemberDashboard.junkshop',compact('data','reward'));
    }
    /////////////////////////////




    ////////// Baylo Basura Page /////////
    public function baylobasura()
    {
        $data = array();
        if(Session::has('MemberId'))
        {
        $data = Member::where('id', '=', Session::get('MemberId'))->first();
  
        }
        $station = BasuraStation::all();
        return view('MemberDashboard.baylobasura',compact('data','station'));
    }
    ////////////////////////////////////////////////////////




    ////////////// Segregation //////////////////////////
    public function segregation()
    {
        $data = array();
        if(Session::has('MemberId'))
        {
        $data = Member::where('id', '=', Session::get('MemberId'))->first();
  
        }
        return view('MemberDashboard.segrationreports',compact('data'));
    }
    //////////////////////////////////////////////////////


    
    ////////////// Citizens Report //////////////////////////
    public function citizens()
    {
        $data = array();
        if(Session::has('MemberId'))
        {
        $data = Member::where('id', '=', Session::get('MemberId'))->first();
  
        }
        return view('MemberDashboard.citizenreports',compact('data'));
    }
    //////////////////////////////////////////////////////


    ////////////// Exchange Rewards ///////////////////////////
    public function exchangereward()
    {
        $data = array();
        if(Session::has('MemberId'))
        {
        $data = Member::where('id', '=', Session::get('MemberId'))->first();
  
        }
        return view('MemberDashboard.exchangerewards',compact('data'));
    }
    ///////////////////////////////////////////////////////

    public function userprofile()
    {
        $data = array();
        if(Session::has('MemberId'))
        {
        $data = Member::where('id', '=', Session::get('MemberId'))->first();
  
        }
        return view('MemberDashboard.userprofile',compact('data'));
    }

    ////// Transaction History //////
    public function transaction()
    {
        $data = array();
        if(Session::has('MemberId'))
        {
        $data = Member::where('id', '=', Session::get('MemberId'))->first();
  
        }
        return view('MemberDashboard.transactionhistory',compact('data'));
    }
    /////////////////////////////////////


    ////// End Members Links /////////


    
    // Authentication Controllers
    public function MemberLoginPage(){
        return view('MemberAuth.Member-Login');
    }
    public function MemberRegistrationPage()
    {
        return view('MemberAuth.Member-Registration');
    }
    
    // links for news & Videos tutorials
    public function videotutorials()
    {   $video = Videos::latest()->paginate(12);
        return view('videotutorial',compact('video'));
    }
    public function news_updates()
    {
        return view('News&Updates');
    }







    public function Memberdashboard()
    {
        $data = array();
        if(Session::has('MemberId'))
        {
        $data = Member::where('id', '=', Session::get('MemberId'))->first();
  
        }
        $message = ReplyToMembers::where('member_id',$data->id)->latest()->get();
        $news = Post::latest()->paginate(3);
        $user = User::find(1);
        return view('MemberDashboard.member-dashboard',compact('data','news','message','user'));
    }

    ///// Registration Form /////
    function create(Request $request){
    //return $request->input(); For Check Inputs

    //Validate Request
    $request->validate([
        'firstname' => 'required|string|max:225',
        'lastname' => 'required|string|max:225',
        'email' => 'required|email|max:225|unique:members',
        'address' => 'required|string|max:225',
        'dateofbirth' => 'required',
        'gender' => 'required|in:Male,Female',
        'phonenumber' => 'required|string|max:11|unique:members',
        'password' => 'required|min:12|max:20',
    ]);

    //if form validated succesfully, then register new Member
    $path = 'users/images/';
    $fontPath = public_path('fonts/Oliciy/Oliciy.ttf');
    $char = strtoupper($request->firstname[0]);
    $newAvatarName = rand(12,34353).time().'_avatar.png';
    $dest = $path.$newAvatarName;

    $createAvatar = makeAvatar($fontPath,$dest,$char);
    $picture = $createAvatar == true ? $newAvatarName : '';
    $member = new Member;
    $member->firstname = $request->firstname;
    $member->lastname = $request->lastname;
    $member->email = $request->email;
    $member->address = $request->address;
    $member->phonenumber = $request->phonenumber;
    $member->dateofbirth = $request->dateofbirth;
    $member->gender = $request->gender;
    $member->profile_pic = $picture;
    $member->password = Hash::make($request->password);
    $query = $member->save();
    if($query){
        Alert::success('Registered  Successfully!','Sign In your Account now');
        return redirect()->route('MemberLogin');
      
    }
    else{
      Alert::error('Someting Went Wrong','Error Code 4004');
        return back();
    }


  }

  ///////////// Login Form /////////////////////
  public function LoginMember(Request $request){

    /*
    *Check Validation of inputs
    *
    */
    $request->validate([
        'email'=>'required|email',
        'password' => 'required'
    ]);
    $member = Member::where('email','=',$request->email)->first();
    if($member){
        if(Hash::check($request->password,$member->password)){
            $request->session()->put('MemberId',$member->id);
            return redirect()->route('MemberDashboard');    
        }
        else
        {
            return back()->with('fail','Password dont matches.');
        }
    }
    else{
        return back()->with('fail','These credentials do not match our records');
    }
  }
  /////////////////////////////////////////////
  public function logout(){
    if(Session::has('MemberId')){
        Session::pull('MemberId');
        return redirect()->route('MemberLogin');
    }
  }


}
