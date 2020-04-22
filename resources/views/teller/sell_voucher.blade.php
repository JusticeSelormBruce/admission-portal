@extends('layouts.teller')
@section('render')

    <section class="pt-4">
        <div class="row">
            <div class="container-fluid">
                <div class="">
                    <div class="card-header mx-auto bg-info w-75 mt-3">
                        <span class="justify-content-center">
                            Please fill the details specified on the form below and click "<strong>Sell Now</strong>"
                            button
                            to sell a voucher. All fields mark with asterisks <span class="text-danger mx-2">*</span>are
                            required
                            for a sell of a voucher
                        </span>

                    </div>
                    <div class="mx-auto w-75">
                        <div class="card-body">
                            <form action="/sell-voucher" method="post">
                                <div class="form-group input-group-sm">
                                    <label for="">Customers Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required name="customer_name">
                                </div>
                                <div class="form-group input-group-sm">
                                    <label for="">Customers Phone<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" required name="phone">
                                </div>
                                <div class="form-group input-group-sm">
                                    <label for="">Customers E-mail</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group input-group-sm">
                                    <label for="">Payment Type <span class="text-danger">*</span></label>
                                    <select name="payment_type" class="form-control" required>
                                        <option value="">Select Payment Type</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                                <div class="form-group input-group-sm">
                                    <label for="">Forms <span class="text-danger">*</span></label>
                                    <select name="form_id" class="form-control" required>
                                        <option value="">Select Form Type</option>
                                        @foreach($forms as $form)
                                            <option value="{{$form->id}}">{{$form->name}} <span class="mx-2">({{$form->price}})</span></option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row input-group-sm">
                                    <button class="btn btn-success btn-sm w-25 mx-auto" type="submit">Sell Now
                                    </button>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
