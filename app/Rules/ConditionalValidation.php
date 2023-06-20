<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use DB;

class ConditionalValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    private $table;
    private $column;
    public function __construct($table, $column)
    {
        //
        $this->table = $table;
        $this->column = $column;
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
        dd($attribute);
        //
        $count = DB::table($this->table)
            ->where($this->column, $value)
            ->count();
        return $count > 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
