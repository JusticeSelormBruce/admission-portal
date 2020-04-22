

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

                        <form action="/update-family-gaurdian" method="post" class="pb-5">
                            @method('PATCH')
                            <div class="card-body">
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="fullname" required placeholder="Guardian Full Name" class="form-control" value="{{$family->fullname}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="relationship" required placeholder="Relationship with Guardian" class="form-control" value="{{$family->relationship}}">
                                    </div>

                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="homeadd"  placeholder="Home Address" class="form-control" value="{{$family->homeadd}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="post_box"  placeholder="Post office Address" class="form-control" value="{{$family->post_box}}">
                                    </div>

                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="city"  placeholder="City" class="form-control" required value="{{$family->city}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="zipcode"  placeholder="Zip Code" class="form-control" value="{{$family->zipcode}}">
                                    </div>

                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <select name="region" required class="form-control">

                                            @foreach($regions as $region)
                                                <option value="{{$region->name}}" @if($region->name === $family->region) selected @endif>{{$region->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <select name="country" required class="form-control">

                                            @foreach($countries as $country)
                                                <option value="{{$country->en_short_name}}" @if($country->en_short_name === $family->country) selected @endif>{{$country->en_short_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="tel" name="phone1"  placeholder=" Guardian Cell Phone" class="form-control" required value="{{$family->phone1}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="phone2"  placeholder="Other Phone" class="form-control" value="{{$family->phone2}}">
                                    </div>

                                </div>

                                <div class="row form-group input-group-sm">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="tel" name="company"  placeholder=" Company" class="form-control" value="{{$family->company}}">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="occupation"  placeholder="Occupation" class="form-control" value="{{$family->occupation}}">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <button class="w-25 mx-auto btn btn-success btn-sm">Save Changes</button>
                            </div>
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

