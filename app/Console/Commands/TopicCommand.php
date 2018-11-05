<?php

namespace App\Console\Commands;

use App\Models\Topic;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Testing\MimeType;

class TopicCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a record Topic';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Topic::where([
            ['status', '=', 1],
            ['set_time', '=', 1],
            ['select_time', '=', Carbon::now()->hour . ':' . Carbon::now()->minute],
        ])->each(function ($item) {
            $item->delete();
        });
    }
}
