<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ProfileImageValidation implements Rule
{
    protected $table;
    protected $column;

    public function __construct($table, $column)
    {
        $this->table = $table;
        $this->column = $column;
    }

    public function passes($attribute, $value)
    {
        $exists = DB::table($this->table)
            ->where($this->column, $value)
            ->exists();

        return !$exists;
    }

    public function message()
    {
        return 'The :attribute already exists in the database.';
    }
}
