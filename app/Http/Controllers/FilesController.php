<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Storage;
use App\UploadedFile;
// use App\User;
use Auth;



class FilesController extends Controller
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
        return view('files.upload');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Upload the file
    public function handleUpload(Request $request)
    {        
        // if($request->hasFile('content')){
        $id = Auth::id();
            $file = $request->file('content');
            $allowedFileTypes = config('app.allowedFileTypes');
            $maxFileSize = config('app.maxFileSize');
            $rules = [
                'content' => 'required|mimes:'.$allowedFileTypes.'|max:'.$maxFileSize
            ];
            $this->validate($request, $rules);
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.fileDestinationPath').'/'.$fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            

            if($uploaded){
                UploadedFile::create([
                    'filename' => $fileName,
                    'user_id' => $id
                    ]);
            }
        return redirect()->to('/upload');
    }

    //list the files on the upload page
    public function upload(){
        
        // Identify the directory
        $directory = config('app.fileDestinationPath');

        //give us all the files in the directory
        // $files = Storage::files($directory);
        // use eloquent to query everything in db files table
        // 
        $id = Auth::id();
        // $files = UploadedFile::find($id)->user_id;        
        //$files = UploadedFile::find();
        // $files = UploadedFile::all();
        // $files = DB::table('files')->where('user_id', '=', $id)->get();
        $files = UploadedFile::where('user_id', '=', $id)->get();
        


        //return the view and pass in a variable for the content
        return view('files.upload')->with(array('files' => $files));
    }
    public function deleteFile($id) {
        $file = UploadedFile::find($id); // find the file
        Storage::delete(config('app.fileDestinationPath').'/'.$file->filename); // delete the file from the directory
        $file->delete(); // delete the file name from the db
        return redirect()->to('/upload');
    }
}