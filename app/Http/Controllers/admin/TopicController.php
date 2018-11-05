<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\TopicFormController;
use App\Models\Topic;
use App\Repositories\Contracts\TopicRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class TopicController extends Controller
{

    protected $topic;

    public function __construct(TopicRepository $topic)
    {
        $this->topic = $topic;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = $this->topic->getAll();
        $test_model = new Topic();
        $fillable_columns = $test_model->getFillable();
        foreach ($fillable_columns as $key => $value) {
            $test_columns[$value] = $value;
        }

        return view('admin.topic.index', compact('topics', 'test_columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.topic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopicFormController $request)
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $request->merge(['user_id' => $user_id]);

            $image = $request->file('image_topic');
            $img = $this->saveImage($image);
            $request->merge(['images' => $img]);

            //handle select time
            if ($request->input('set_time') == 0) {
                $select_time = null;
            } elseif ($request->input('set_time') == 1) {
                $select_time = $request->input('select_time');

            }
            $request->merge(['select_time' => $select_time]);
//            dd(Carbon::now()->hour . ':'. Carbon::now()->minute);
            $this->topic->store($request->all());

            return back()->with('success', __('message.success'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = $this->topic->show($id);

        return view('admin.topic.show', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = $this->topic->find($id);

        return view('admin.topic.edit', compact('topic'));
    }

    public function updateAll(TopicFormController $request, $id)
    {
        $topic = $this->topic->find($id);
        $image = $request->file('image_topic');
        $img = $this->saveImage($image);
        $request->merge(['images' => $img]);
        $topic->update($request->all());

        return back()->with('success', trans('message.success'));
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
        $test = Topic::find($id);
        $column_name = Input::get('name');
        $column_value = Input::get('value');
        if (Input::has('name')) {
            $test = Topic::select()
                ->where('id', '=', $id)
                ->update([$column_name => $column_value]);
            return response()->json(['code' => 200], 200);
        }

        return response()->json(['error' => 400, 'message' => 'Not enought params'], 400);
    }

    public function bulk_update(Request $request)
    {
        if (Input::has('ids_to_edit') && Input::has('bulk_name') && Input::has('bulk_value')) {
            $ids = Input::get('ids_to_edit');
            $bulk_name = Input::get('bulk_name');
            $bulk_value = Input::get('bulk_value');
            foreach ($ids as $id) {
                $test = Test::select()->where('id', '=', $id)->update([$bulk_name => $bulk_value]);
            }
            $message = "Done";
        } else {
            $message = "Error. Empty or Wrong data provided.";

            return Redirect::back()->withErrors(array('message' => $message))->withInput();
        }

        return Redirect::back()->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->topic->delete($id);

        return back()->with('sucess', __('message.sucess'));
    }

    public function saveImage($image)
    {
//        dd($image);
//        save in storage
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename() . '.' . $extension, File::get($image));
        $img = $image->getFilename() . '.' . $extension;

        return $img;
    }
}
