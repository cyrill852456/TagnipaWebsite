<?php

namespace App\Http\Livewire;
use App\Models\Member;
use App\Models\User;
use App\Models\Post;
use App\Models\SetRewardPoints;
use App\Models\BasuraStation;
use Livewire\WithFileUploads;
use RealRashid\SweetAlert\Facades\Alert;
use Livewire\Component;

class Admin extends Component
{   
    use WithFileUploads;
    public $title;
    public $date;
    public $newImage;
    public $body;

    public function storePost()
    {   
        $this->validate([
            'newImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', //1mb max
            'title' => 'required|string',
            'date' => 'required',
            'body' => 'required|string',

        ]);
        $image = $this->newImage->store('public/posts');
        Post::create([
            'title' => $this->title,
            'image' => $image,
            'date' => $this->date,
            'body' => $this->body,
        ]);
        $this->reset();
        Session()->flash('message','Post Added Successfully :D');
    }

    public function render()
    {
        return view('livewire.admin',[
            'member' => Member::count(),
            'stations' => SetRewardPoints::count(),
            'agents' => User::where('role','2')->count(),
            'junkshops' => User::where('role','1')->count(),
            'reward'  => SetRewardPoints::latest()->paginate(10),
            'user' => Member::find(1)   
        ]);
    }
}
