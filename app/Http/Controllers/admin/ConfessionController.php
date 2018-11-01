<?php

namespace App\Http\Controllers\admin;

use App\Models\Confession;
use App\Repositories\Contracts\ConfessionRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function index()
    {
        $confessions = $this->confession->getAll();
        return view('admin.confession.index', compact('confessions'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $confession = $this->confession->show($id);
        return view('admin.confession.show', compact('confession'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->confession->delete($id);
        return back()->with('success', __('message.success'));
    }
}
