<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Modules\EmailTempletes\Database\Seeders\EmailTemplateTableSeeder;
use Illuminate\Database\Seeder;
use App\Modules\Settings\Database\Seeders\SettingTableSeeder;
use App\Modules\Users\Database\Seeders\UsersTableSeeder;
use App\Modules\Users\Database\Seeders\StateTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
      // $this->call(UsersTableSeeder::class);
     //  $this->call(SettingTableSeeder::class);
     //  $this->call(StateTableSeeder::class);
       $this->call(EmailTemplateTableSeeder::class);
    }
}
