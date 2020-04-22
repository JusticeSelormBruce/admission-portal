<div class="container">
    <div class="row">
        <div class="mx-auto w-50">
            <div class="py-2">
                <label for="first_choice">First Choice</label>
                <select name="first_choice" class="form-control" required>
                    <option value="">Select First Programme of choice</option>
                    @foreach($programmes as $list)
                        <option value="{{$list->id}}">{{$list->long_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="py-5">
                <label for="second_choice">Second Choice</label>
                <select name="second_choice" class="form-control" required>
                    <option value="">Select Second Programme of choice</option>
                    @foreach($programmes as $list)
                        <option value="{{$list->id}}">{{$list->long_name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>


</div>


