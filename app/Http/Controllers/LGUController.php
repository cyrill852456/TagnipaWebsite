<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Videos;
use App\Models\Member;
use App\Models\SetRewardPoints;
use App\Models\JunkshowOwnerInformation;
use App\Models\AgentInformation;
use App\Models\BasuraStation;
use App\Models\CizitenReport;
use App\Models\CitizenReportVideo;
use App\Notifications\LGUReply;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;
use Image;
use Session;
class LGUController extends Controller
{
    ////////// Admin Control Panel //////////
    public function citizenReport()
    {
        $user = Member::first(); 
        $members = Member::all();
        $reports = CizitenReport::latest()->paginate(10);
        $report_video = CitizenReportVideo::latest()->paginate(10);
        return view('Admin.citizenreport',compact('user','reports','report_video','members'));
    }
    public function admindashboard()
    {
        
        return view('Admin.admin');
    }
    public function junkshop_account()
    {   
        $junkshop = User::where('role',1)->get();
        $ownerinfo = JunkshowOwnerInformation::all();
        $user = Member::first();   
        return view('Admin.junkshopaccounts',compact('junkshop','ownerinfo','user'));
    }
    public function member_account()
    {   
        $member = Member::all();
        $user = Member::first();   
        return view('Admin.membersaccount',compact('member','user'));
    }
    public function agent_account()
    {
        $agent = User::where('role',2)->get();
        $agentinfo = AgentInformation::all();
        $user = Member::first();   
        return view('Admin.agentsaccount',compact('agent','agentinfo','user'));
    }

