@extends('layouts.admin')
@section('page')


    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">


                <br>
                <table class="table">
                    <thead class="thead-dark">

                    <tr>

                        <th scope="col">Application Id</th>
                        <th scope="col">Applied for</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User Nid</th>
                        <th scope="col">Education</th>
                        <th scope="col">Experience</th>
                        <th scope="col">Personal Details</th>
                        <th scope="col">User email</th>
                        <th scope="col">Applied at</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($apps as $app)



                            <tr>

                                <td>{{ $app->id }}</td>
                                <td>{{ $app->applyfor }}</td>
                                <td>{{ $app->name }}</td>
                                <td>{{ $app->nid }}</td>
                                <td>{{ $app->education }}</td>
                                <td>{{ $app->experience }}</td>
                                <td>{{ $app->pdetails }}</td>
                                <td>{{ $app->extra }}</td>
                                <td>{{ $app->created_at }}</td>

                            </tr>


                    @endforeach
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
