<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;

use App\Services\TelebirrService;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $telebirrService;

    public function __construct(TelebirrService $telebirrService)
    {
        $this->telebirrService = $telebirrService;
    }

    public function payWithTelebirr(Request $request)
    {
        $token = $this->telebirrService->applyFabricToken();

        // Handle the token and proceed with payment logic
        if ($token) {
            // For example, redirect to payment or save transaction details
            return redirect()->route('telebirr.paymentPage', ['token' => $token]);
        }

        return back()->with('error', 'Failed to initiate payment. Please try again.');
    }
}
