<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackFormRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FeedbackController extends Controller
{
    public $title = null;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Отзывы клиентов";
        $feedbacks = Feedback::paginate(5);
        return view('admin.feedback.index', compact('title', 'feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Добавить отзыв";
        return view('admin.feedback.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackFormRequest $request)
    {
        $data = $request->validated();
        $feedback = new Feedback();
        $feedback->name = $data['name'];
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/feedback', $filename);
            $feedback->image = $filename;
        }
        $feedback->save();
        return redirect('/feedback/index')->with('message', 'Отзыв успешно добавлен');
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
        $title = "Редактировать отзыв";
        $feedback = Feedback::find($id);
        return view('admin.feedback.edit', compact('feedback', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeedbackFormRequest $request, $id)
    {
        $data = $request->validated();
        $feedback = Feedback::find($id);
        $feedback->name = $data['name'];
        if($request->hasFile('image'))
        {
            $destination = 'uploads/feedback'.$feedback->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/feedback', $filename);
            $feedback->image = $filename;
        }
        $feedback->update();
        return redirect('/feedback/index')->with('message', 'Отзыв успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect('/feedback/index')->with('message', 'Отзыв успешно удален');
    }
}
