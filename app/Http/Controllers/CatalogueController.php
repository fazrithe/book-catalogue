<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogue;

class CatalogueController extends Controller
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
        $data   = Catalogue::all();
        return view('catalogue.index', compact('data'));
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('catalogue.create');
    }

           /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:8048',
            'cover' => 'required|mimes:jpg,png|max:2048'
        ]);

        $cat    = new Catalogue();
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads/file', $fileName, 'public');

            $coverName = time().'_'.$request->cover->getClientOriginalName();
            $coverPath = $request->file('cover')->storeAs('uploads', $coverName, 'public');

            $cat->name      = $request->name;
            $cat->file_name = time().'_'.$request->file->getClientOriginalName();
            $cat->file_path = '/storage/' . $filePath;
            $cat->cover_name = time().'_'.$request->cover->getClientOriginalName();
            $cat->cover_path = '/storage/' . $coverPath;
            $cat->save();
        }

        return redirect()->route('catalogue');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $data = Catalogue::where('id', $id)->first();

        return view('catalogue.edit', compact('data'));
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:8048',
            'cover' => 'required|mimes:jpg,png|max:2048'
        ]);

        $cat    = Catalogue::where('id', $request->id)->first();
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads/file', $fileName, 'public');

            $coverName = time().'_'.$request->cover->getClientOriginalName();
            $coverPath = $request->file('cover')->storeAs('uploads', $coverName, 'public');

            $cat->name      = $request->name;
            $cat->file_name = time().'_'.$request->file->getClientOriginalName();
            $cat->file_path = '/public/storage/' . $filePath;
            $cat->cover_name = time().'_'.$request->cover->getClientOriginalName();
            $cat->cover_path = '/public/storage/' . $coverPath;
            $cat->save();
        }

        return redirect()->route('catalogue');
    }

      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function destroy($id)
     {
         $post = Catalogue::findOrFail($id);

         $post->delete();

         return back()->with('success', 'Data Your files has been successfully deleted');
     }
}
