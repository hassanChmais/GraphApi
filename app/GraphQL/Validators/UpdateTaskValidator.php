<?php

namespace App\GraphQL\Validators;

use Nuwave\Lighthouse\Validation\Validator;

class UpdateTaskValidator extends Validator
{
    /**
     * Return the validation rules.
     *
     * @return array<string, array<mixed>>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['int' , 'required'],
            'name' => ['string' , 'min:3'],
        ];
    }
    public function messages(): array
{
    return [
        'name' => 'The chosen name is shorter than 3 !y',
    ];
}
}
