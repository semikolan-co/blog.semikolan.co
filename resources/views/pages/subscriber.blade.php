@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-3">

        <div class="row">
           
            <div class="col-lg-12  my-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Subsribers</h2>
                        <table class="table table-striped table-borderless">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$subscriber->email}}</td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>







        </div>
    </div>
@endsection
