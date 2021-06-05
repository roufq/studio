<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->name="Site Userministrator";
        $administrator->email="user@gmail.com";
        $administrator->password=\Hash::make("123456");
        $administrator->save();
        $this->command->info("User berhasil diinsert");
    }
}
