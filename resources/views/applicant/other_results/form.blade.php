

<div class="row py-2">
    <div class="col-lg-6 col-md-12 col-sm-12  input-group-sm">
        <label for="">Examination Month</label>
        <select name="month" id="" class="form-control" required>
            <option value="">Select Examination Month</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 input-group-sm">
        <label for="">Examination Year</label>
        <input type="number" name="year" class="form-control">
    </div>

</div>

<div class=" input-group-sm">
    <input type="text" name="examindex" required class="form-control" placeholder="Exams Index Number">
</div>
<div class="row py-2">
    <div class="col-lg-6 col-md-12 col-sm-12 input-group-sm">
        <select name="subject" id="" class="form-control" required>
            <option value="">Select Subject</option>
            @if($subject == null)
                <option value="">Select Subject</option>
            @else
                @foreach($subject as $list)
                    <option value="{{$list->subject}}">{{$list->subject}}</option>
                @endforeach
            @endif

        </select>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 input-group-sm">
        <input type="text" name="qualification" class="form-control" placeholder="grade">
    </div>

</div>