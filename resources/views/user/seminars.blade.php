@extends('layouts.user')
@section('page')


    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">


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
