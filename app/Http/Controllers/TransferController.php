<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('transfer/transfer');
  }

  public function tr()
  {
      return view('transfer/tr');
  }

  public function rq()
  {
      return view('transfer/rq');
  }
}
