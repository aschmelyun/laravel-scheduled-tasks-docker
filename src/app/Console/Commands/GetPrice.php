<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Price;

class GetPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'price:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieves the current price of Bitcoin from coindesk.com public API';

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
     * @return int
     */
    public function handle()
    {
        $response = Http::get('https://api.coindesk.com/v1/bpi/currentprice.json');

        $info = [
            'usd' => $response['bpi']['USD']['rate_float'],
            'eur' => $response['bpi']['EUR']['rate_float']
        ];

        $price = Price::create($info);

        $this->info(
            'Saved Bitcoin price: ' .
            $price->usd . ' USD, and ' .
            $price->eur . ' EUR'
        );

        return 0;
    }
}
