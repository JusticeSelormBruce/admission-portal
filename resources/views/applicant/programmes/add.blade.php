
<div class="row">
    <div class="ml-auto mx-5 mr-5">
        <button type="button" class="btn text-success btn-sm mx-5" data-toggle="modal"
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
                        <form action="/update-programmes" method="post">
                            @method('PATCH')
                            <div class="container">
                                <div class="row">
                                    <div class="mx-auto w-50">
                                        <div class="py-2">
                                            <label for="first_choice">First Choice</label>
                                            <select name="first_choice" class="form-control" required>

                                                @foreach($programmes as $list)
                                                    <option value="{{$list->id}}" @if($list->id == $program->first_choice ) selected @endif>{{$list->long_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="py-5">
                                            <label for="second_choice">Second Choice</label>
                                            <select name="second_choice" class="form-control" required>

                                                @foreach($programmes as $list)
                                                    <option value="{{$list->id}}" @if($list->id == $program->second_choice ) selected @endif>{{$list->long_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mx-auto"><button class="btn btn-primary btn-sm" type="submit">Save Changes </button></div>
                            </div>
                            @csrf
                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
