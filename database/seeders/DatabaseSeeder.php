<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;
use App\Models\Subscribe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    protected $sub = ['imam.ikhlasul@gmail.com',
    'abimgatya@gmail.com',
    'imamjihad63@gmail.com'];

    protected $message = "ini broadcast imam";
    public function run()
    {
        foreach ($this->sub as $subs) {
            Subscribe::create([
                'user' => $subs,
            ]);
        }
        
        Message::create([
            'message' => $this->message,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
