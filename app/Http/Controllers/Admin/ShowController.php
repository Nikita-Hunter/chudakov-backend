<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowFormRequest;
use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ShowController extends Controller
{
    public $title;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Начное шоу";
        $shows = Show::paginate(5);
        return view('admin.show.index', compact('title', 'shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Создать новое шоу";
        return view('admin.show.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShowFormRequest $request)
    {
        $data = $request->validated();
        $show = new Show();
        $show->name = $data['name'];
        $show->long_text = $data['long_text'];
        $show->small_text = $data['small_text'];
        $show->price = $data['price'];
        $show->people = $data['people'];
        if($request->hasFile('banner')){
            $file = $request->file('banner');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/show', $filename);
            $show->banner = $filename;
        }
        $show->save();
        return redirect('/show/index')->with('message', 'Шоу успешно добавлено');
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
        $title = "Редактировать шоу";
        $show = Show::find($id);
        return view('admin.show.edit', compact('title', 'show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShowFormRequest $request, $id)
    {
        $data = $request->validated();
        $show = Show::find($id);
        $show->name = $data['name'];
        $show->long_text = $data['long_text'];
        $show->small_text = $data['small_text'];
        $show->price = $data['price'];
        $show->people = $data['people'];
        if($request->hasFile('banner'))
        {
            $destination = 'uploads/show'.$show->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('banner');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/show', $filename);
            $show->image = $filename;
        }
        $show->update();
        return redirect('/show/index')->with('message', 'Шоу успешно обновлено');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Show::find($id);
        $show->delete();
        return redirect('/show/index')->with('message', 'Шоу успешно удалено');
    }
}
