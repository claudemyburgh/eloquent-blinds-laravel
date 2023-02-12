<?php

namespace App\Http\Livewire;

use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Uploader extends Component
{

    use WithFileUploads;

    public $files = [];


    public function rules()
    {
        return [
            "files.*" => ['required', 'file', 'max:10000', 'mimes:png,jpg']
        ];
    }


    protected function validationAttributes()
    {
        return [
            'files.*' => 'files'
        ];
    }


    public function updatedFiles($files)
    {
        $this->validateOnly('files.*');

        collect($files)->each(function ($file) {
            File::create([
                'file_name' => $name = $file->getClientOriginalName(),
                'file_path' => $file->storeAs('files', $name)
            ]);
        });


    }


    public function render()
    {
        return view('livewire.uploader');
    }
}
