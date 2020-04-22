<div class="row">
    <div class="ml-auto mx-5">
        <button type="button" class="btn text-danger btn-sm" data-toggle="modal"
                data-target="#exampleModaldelete">
            Edit
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModaldelete" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabeld" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabeld"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/saveApplicantBio" method="post" class="pb-5" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <select name="title" class="form-control" required>
                                            @if($applicant->title === "Mr.")
                                                <option value="Mr.">Mr</option>
                                                <option value="Mrs.">Mrs</option>
                                            @else
                                                <option value="Mrs.">Mrs</option>
                                                <option value="Mr.">Mr</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="lname" required placeholder="Surname"
                                               value="{{$applicant->surname}}"
                                               class="form-control">
                                    </div>

                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="fname" required placeholder="First Name"
                                               class="form-control" value="{{$applicant->fname}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="mname" placeholder="Middle Name" class="form-control"
                                               value="{{$applicant->mname}}">
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <select name="sex" class="form-control" required>
                                            @if($applicant->sex === "Male")
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            @else
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>

                                            @endif

                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="date" name="dob" class="form-control" required
                                               value="{{$applicant->dob}}">
                                        <small id="emailHelp" class="form-text text-muted">Date of Birth</small>
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="email" placeholder="Email" class="form-control"
                                               value="{{$applicant->email}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="homephone" placeholder="Home Phone"
                                               valsue="{{$applicant->homephone}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="cellphone" placeholder="Cell Phone"
                                               value="{{$applicant->cellphone}}"
                                               class="form-control"
                                               required>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="fax" placeholder="Fax" class="form-control"
                                               value="{{$applicant->fax}}">
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="homeadd" placeholder="Home Address"
                                               class="form-control" value="{{$applicant->homeadd}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="post_address" placeholder="Postal Address"
                                               value="{{$applicant->post_address}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <select name="region" required class="form-control">
                                            @foreach($regions as $region)
                                                <option value="{{$region->name}}"
                                                        @if($applicant->region == $region->name) selected @endif>{{$region->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="city" placeholder="City" class="form-control"
                                               value="{{$applicant->city}}">
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="ssnit" placeholder="SSNIT" class="form-control"
                                               value="{{$applicant->ssnit}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="place_of_birth" placeholder="Place of Birth"
                                               value="{{$applicant->place_of_birth}}"
                                               class="form-control" required>
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="hometown" placeholder="Home Town" class="form-control"
                                               value="{{$applicant->hometown}}"
                                               required>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <select name="disability" class="form-control" required>
                                            @if($applicant->disability === "No")
                                                <option value="No">No</option>
                                                <option value="Yes">Yes</option>
                                            @else
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>

                                            @endif

                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="religion" placeholder="Religion" class="form-control"
                                               value="{{$applicant->religion}}"
                                               required>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="denomination" placeholder="Denomination"
                                               value="{{$applicant->denomination}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <select name="marital_status" class="form-control" required>
                                            @if($applicant->marital_status === "Single")
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorce">Divorce</option>
                                            @elseif($applicant->marital_status === "Married")
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                                <option value="Divorce">Divorce</option>
                                            @else
                                                <option value="Divorce">Divorce</option>
                                                <option value="Married">Married</option>
                                                <option value="Single">Single</option>
                                            @endif

                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="no_children" placeholder="No of Children"
                                               value="{{$applicant->no_children}}"
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
                                                        value="{{$country->en_short_name}}"
                                                        @if($applicant->country === $country->en_short_name) selected @endif>{{$country->en_short_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <select name="nationality" required class="form-control">
                                            <option value=""> Nationality</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->nationality}}"
                                                        @if($applicant->nationality === $country->nationality) selected @endif>{{$country->nationality}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="langSpoken" placeholder="Language's  Spoken"
                                               value="{{$applicant->langSpoken}}"
                                               class="form-control" required>
                                        <small id="emailHelp" class="form-text text-muted">use comma to separate
                                            multiple
                                            languages
                                        </small>
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
                                        <img src="{{asset('storage/'.$applicant->image)}}" class="avatar rounded" width="150" id="blah"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button class="w-25 mx-auto btn btn-success btn-sm">Same Changes</button>
                            </div>
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