    ////////////// Adding Junkshop Account ///////////////////////
    public function add_junkshop(Request $request)
    {
              //Validate Request
    $request->validate([
        'name' => 'required|string|max:225|unique:users',
        'email' => 'required|string|email|max:225|unique:users',
        'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'password' => 'required|min:12|max:20',  
    ]);
      // Add new Junkshop 
      $file = $request->hasfile('profile_pic');
      if($file)
      { 
        $profile = $request->file('profile_pic');
        $filename = time(). '.' . $profile->getClientOriginalExtension();
        Image::make($profile)->resize(300,300)->save(public_path('/LGUProfiles/Junkshop_Image_profiles/'. $filename));
        $data['profile_pic'] = $filename;
      }
      $data = new user;
      $data->name = $request->name;
      $data->email = $request->email;
      $data->profile_pic = $filename;
      $data->password = bcrypt($request->password);
      $data->role = '1'; // Junkshop Role
      $data->save();
      Alert::success('Successfully Added! ','Junkshop Account Successfuly Created');
      return redirect()->back();
    }
    /// Delete Junkshop Account ///////
    public function deleteJunkshop($id)
    {
        $junkshop = User::findOrFail($id);
        $junkshop->delete();
        return response()->json(['status','Junkshop Account Deleted Successfully']);
    }
    ////// Edit Junkshop Account //////////
      public function editJunkshop($id)
      {
          $junkshop = User::find($id);
          return response()->json(['status' => 200, 'junkshop' => $junkshop,]);
      }
    ///// Update Junkshop
      public function updateJunkshop(Request $request)
    {   
        $data_id = $request->input('junkshop_id');
        $data = User::find($data_id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->update();
        Alert::success('Successfully Updated! ','Account Successfuly Updated');
        return redirect()->back();
    }

    public function junkshopInformation(Request $request)
    {
        //Validation
        $this->validate($request, array(
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|string|max:255|unique:junkshow_owner_information',
            'address' => 'required',
            'phonenumber' => 'required|max:11',
            'birthDate' => 'required',
            'gender' => 'required|in:Male,Female',

        ));
        $info = User::findOrFail($request->junkshop_id);
        $info->junkshop()->create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'phonenumber' =>$request->phonenumber,
            'birthDate' => $request->birthDate,
            'gender' => $request->gender,
        ]);
        Alert::success('Information Successfully Added!');
        return redirect()->back();
    }


    /////////////////////// Adding Agent ///////////////////////////////////////////////
    public function add_agent(Request $request)
    {
    //Validate Request
    $request->validate([
        'name' => 'required|string|max:225|unique:users',
        'email' => 'required|string|email|max:225|unique:users',
        'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'password' => 'required|min:12|max:20',  
    ]);
     // Add new Agent 
     $file = $request->hasfile('profile_pic');
    if($file)
    { 
      $profile = $request->file('profile_pic');
      $filename = time(). '.' . $profile->getClientOriginalExtension();
      Image::make($profile)->resize(300,300)->save(public_path('/LGUProfiles/Agent_Image_Profiles/'. $filename));
      $data['profile_pic'] = $filename;
    }
    $data = new user;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->profile_pic = $filename;
    $data->password = bcrypt($request->password);
    $data->role = '2'; // Junkshop Role
    $data->save();
    Alert::success('Successfully Added! ','Agent Account Successfuly Created');
    return redirect()->back();
    }
    /// Edit Agent Account ////
    public function editAgent($id)
    {
        $agent = User::find($id);
        return response()->json(['status' => 200, 'agent' => $agent,]);
    }
    /// Update Agent Account /////
    public function updateAgent(Request $request)
    {
        $data_id = $request->input('agent_id');
        $data = User::find($data_id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->update();
        Alert::success('Successfully Updated! ','Account Successfuly Updated');
        return redirect()->back();
    }
    /// Delete Agent Account
    public function deleteAgent($id)
    {
        $junkshop = User::findOrFail($id);
        $junkshop->delete();
        return response()->json(['status','Agent Account Deleted Successfully']);
    }
    // Add Agent Information
    public function agentInformation(Request $request)
    {
        //Validation
        $this->validate($request, array(
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|string|max:255|unique:junkshow_owner_information',
            'address' => 'required',
            'phonenumber' => 'required|max:11',
            'birthDate' => 'required',
            'gender' => 'required|in:Male,Female',

        ));
        $info = User::findOrFail($request->agent_id);
        $info->agents()->create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'phonenumber' =>$request->phonenumber,
            'birthDate' => $request->birthDate,
            'gender' => $request->gender,
        ]);
        Alert::success('Information Successfully Added!');
        return redirect()->back();
    }
    /////////////////////////////////////////////////////////////////////////////////








    //// Add Video Tutorials /////////
    public function addVideo(Request $request)
    {
        $request->validate([
            'video_name' => 'required|max:255',
            'video_link' => 'required',
            'date_posted' => 'required',
            'video_description' => 'required',
            'video_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        
        $requestdata = $request->all();
        $filename = time().$request->file('video_image')->getClientOriginalName();
        $path = $request->file('video_image')->storeAs('VideoImages', $filename, 'public');
        $requestdata["video_image"]= '/storage/'.$path;
        Videos::create($requestdata);
        
        Alert::success('Video Posted Successfully!');
        return redirect()->back();
    }

    //// Set reward points /////////
    public function setReward(Request $request)
    {   
        $request->validate([
            'garbage_type' => 'required|unique:set_reward_points',
            'points' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $requestdata = $request->all();
        $filename = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('RewardImages', $filename, 'public');
        $requestdata["image"]= '/storage/'.$path;
        SetRewardPoints::create($requestdata);
        
        Alert::success('Posted Successfully!');
        return redirect()->back();
        
    }
    /////// Add BayloBasura Station ////////
    public function addlocation(Request $request)
    {   
        $request->validate([
            'station_name' => 'required|unique:basura_stations',
            'location' => 'required|unique:basura_stations',
            'station_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $requestdata = $request->all();
        $filename = time().$request->file('station_image')->getClientOriginalName();
        $path = $request->file('station_image')->storeAs('BarangayImages', $filename, 'public');
        $requestdata["station_image"]= '/storage/'.$path;
        BasuraStation::create($requestdata);
        
        Alert::success('Station Added Successfully!');
        return redirect()->back();
        
    }



    public function sendReply(Request $request)
      {
       //Validation
       $this->validate($request, array(
        
        'comments' => 'required',

    ));
    $info = Member::findOrFail($request->member_id);
    $info->reply()->create([
        'comments' => $request->comments
    ]);
    $send = User::all();
    Notification::send($send, new LGUReply($request->comments));
    Alert::success('Successfuly Sended');
    return redirect()->back();
      }
}   
