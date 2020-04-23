<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidTask implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $text=$value;
        if(!empty($text)){
            $s=count(explode(" ",$text));
            if($s>=2)
                return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Any task must consist of 2 or more words';
    }
}
