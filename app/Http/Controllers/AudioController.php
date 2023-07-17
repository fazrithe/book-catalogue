<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio;

class AudioController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $audio  = Audio::where('id', 1)->first();
        return view('audio.index', compact('audio'));
    }

          /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:mp3|max:50048',
        ]);

        $cat    = Audio::where('id', $request->id)->first();
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads/mp3', $fileName, 'public');

            $cat->file_name = time().'_'.$request->file->getClientOriginalName();
            $cat->file_path = '/public/storage/' . $filePath;
            $cat->save();
        }

        return redirect()->route('audio');
    }
}
