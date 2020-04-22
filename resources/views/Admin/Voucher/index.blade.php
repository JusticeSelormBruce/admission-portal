@extends('layouts.Admin')
@section('render')
    <style>
        @media only screen and (min-width: 768px) {
            .card {
                height: 80vh !important;
            }
        }

        @media only screen and (max-width: 768px) {

            .card {
                height: auto !important;
            }

            .w-25{
                width: 90%!important;
            }
            .w-50{
                width: 90%!important;
            }
        }

        @media only screen and (min-width: 600px) {
            .card {
                height: 80vh !important;
            }
        }
        label{
            font-size: 15pt!important;
        }
    </style>
    <section>
        <div>
            <div class="container-fluid py-4">
                <div class="card">
                    <div class="card-header lead mx-4">
                        Generate Voucher
                    </div>
                    <div class="card-body">
                        <div class="row pt-5">
                            <div class="mx-auto w-50">
                                <form action="/generate-voucher" method="post">
                                    <div class="input-group-sm  form-group">
                                        <div>
                                            <label for="">Total number of Voucher to generate</label>
                                        </div>
                                        <input type="number" class="form-control" required name="total">

                                    </div>

                                    <div class="input-group-sm  form-group">
                                        <label for=""></label>
                                        <select name="form_id" required class="form-control">
                                            <option value="">Select Application Form</option>
                                            @foreach($forms as  $form)
                                                <option value="{{$form->id}}">{{ $form->name}} <span class="mx-3">({{$form->price}})</span>
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input-group-sm  form-group row">
                                     <button class="btn btn-sm btn-outline-dark  mx-auto w-25" type="submit">Generate</button>
                                    </div>
                                    @csrf
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
