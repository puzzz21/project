@extends('layouts.app')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ $errors->first('phone') }}
        {{ $errors->first('name') }}
        {{ $errors->first('email') }}
        </div>
    @endif
    <h3>Enter information</h3>
    <form action="{{url('forms')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="true">
</div>
<div class="form-group">
    <label for="gender">Gender</label>
    <select name="gender">
        <option value=""></option>
        <option value="female">female</option>
        <option value="male">male</option>
        <option value="others">others</option>
    </select>
</div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone" required="true">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="true">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
    </div>
    <div class="form-group">
        <label for="gender">nationality</label>
        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Enter nationality">
    </div>
    <div class="form-group">
        <label for="date">date of birth</label>
        <input type="text" class="form-control" id="date" name="date" placeholder="Enter date">
    </div>
    <div style="background:#D3D3D3; padding: 1%;margin: 1%;">
    <label> <h5>education background</h5></label>
    <div class="row">
        <div class="col-md-5">
    <div class="form-group">
        <label for="institute_name">institute name</label>
        <input type="text" class="form-control" id="institute_name" name="institute_name" placeholder="Enter Intitute name">
    </div>
        </div>
        <div class="col-md-2">
    <div class="form-group">
        <label for="start_year"> start year </label>
        <select class="form-control" id="start_year" name="start_year" placeholder="Enter start year">
            <option value=""> </option>
            </select>
    </div>
        </div>
        <div class="col-md-2">
    <div class="form-group">
        <label for="end_year"> end year </label>
        <select class="form-control" id="end_year" name="end_year" placeholder="Enter end year">
            <option value=""> </option>
        </select>
    </div>
        </div>
    </div>
    </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@section('script')
    <script>
        for (i = new Date().getFullYear(); i > 1900; i--)
        {
            $('#start_year').append($('<option />').val(i).html(i));
            $('#end_year').append($('<option />').val(i).html(i));

        }
        $(document).ready(function() {
            $("#date").datepicker();
        });

    </script>
@endsection