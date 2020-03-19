<?php

namespace App\Console\Commands;

use App\Covid;
use App\Cases;
use App\Models\Donation;
use App\Models\DonationOng;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class Save extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'save data';

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
        $this->alert('Starting script.');

        $endpoint = "https://www.bing.com/covid/data";
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET',  $endpoint);

        $result = str_replace('a:', '', $response->getBody()->getContents());
        $result = json_decode($result);


        if (!$result) {
            $this->alert('Error.');
            return false;
        }

        $covid = new Covid;
        $covid->total_confirmed = $result->totalConfirmed;
        $covid->total_deaths    = $result->totalDeaths;
        $covid->total_recovered = $result->totalRecovered;
        $covid->save();

        foreach ($result->areas as $value)
        {
            $cases = new Cases;
            $cases->total_confirmed = $value->totalConfirmed;
            $cases->total_deaths    = $value->totalDeaths;
            $cases->total_recovered = $value->totalRecovered;
            $cases->name            = $value->id;
            $cases->last_updated    = $value->lastUpdated;
            $cases->display_name    = $value->displayName;
            $cases->lat             = $value->lat;
            $cases->long            = $value->long;
            $cases->parent_name     = $value->parentId;
            $cases->save();
        }

        $this->alert('Finish.');
    }
}
