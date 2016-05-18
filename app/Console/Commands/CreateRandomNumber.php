<?php

namespace Fotonica\Console\Commands;

use Fotonica\Events\CreateNumberEvent;
use Fotonica\Number;
use Illuminate\Console\Command;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CreateRandomNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'number:random';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a random number';
    
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $number = Number::create(['value' => rand(0, 10000)]);
        event(new CreateNumberEvent($number));
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        // TODO: Implement broadcastOn() method.
    }
}
