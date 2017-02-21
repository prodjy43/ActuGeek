<?php

use Illuminate\Database\Seeder;
use App\Editor;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('editors')->delete();
    Editor::create(array(
        'name'     => 'Ivan',
        'forname'  => 'Biedermann',
        'pseudo' => 'prodjy',
        'mail'    => 'prodjy43@gmail.com',
        'password' => Hash::make('Plksa1567MN123!'),
    ));
}

}