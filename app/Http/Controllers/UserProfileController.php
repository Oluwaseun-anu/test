<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Image;
use App\User;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class UserProfileController extends Controller
{

    use UploadTrait;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.profilepage');
    }

    // public function profile(){
    //     return view('profile.update', array('user' => Auth::user()) );
    // }

    // public function show()
    // {
    //     return view('profile.update', ['user' => Auth::user()] );
    // }

    // public function update(Request $request){
        // Logic for user upload of avatar
    //     if($request->hasFile('avatar')){
    //         $avatar = $request->file('avatar');
    //         $filename = time() . '.' . $avatar->getClientOriginalExtension();
    //         Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
    //         $user = Auth::user();
    //         $user->avatar = $filename;
    //         $user->save();
    //     }
    //     return view('profile', ['user' => Auth::user()] );
    // }

    public function updateProfile(Request $request)
    {
        // Form validation
        $request->validate([
            'name'              =>  'required',
            'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        $user->name = $request->input('name');

        // Check if a profile image has been uploaded
        if ($request->has('profile_image')) {
            // Get image file
            $image = $request->file('profile_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/uploads/images/profile/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->profile_image = $filePath;
        }
        // Save user record to database
        $user->save();

        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Profile updated successfully.']);
    }

}





