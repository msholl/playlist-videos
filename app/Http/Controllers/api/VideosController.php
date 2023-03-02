<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (!$request->has('search')){
        return Video::all();
        }

        return Video::where('titulo', $request->search)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()
            ->json(Video::create($request->all()),201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return $video;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Video $video ,Request $request,)
    {
        $video->fill($request->all());
        $video->save();

        return $video;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $video)
    {
        Video::destroy($video);

        return response()->noContent();
    }
}
