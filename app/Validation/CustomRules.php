<?php namespace App\Validation;

use App\Models\UsersModel;

class CustomRules
{
    public function validateUser(string $str = null, string $fields, array $data) : bool
    {
        $model = new UsersModel();

        $user = $model->where('email', $data['email'])
                    ->first();

        if(!$user) return false;

        return password_verify($data['password'], $user->password);
    }
}
