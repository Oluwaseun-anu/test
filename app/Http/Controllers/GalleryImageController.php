<?php

namespace App\Http\Controllers;

use App\GalleryImage;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Auth;

class GalleryImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('gallery');
    }

    public function stores(Request $request)
    {
        $this->validate($request, [
            'filename'=>'required|max:5048',
            ]);
            // $request->images->storeAs('/uploads/gallery/', $request->images->getClientOriginalName());
            // $request->images->store('/uploads/gallery/');
            if($request->hasFile('filename'))
            {
                $allowedfileExtension=['pdf','jpg','png','docx','jpeg','gif'];
                // $files = $request->file('filename');
                foreach($request->file('filename') as $file){
                    $filename = $file->getClientOriginalName();
                    $file->move(public_path().'/uploads/gallery/', $filename);
                    $extension = $file->getClientOriginalExtension();
                    $check=in_array($extension,$allowedfileExtension);
                    //dd($check);
                    if($check)
                    {
                        // $users= User::create($request->all());
                        foreach ($request->images as $image) {
                            $filename = $image->store('filename');
                            GalleryImage::create([
                            'user_id' => Auth::user()->id,
                            'filename' => $filename
                            ]);
                            
                            // ->save( public_path('/uploads/gallery/' . $filename ) );
                        }
                        echo "Upload Successfully";
                    }
                    else
                    {
                        echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                    }
                }
            }

             // Form validation
        // $request->validate([
        //     'name' =>  'required',
        //     'images' =>  'required|image|mimes:jpeg,png,jpg,gif|max:5048'
        // ]);


        // Check if a profile image has been uploaded
        // if ($request->has('images')) {
            // Get image file
            // $image = $request->file('images');
            // Make a image name based on user name and current timestamp
            // $name = Str::slug($request->input('name')).'_'.time();
            // Define folder path
            // $folder = '/uploads/gallery/gallery/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            // $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            // $this->uploadOne($image, $folder, 'public', $name);
            // Set gallery image path in database to filePath
            // $user->profile_image = $filePath;
        // }
        // Persist user record to database
        // $user->save();

        // Return user back and show a flash message
        // return redirect()->back()->with(['status' => 'Gallery updated successfully.']);
    }

    public function updateGallery(Request $request)

    {

        $this->validate($request, [

                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $user = User::findOrFail(auth()->user()->id);
        
        
        if($request->hasfile('filename'))
            {

                foreach($request->file('filename') as $image)
                {
                    $name=$image->getClientOriginalName();
                    $image->move(public_path().'/uploads/gallery/', $name);  
                    $data[] = $name;  
                }
            }
            $form = GalleryImage::create([
                'user_id' => Auth::user()->id,
                'filename' => $image
                ]);

            // $form= new GalleryImage();
            $form->filename=json_encode($data);
            
        
        $form->save();

        // return back()->with('success', 'Your images has been successfully');
        // Return user back and show a flash message
        return redirect()->back()->with(['status' => 'Your image(s) was/were uploaded successfully.']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galleryImage = galleryImage::find($id);
        return view('gallery')->with('galleryImage', $galleryImage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryImage $galleryImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleryImage $galleryImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GalleryImage  $galleryImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryImage $galleryImage)
    {
        //
    }
}
