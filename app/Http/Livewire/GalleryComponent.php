<?php

namespace App\Http\Livewire;

use App\Models\Gallery;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class GalleryComponent extends Component
{
    use WithFileUploads;
    public $image;
    public function saveImage()
    {
        $this->validate([
            'image' => 'image'
        ]);
        $image = new Gallery();
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('image_uploads', $imageName);
         $image->image = $imageName;
         $image->save();
         $this->image = "";
         session()->flash('message', 'Изображение загружено');
    }
    public function deleteImage($id)
    {
        $image = Gallery::find($id)->delete();
        session()->flash('message', 'Изображение удалено');
    }
    public function render()
    {
        $images = Gallery::all();
        return view('livewire.gallery-component', ['images' => $images]);
    }
}
