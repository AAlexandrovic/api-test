<?php

namespace App\Console\Commands;

use App\Models\rndValue;
use Illuminate\Console\Command;

class PostValue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'value:post {user?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Post rnd value in table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        $create_value = rndValue::create(['value' => mt_rand(1,100)]);
//

        $this->info('The command was successful!');
    }
}
