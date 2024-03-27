<?php

namespace App\Http\Controllers;

use App\Models\domesticVendorPayments;
use App\Models\overseasVendorPayment;
use Illuminate\Http\Request;
use App\Models\cash;

class ControlMonitoringController extends Controller
{
    // public function index()
    // {
    //     if (Auth()->User()->roles == 'superadmin'|| (Auth()->User()->roles == 'adminControlMonitoring')){
    //         $cash = cash::all();
    //         $overseasVendorPayment = overseasVendorPayment::all();
    //         $domesticVendorPayments = domesticVendorPayments::all();
    //         return view('control.costMonitoring.index', compact('cash','domesticVendorPayments','overseasVendorPayment'));
    //     }else{
    //         return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
    //     }
    // } 

    public function index()
    {
        if (Auth()->User()->roles == 'superadmin'|| (Auth()->User()->roles == 'adminControlMonitoring')){
            return view('control.costMonitoring.index');
        }else{
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    } 
}
