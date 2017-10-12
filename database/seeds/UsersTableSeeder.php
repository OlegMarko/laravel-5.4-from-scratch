<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMarkdownMail as WelcomeMail;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(\App\User::class)->create();

        Mail::to($user)->send(new WelcomeMail($user));
    }
}
