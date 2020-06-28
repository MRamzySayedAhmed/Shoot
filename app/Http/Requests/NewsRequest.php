<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
            [
                'language' => 'required',
                'title' => 'required|max:100',
                'description' => 'required|max:500',
                'writer' => 'required|max:100',
                'image' => 'required|mimes:png,jpg,jpeg,gif|dimensions:min_width=100,min_height=100,
                            max_width=1000,max_height=1000|image|max:4096'
            ];
    }

    public function messages()
    {
        return
            [
                'language.required' => 'The News Language is Required',
                'title.required' => 'The News Title is Required',
                'title.max' => 'The News Title Must Not Exceed 100 Characters',
                'description.required' => 'The News Description is Required',
                'description.max' => 'The News Description Must Not Exceed 100 Characters',
                'writer.required' => 'The News Writer is Required',
                'writer.max' => 'The News Writer Must Not Exceed 100 Characters',
                'image.required' =>  'The News Image Can Not Be Empty',
                'image.mimes' =>  'The News Image Must Have an Extension Of png, jpg ,jpeg & gif Only',
                'image.dimensions' => 'The Uploaded Image Must Be Of Width Between 100px & 1000px and Must Be Of Height Between 100px & 1000px',
                'image.image' => 'The Uploaded File Must Be an Image',
                'image.size' => 'The News Image Size Can Not Exceed 4MB'
            ];
    }
}
