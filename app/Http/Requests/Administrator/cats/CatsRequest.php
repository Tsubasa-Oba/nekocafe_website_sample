<?php

namespace App\Http\Requests\Administrator\cats;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CatsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           
        ];
    }

    public function id(): int
    {
        return (int) $this->route('id');
    }

    public function name()
    {
        return $this->input('name');
    }

    public function birthday()
    {
        return $this->input('birthday');
    }

    public function Instagram_URL()
    {
        if (is_null($this->input('Instagram_URL'))){
            return '';
        }
        return $this->input('Instagram_URL');
    }

    public function photo_URL()
    {
        return $this->file('photo_URL');
    }

}
