@extends('layouts.teller')
@section('render')
    <div class="row">
        <div class="mt-5"></div>
    </div>
    <div class="container-fluid">
        <table id="table_id" class="table table-responsive table-striped pt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Transaction ID</th>
                <th>Serial</th>
                <th>Form</th>
                <th>Payer Name</th>
                <th>Mobile</th>
                <th>Amount</th>
                <th>Issued By</th>
                <th>Bank</th>
                <th>Payment Type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($solds as $sold)
                <tr>
                    <td>{{$sold->id}}</td>
                    <td>{{$sold->created_at}}</td>
                    <td>{{$sold->transaction_code}}</td>
                    <td>{{$sold->serial}}</td>
                    <td>
                        @foreach($forms as $form)
                            @if($form->id == $sold->form_id)
                                {{$form->name}}
                            @endif

                        @endforeach
                    </td>
                    <td>     {{$sold->customer_name}}</td>
                    <td>   {{$sold->phone}}</td>
                    <td>
                        @foreach($forms as $form)
                            @if($form->id == $sold->form_id)
                                <span class="mr-1">GH₵</span>    {{$form->price}}
                            @endif

                        @endforeach
                    </td>
                    <td>  @foreach($users as $user)
                            @if($user->id == $sold->teller_id)
                                {{$user->name}}
                            @endif

                        @endforeach
                    </td>
                    <td>
                        @foreach($users as $user)
                            @if($user->id == $sold->teller_id)
                                @foreach($banks as $bank)
                                    @if($bank->id == $user->bank_id)
                                        {{$bank->name}} <br>({{$bank->branch}})
                                    @endif
                                @endforeach
                            @endif

                        @endforeach
                    </td>
                    <td>{{$sold->payment_type}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
