<?php

namespace App\Http\Controllers;

use App\Bank;
use App\User;
use App\voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{


    public function  Index(){

        return view('Admin.index');
    }
    public function GenerateVoucherIndex()
    {
        return view('Admin.Voucher.index');
    }

    public function GenerateVoucher(Request $request)
    {
        $aca_year = DB::table('aca_year')->where('status', 1)->first();
        set_time_limit(0);
        for ($a = 1; $a <= $request->total; $a++) {
            $serial = rand(100000, 999999);
            $pin = rand(10000000000000, 99999999999999);
            voucher::create(['serial' => $serial, 'pin' => $pin, 'form_id' => $request->form_id, 'aca_year' => $aca_year->id]);
        }
        return back();
    }

    public function CreateBanksIndex()
    {
        return view('Admin.Banks.index');
    }

    public function CreateBanks(Request $request)
    {
        Bank::create(['name' => $request->name, 'branch' => $request->branch]);
        return back();
    }

    public function RegisterTellerIndex()
    {
        return view('auth.register');
    }





    protected function RegisterTeller()
    {
        $data = $this->validateTellerAccountDetails();
         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'bank_id' => $data['bank_id'],
            'role_id' => $data['role_id'],
        ]);

        return back();

    }
    public function AccountReset()
    {
        return view('Admin.reset_account');
    }

    public function ResetAccount(Request $request)
    {
        $defaultPassword = Hash::make('password');
        $user = DB::table('users')->where('id', $request->user_id)->update(['password' => $defaultPassword]);
        return back();

    }
    protected function validateTellerAccountDetails()
    {
        return request()->validate( [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'bank_id'=>[''],
            'role_id'=>['required','numeric']
        ]);
    }
}
