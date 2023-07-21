<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class UploadCount implements Rule
{
    
    public function passes($attribute, $value)
    {
    
        return (count($value) <= 5) ? true : false;
    }
    
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if ( \Config::get('app.locale') == 'en') {
            return 'You cannot upload more than 5 images';
        } else {
            return 'Non puoi caricare piu di 5 immagini';
        }
    
    }
}
