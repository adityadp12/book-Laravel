<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookRequest extends Request {

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
		return [
			'image' => "required|mimes:jpeg,bmp,png",
			'isbn' => 'required|min:3',
            'publisher' => 'required'
		];
	}
	
	public function messages()
    {
        return [
            'image.required' => 'Pick a file to upload.',
            'image.mimes' => 'Not a valid file type. Valid types include jpeg, bmp and png.'
        ];
    }

}
