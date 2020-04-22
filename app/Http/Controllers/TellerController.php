<?php

namespace App\Http\Controllers;

use App\Sold;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class TellerController extends Controller
{
    public function index()
    {
        return view('teller.index');
    }

    public function sellVoucherIndex()
    {
        return view('teller.sell_voucher');
    }

    public function sellVoucher(Request $request)
    {
        $tras_code = 'Edumis' . '' . rand(1010101010101, 9999999999999);
        $appid= rand(100000000000000, 999999999999999);
        $voucher = DB::table('vouchers')->orderBy('id', 'desc')->where('form_id', $request->form_id)->first();
        $data = ['customer_name' => $request->customer_name, 'phone' => $request->phone,
            'email' => $request->email, 'payment_type' => $request->payment_type,
            'form_id' => $request->form_id, 'teller_id' => Auth::user()->id,
            'transaction_code' => $tras_code, 'pin' => $voucher->pin, 'serial' => $voucher->serial];
        Sold::create($data);
        $applicant_credentials = ['name' => 'Applicant', 'email' => $voucher->serial, 'password' => Hash::make($voucher->pin),'app_id'=>$appid,'role_id'=> 3];
        User::create($applicant_credentials);
        DB::table('vouchers')->where('id', $voucher->id)->delete();
        $customer = DB::table('solds')->orderBy('id', 'desc')->first();
        Session::put('customer', $customer);
        return redirect('print-voucher');
    }

    public function printVoucher()
    {
        $customer = Session::get('customer');
        return view('teller.print_voucher', compact('customer'));
    }

    public function reprintReceiptIndex()
    {
        return view('teller.reprint_receipt');
    }

    public function reprintReceipt(Request $request)
    {
        $customer = DB::table('solds')->where('transaction_code', $request->id)->first();
        $customer = Session::put('customer', $customer);
        return redirect('print-voucher');
    }

    public function Reports()
    {
        return view('teller.reports');
    }
}
