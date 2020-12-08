<?php

namespace Database\Factories;

use App\Models\UserAccountModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAccountModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAccountModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $model = new UserAccountModel();
        return [
            'account_name' => '管理者',
            'email' => 'root@balance.local.jp',
            'password' => $model->generatePasswordHash('root'),
            'expire_date' => date('2030-12-31 23:59:59'),
            'role' => UserAccountModel::ROLE_ROOT,
        ];
    }
}
