<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::paginate(10);
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $imagePath = base_path() . '/public/photos/';
        $resumePath = base_path() . '/public/files/';

        try {
            if (!file_exists($imagePath)) {
                mkdir($imagePath, 0755, true);
            }
            if (!file_exists($filePath)) {
                mkdir($filePath, 0755, true);
            }
        } catch (\Exception $e) {
        }

        $image = $request->file('image');
        $resume = $request->file('resume');

        $imageUniId = uniqid();
        $resumeUniId = uniqid();

        $imageName = $imageUniId . '_' . trim($image->getClientOriginalName());
        $resumeName = $resumeUniId . '_' . trim($resume->getClientOriginalName());

        $image->move($imagePath, $imageName);
        $resume->move($resumePath, $resumeName);

        About::create([
            'name'  =>  $request->name,
            'title'  =>  $request->title,
            'description'  =>  $request->description,
            'image'  =>  $imageName,
            'file'  =>  $resumeName,
        ]);

        return redirect()->route('admin.about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $image_path = base_path() . '/public/photos/' . $about->image;
        $file_path = base_path() . '/public/files/' . $about->file;

       unlink($file_path);
       unlink($image_path);

       $about->delete();

       return redirect()->route('admin.about.index');
    }
}
