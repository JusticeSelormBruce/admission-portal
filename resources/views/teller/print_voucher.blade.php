@extends('layouts.teller')
@section('render')
    <style>



        hr {
            margin: 0.5rem;
        }
        @media print {
            body * {
                visibility: hidden;
            }
            #section-to-print, #section-to-print * {
                visibility: visible;
            }
            #section-to-print {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>

    <div class="jumbotron">
        @if($customer ==null)
            <section>
                <div class="row">
                    <div class="container-fluid">
                        <div class="">
                            <div class="">
                                Sorry, No matching results found
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="font-weight-lighter">
                <div class="row">
                    <div class="container-fluid">
                        <div class="">
                            <div class="">
                                Print Voucher
                            </div>
                            <div class="mx-auto w-50">
                                <div class="" id="section-to-print">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6"><strong>Date</strong></div>
                                        <div class="col-lg-6 col-md-6">{{$customer->created_at}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6"><strong>Transaction ID</strong></div>
                                        <div class="col-lg-6 col-md-6">{{$customer->transaction_code}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6"><strong>Serial </strong></div>
                                        <div class="col-lg-6 col-md-6">{{$customer->serial}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6"><strong>Pin </strong></div>
                                        <div class="col-lg-6 col-md-6">{{$customer->pin}}</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6"><strong>Form </strong></div>
                                        <div class="col-lg-6 col-md-6">
                                            @foreach($forms as $form)
                                                @if($form->id == $customer->form_id)
                                                    <span class="font-weight-lighter text-capitalize">    {{$form->name}}</span>
                                                @endif

                                            @endforeach

                                        </div>
                                        <hr>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6"><strong>Customer Name </strong></div>
                                        <div class="col-lg-6 col-md-6 ">{{$customer->customer_name}}</div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6"><strong>Mobile </strong></div>
                                        <div class="col-lg-6 col-md-6 text-uppercase">{{$customer->phone}}</div>
                                    </div>
                                    <hr>

                                    <div class="row">

                                        <div class="col-lg-6 col-md-6"><strong>Amount </strong></div>
                                        <div class="col-lg-6 col-md-6">
                                            @foreach($forms as $form)
                                                @if($form->id == $customer->form_id)
                                                    <span class="mr-3">GH₵</span>    {{$form->price}}
                                                @endif

                                            @endforeach
                                            <hr>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6"><strong>Mobile </strong></div>
                                        <div class="col-lg-6 col-md-6 text-uppercase">{{$customer->phone}}</div>
                                    </div>
                                    <hr>
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6"><strong>Issued By</strong></div>
                                        <div class="col-lg-6 col-md-6">
                                            @foreach($users as $user)
                                                @if($user->id == $customer->teller_id)
                                                    {{$user->name}}
                                                @endif

                                            @endforeach

                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6"><strong>Bank</strong></div>
                                        <div class="col-lg-6 col-md-6">
                                            @foreach($users as $user)
                                                @if($user->id == $customer->teller_id)
                                                    @foreach($banks as $bank)
                                                        @if($bank->id == $user->bank_id)
                                                            {{$bank->name}} <span class="mx-2">({{$bank->branch}})</span>
                                                        @endif
                                                    @endforeach
                                                @endif

                                            @endforeach

                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6"><strong>Payment Tupe </strong></div>
                                        <div class="col-lg-6 col-md-6 text-uppercase">{{$customer->payment_type}}</div>
                                    </div>
                                    <hr>

                                </div>
                                <div class="row">
                                    <button class="btn btn-success btn-sm w-25 mx-auto" type="button"  onclick="window.print()">Print</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        @endif
    </div>


@endsection
