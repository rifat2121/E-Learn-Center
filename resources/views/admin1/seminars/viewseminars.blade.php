@extends('layouts.admin')
@section('page')


    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">

                <a href="/addseminar" class="btn btn-primary">Add Seminar</a><br>
                <br>
                <table class="table">
                    <thead class="thead-dark">

                    <tr>
                        <th scope="col">Topic</th>
                        <th scope="col">Venue</th>
                        <th scope="col">Seats</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Hosts</th>
                        <th scope="col">Fee</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($seminar as $seminar)
                    <tr>

                        <td>{{ $seminar->topic }}</td>
                        <td>{{ $seminar->venue }}</td>
                        <td>{{ $seminar->seats }}</td>
                        <td>{{ $seminar->guests }}</td>
                        <td>{{ $seminar->hosts }}</td>
                        <td>{{ $seminar->fee }}</td>
                        <td>{{ date('d-m-Y', strtotime($seminar->date))}}</td>
                        <th >{{ $seminar->time }}</th>

                       <td> <a href="{{ URL::to('/editseminar/' . $seminar->id) }}" class="btn btn-outline-primary" >Update</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
