<?php
use App\Models\Post;
use App\Models\Videos;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LGUController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Middleware For Not Getting Access Outside Dashboard
Route::group(['middleware' => 'AlreadyLogIn'], function(){
    //Get Route
    Route::get('member-login',[MemberController::class, 'MemberLoginPage'])->name('MemberLogin');
    Route::get('member-registration',[MemberController::class, 'MemberRegistrationPage'])->name('MemberRegistration');
    Route::get('/', function () {
        $post = Post::latest()->paginate(3);
        $video = Videos::latest()->paginate(8);
        return view('LandingPage',compact('post','video'));});
    Route::get('videotutorials',[MemberController::class, 'videotutorials'])->name('videos');
    Route::get('news&updates',[MemberController::class, 'news_updates'])->name('news&updates');

    //Post Route
    Route::post('create-member',[MemberController::class, 'create'])->name('addMember');
    Route::post('login-member',[MemberController::class, 'LoginMember'])->name('loginmember');

});

// Middleware for not accessing inside Dashboard or personal Information
Route::group(['middleware' => 'AccessDenied'], function(){
    //Get Route
    Route::get('member-dashboard',[MemberController::class, 'MemberDashboard'])->name('MemberDashboard');
    Route::get('/member/junkshops',[MemberController::class, 'junkshops'])->name('member-junkshops');
    Route::get('/member/baylobasuralocation',[MemberController::class, 'baylobasura'])->name('baylobasura');
    Route::get('/member/transaction-history',[MemberController::class, 'transaction'])->name('transaction-history');
    Route::get('/member/segregation-reports',[MemberController::class, 'segregation'])->name('segregation-report');
    Route::get('/member/citizen-reports',[MemberController::class,'citizens'])->name('citizen-report');
    Route::get('/member/user-profile',[MemberController::class, 'userprofile'])->name('userprofile');
    Route::get('/member/exchange-rewards',[MemberController::class, 'exchangereward'])->name('ex-rewards');

    //Post Route
    Route::post('member/send-citizenreport',[MemberController::class, 'CitizenReport'])->name('send-citizenreport');
    Route::post('member/send-citizenreport-video',[MemberController::class, 'citizenReporVideo'])->name('send-citizenreport-video');

});
//////////////////////// LGU Authentication Routeting /////////////////////////////////////////////////////

//////////////// Admin Route //////////////////////////////////
Route::middleware(['auth','user_roles:admin'])->group(function(){
    /// Get Route
    Route::get('admin-dashboard',[LGUController::class, 'admindashboard'])->name('admin_dashboard');
    Route::get('admin/junkshop-accounts',[LGUController::class, 'junkshop_account'])->name('admin.junkshops');
    Route::get('admin/member-accounts',[LGUController::class, 'member_account'])->name('admin.member');
    Route::get('admin/agent-accounts',[LGUController::class, 'agent_account'])->name('admin.agent');
    Route::get('/edit-junkshop/{id}',[LGUController::class,'editJunkshop']);
    Route::get('/edit-agent/{id}',[LGUController::class,'editAgent']);
    Route::get('/update-citizen/{id}',[LGUController::class,'reply']);    
    Route::get('admin/citizen-report',[LGUController::class, 'citizenReport'])->name('admin.citizenreport');
    // Store Route
    Route::post('admin/add-junkshop-account',[LGUController::class, 'add_junkshop'])->name('add-junkshop');
    Route::post('admin/add-agent-account',[LGUController::class, 'add_agent'])->name('add-agent');
    Route::post('admin/add-junkshop-ownerinformation',[LGUController::class, 'junkshopInformation'])->name('add-ownerinformation');
    Route::post('admin/add-junkshop-agentinformation',[LGUController::class, 'agentInformation'])->name('add-agentinformation');
    Route::post('admin/add-video-tutorials',[LGUController::class, 'addVideo'])->name('add-videos');
    Route::post('admin/set-reward-points',[LGUController::class, 'setReward'])->name('set-reward');
    Route::post('admin/add-station',[LGUController::class,'addlocation'])->name('add-location');
    Route::post('update-reply',[LGUController::class,'sendReply'])->name('send-reply');

    // Update Route
    Route::put('update-junkshop',[LGUController::class,'updateJunkshop']);
    Route::put('update-agent',[LGUController::class,'updateAgent']);

    //Delete Route
    Route::delete('/account-delete/{id}',[LGUController::class,'deleteJunkshop']);
    Route::delete('/agent-account-delete/{id}',[LGUController::class,'deleteAgent']);
});



////////////////////////// Junkshop_Admin Route //////////////////////////////////////////////////
Route::middleware(['auth','AlreadyLogIn','user_roles:junkshop_admin'])->group(function(){
    Route::get('/home/junkshop', [App\Http\Controllers\HomeController::class, 'junkshop'])->name('home.junkshop');
});



///////////////////////// Agent's Route //////////////////////////////////////////////////////////////
Route::middleware(['auth','AlreadyLogIn','user_roles:agent'])->group(function(){
    Route::get('/home/agent', [App\Http\Controllers\HomeController::class, 'agent'])->name('home.agent');
});




//////// Readed Notification Route //////////
Route::get('markAsRead',function(){
    $user = Member::first();
    $user->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsRead');
Route::get('markasread',function(){
    $user = User::first();
    $user->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markasread');
Auth::routes();
Route::get('logout',[MemberController::class, 'logout'])->name('logoutmember');
