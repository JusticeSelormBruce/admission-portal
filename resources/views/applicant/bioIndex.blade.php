@extends('layouts.student')
@section('render')
    <style>
        .avatar {
            width: 150px !important;
            height: 150px !important;
        }
    </style>
    <div class="container bg-light pt-4">
        <div class="row pb-5">
            <div class=" w-100">
                @if(!$applicant == null)
                    <div class="pb-5 mx-auto lead mx-3">Applicant Personal Information</div>
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
                    <div class="mx-3">Applicant Personal Information</div>
                    <form action="/saveApplicantBio" method="post" class="pb-5" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <select name="title" class="form-control" required>
                                        <option value="">Select Title</option>
                                        <option value="Mr.">Mr</option>
                                        <option value="Mrs.">Mrs</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="lname" required placeholder="Surname" class="form-control">
                                </div>

                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="fname" required placeholder="First Name"
                                           class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="mname" placeholder="Middle Name" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <select name="sex" class="form-control" required>
                                        <option value="">Select Sex</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="date" name="dob" class="form-control" required>
                                    <small id="emailHelp" class="form-text text-muted">Date of Birth</small>
                                </div>
                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="email" placeholder="Email" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="homephone" placeholder="Home Phone" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="cellphone" placeholder="Cell Phone" class="form-control"
                                           required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="fax" placeholder="Fax" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="homeadd" placeholder="Home Address" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="post_address" placeholder="Postal Address"
                                           class="form-control">
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
                                    <input type="text" name="city" placeholder="City" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="ssnit" placeholder="SSNIT" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="place_of_birth" placeholder="Place of Birth"
                                           class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="hometown" placeholder="Home Town" class="form-control"
                                           required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <select name="disability" class="form-control" required>
                                        <option value="">Disability</option>
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="religion" placeholder="Religion" class="form-control"
                                           required>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="denomination" placeholder="Denomination"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <select name="marital_status" class="form-control" required>
                                        <option value="">Marital Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorce">Divorce</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="no_children" placeholder="No of Children"
                                           class="form-control"
                                           required>
                                </div>

                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <select name="country" required class="form-control">
                                        <option value=""> Country</option>
                                        @foreach($countries as $country)
                                            <option
                                                value="{{$country->en_short_name}}">{{$country->en_short_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <select name="nationality" required class="form-control">
                                        <option value=""> Nationality</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->nationality}}">{{$country->nationality}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group input-group-sm">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <input type="text" name="langSpoken" placeholder="Language's  Spoken"
                                           class="form-control" required>
                                    <small id="emailHelp" class="form-text text-muted">use comma to separate multiple
                                        languages</small>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <label for="" class="lead"><input type="file" name="image" class="form-control"
                                                                      required
                                                                      onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"
                                        > Click to Upload Image</label>
                                </div>
                                <div>
                                    {{$errors->first('image')}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <img class="avatar rounded" id="blah"/>
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
    </div>

@endsection
