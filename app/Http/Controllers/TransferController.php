<?php

namespace App\Http\Controllers;

use App\Models\TransaksiTransfer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
{
    public function transfer(Request $request)
    {
        $request->validate([
            'to_user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:1000',
            'bank_pengirim' => 'required|string',
            'rekening_tujuan' => 'required|string',
            'atasnama_tujuan' => 'required|string',
        ]);

        // Generate unique code
        $uniqueCode = rand(100, 999);

        // Generate transaction ID (TF{YYMMDD}{counter 5 digit})
        $counter = DB::table('transaksi_transfers')->count() + 1;
        $transactionId = 'TF' . now()->format('ymd') . sprintf('%05d', $counter);

        // Simulate intermediary bank and account
        $bank_perantara = $request->bank_pengirim;
        $rekening_perantara = '12700283733'; // Dummy account number for intermediary

        // Total transfer including unique code
        $total_transfer = $request->amount + $uniqueCode;

        // Create transaction record
        $transfer = TransaksiTransfer::create([
            'transaction_id' => $transactionId,
            'from_user_id' => auth()->id(),
            'to_user_id' => $request->to_user_id,
            'amount' => $request->amount,
            'unique_code' => $uniqueCode,
        ]);

        return response()->json([
            'transaction_id' => $transactionId,
            'amount' => $request->amount,
            'unique_code' => $uniqueCode,
            'biaya_admin' => 0,
            'total_transfer' => $total_transfer,
            'bank_perantara' => $bank_perantara,
            'rekening_perantara' => $rekening_perantara,
            'berlaku_hingga' => now()->addDays(1)->toIso8601String(),
        ]);
    }
}
