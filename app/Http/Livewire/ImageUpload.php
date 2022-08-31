<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\TemporaryUploadedFile;
use Illuminate\Support\Facades\Storage;

class ImageUpload extends Component
{
    use WithFileUploads;

    /**
     * @var \Livewire\TemporaryUploadedFile[]
     */
    public $image = [];

    public function save() 
    {
        $this->validate([
            'image.*' => 'required|image|max:1024', // 1Mb max
        ]);

        foreach ($this->image as $image) {
            $image->store('public/img');
            //$image->storeAs('public/img', $image->getClientOriginalName());
        }

        session()->flash('message', 'Image(s) uploaded.');
    }

    public function render()
    {
        return view('livewire.image-upload', [
            'images' => collect(Storage::files('public/img'))
                ->filter(function($file) {
                    return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['png', 'jpg', 'jpeg', 'gif', 'webp']);
                })
                ->map(function($file) {
                    return Storage::url($file);
                })
        ]);
    }
}
