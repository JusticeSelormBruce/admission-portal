@extends('layouts.student')
@section('render')
    <div class="container pt-5">
        <div class="">
            @if(!$applicant == null)
                <div class=" pb-5 mx-auto lead">Applicant Guardian  Information</div>
                <div class="container w-50">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row py-3">
                        <div class="lead">
                            Completed
                        </div>
                    </div>
                </div>

            @else
                <form action="/Family-Gaurdian" method="post" class="pb-5">
                    <div class="card-body">
                        <div class="row form-group input-group-sm">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="fullname" required placeholder="Guardian Full Name" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="relationship" required placeholder="Relationship with Guardian" class="form-control">
                            </div>

                        </div>
                        <div class="row form-group input-group-sm">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="homeadd"  placeholder="Home Address" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="post_box"  placeholder="Post office Address" class="form-control">
                            </div>

                        </div>
                        <div class="row form-group input-group-sm">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="city"  placeholder="City" class="form-control" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="zipcode"  placeholder="Zip Code" class="form-control">
                            </div>

                        </div>
                        <div class="row form-group input-group-sm">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <select name="region" required class="form-control">
                                    <option value="">Select Region</option>
                                    @foreach($regions as $region)
                                        <option value="{{$region->name}}">{{$region->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <select name="country" required class="form-control">
                                    <option value=""> Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->en_short_name}}">{{$country->en_short_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group input-group-sm">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="tel" name="phone1"  placeholder=" Guardian Cell Phone" class="form-control" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="phone2"  placeholder="Other Phone" class="form-control">
                            </div>

                        </div>

                        <div class="row form-group input-group-sm">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="tel" name="company"  placeholder=" Company" class="form-control" >
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <input type="text" name="occupation"  placeholder="Occupation" class="form-control">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <button class="w-25 mx-auto btn btn-outline-dark btn-sm">Save</button>
                    </div>
                    @csrf
                </form>
                @endif

        </div>
    </div>

@endsection
