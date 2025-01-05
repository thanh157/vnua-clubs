<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class FetchProvincesData extends Command
{
    protected $signature = 'fetch:provinces';
    protected $description = 'Fetch provinces data from API and save to JSON file';

    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        $url = 'https://provinces.open-api.vn/api/?depth=3';
        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            $filePath = 'data/provinces.json';

            // Save data to JSON file with UTF-8 encoding
            Storage::disk('local')->put($filePath, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

            $this->info('Provinces data fetched and saved successfully.');
        } else {
            $this->error('Failed to fetch provinces data.');
        }
    }
}
