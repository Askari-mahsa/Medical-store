<?php
namespace App\Http\Requests\Currency;
use Illuminate\Foundation\Http\FormRequest;

class StoreCurrencyRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }

    public function rules():array
    {
        return [

        ];
    }
    public function messages():array
    {
        return [

        ];
    }
}
