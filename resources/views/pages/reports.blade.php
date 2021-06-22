@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-3">

        <div class="row">



            <div class="col-lg-12  my-4 col-md-12 col-sm-12">
               <div class="card">
                    <div class="card-body">
                        <h2>
                            Reports</h2>
                        <table class="table table-striped table-borderless">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Report/Feedback</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Close</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($reports as $report)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$report->name}}</td>
                                    <td>{{$report->email}}</td>
                                    <td>{{$report->report}}</td>
                                    <td><span class=" badge 
                                        @if(!($report->action_taken))
                                        badge-success">Active
                                        @else
                                        badge-secondary">Action Taken
                                        @endif
                                    </span></td>
                                    <td><a href="{{ route('blog', ['id' => $report->id]) }}"><i class="fa fa-close text-black"></i></a></td>
                                </tr>
                                @empty
                                <tr><td><h3>No Reports Found</h3></td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>






        </div>
    </div>
@endsection
