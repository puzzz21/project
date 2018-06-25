@extends('layouts.app')
@section('content')
    <a href="{{ url('forms/create') }}" class="btn btn-success" style="float:right;margin:1%;">+ Add</a>
<table id="myTable" class="display">
    <thead>
    <tr>
        <th rowspan="2">name</th>
        <th rowspan="2">gender</th>
        <th rowspan="2">phone</th>
        <th rowspan="2">email</th>
        <th rowspan="2">address</th>
        <th rowspan="2">nationality</th>
        <th rowspan="2">date of birth</th>
        <th colspan="3">Education Background</th>
    </tr>
    <tr>
        <th>Institute name</th>
        <th>Start year</th>
        <th>End year</th>
    </tr>
    </thead>
    <tbody>

    @foreach( $data as $d)
        <tr>
           <td> {{ $d[0] }} </td>

            <td> {{ $d[1] }} </td>

           <td> {{ $d[2] }} </td>

            <td> {{ $d[3] }} </td>

            <td> {{ $d[4] }} </td>

            <td> {{ $d[5] }} </td>

            <td> {{ $d[6] }} </td>

            <td> {{ $d[7] }} </td>

            <td> {{ $d[8] }} </td>

            <td> {{ $d[9] }} </td>
        </tr>
    @endforeach

    </tbody>
</table>
    @endsection
@section('script')
    <script>
        $('document').ready(function(){
            $('#myTable').DataTable();

        });
    </script>
@endsection