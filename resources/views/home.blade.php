@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-3">

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card bg-secondary text-light">
                    <div class="card-body">
                        <span class="display-2">{{$blogcount}}</span>
                        <h2>Total Insights</h2>
                        <a href="{{ route('ablogs')}}" class="btn btn-light">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card bg-secondary text-light">
                    <div class="card-body">
                        <span class="display-2">{{$activeblogcount}}</span>
                        <h2>Active Insights</h2>
                        <a href="{{ route('ablogs')}}" class="btn btn-light">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card bg-secondary text-white">
                    <div class="card-body">
                        <span class="display-2">{{$subscribercount}}</span>
                        <h2>Subscribers</h2>
                        <a href="{{ route('subscriber')}}" class="btn btn-light">View All</a>
                    </div>
                </div>
            </div>




            <div class="col-lg-6  my-4 col-md-12 col-sm-12">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h2 class="text-white">All Insights</h2>
                        <table class="table table-light table-striped table-borderless">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($blogs as $blog)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$blog->title}}</td>
                                    <td><form method="POST"
                                        action="{{ route('changeBlogStatus', ['id' => $blog->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-sm 
                                            @if ($blog->active) 
                                                btn-success"><i class="fa fa-check"></i>
                                            @else
                                                bg-secondary"><i class="fa fa-times"></i> 
                                            @endif
                                        </button>
                                    </form></td>
                                    <td><a href="{{ route('edit', ['id' => $blog->id]) }}"><i class="fa fa-edit text-black"></i></a></td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                        <a class="btn btn-secondary" href="{{route('ablogs')}}">View All</a>
                    </div>
                </div>
            </div>




            <div class="col-lg-6  my-4 col-md-12 col-sm-12">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h2 class="text-white">Subscribers</h2>
                        <table class="table table-light table-striped table-borderless">
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
                        <a class="btn btn-secondary" href="{{ route('subscriber')}}">View All</a>
                    </div>
                </div>
            </div>







        </div>
    </div>
@endsection
