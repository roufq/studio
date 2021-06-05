<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\Admin;
        $administrator->name="Site Administrator";
        $administrator->email="admin@gmail.com";
        $administrator->password=\Hash::make("123456");
        $administrator->save();
        $this->command->info("Admin berhasil diinsert");
    }
}
