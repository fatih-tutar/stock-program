<?php

namespace App\Traits;

use Illuminate\Support\Arr;

/*
| Filtre requestinde sadece bu 6 ana kriter olmasi gerek.
| Her defasında yazmayalım diye böyle bir trait oluşturduk.
*/
trait HasFilterRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'filter'=>['nullable'],
            'sort'=>['string'],
            'include'=>['array'],
            'fields'=>['string'],
            'page'=>['integer'],
            'limit'=>['integer']
        ];
    }

    public function validated($key = null, $default = null)
    {
        return Arr::only(Parent::validated($key, $default), ["filter","sort","include","fields","page","limit"]);
    }
}
