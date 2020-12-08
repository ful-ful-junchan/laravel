<?php

namespace Database\Seeders;

use App\Models\UserAccountModel;
use Illuminate\Database\Seeder;
use Carbon\Factory;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理者アカウントを生成
        UserAccountModel::factory()->count(1)->create();
    }
}
