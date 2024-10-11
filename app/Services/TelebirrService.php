<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelebirrService
{
    protected $baseUrl;
    protected $fabricAppId;
    protected $appSecret;
    protected $merchantAppId;

    public function __construct()
    {
        $this->baseUrl = config('telebirr.BASE_URL');
        $this->fabricAppId = config('telebirr.fabricAppId');
        $this->appSecret = config('telebirr.appSecret');
        $this->merchantAppId = config('telebirr.merchantAppId');
    }

    public function applyFabricToken()
    {
        $response = Http::post("{$this->baseUrl}/applyFabricToken", [
            'fabricAppId' => $this->fabricAppId,
            'appSecret' => $this->appSecret,
            'merchantAppId' => $this->merchantAppId,
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null; // Handle error appropriately
    }

    // Additional methods for creating orders, checking out, etc.
}
