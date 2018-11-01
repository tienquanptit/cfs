<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\ConfessionRequest;
use App\Models\Confession;
use App\Repositories\Contracts\ConfessionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Exception;

class ConfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $confession;

    public function __construct(ConfessionRepository $confession)
    {
        $this->confession = $confession;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.confession.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConfessionRequest $request)
    {

        if ($request->hasFile('images')) {
            $image = $request->file('images');
            //dd($image);
            $new_name = str_random(3).'_'.$image->getClientOriginalName();

            while (file_exists(config('app.common.images_confession').$new_name)) {
                $new_name = str_random(3).'_'.$new_name;
            }

            $image->storeAs(config('app.common.images_confession'), $new_name);
        }

        $confession = new Confession(array(
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'images' => $new_name
        ));
        $confession->save();

        return redirect()->route('cfs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
}
