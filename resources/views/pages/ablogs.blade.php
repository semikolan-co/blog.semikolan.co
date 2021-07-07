@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-3">

        <div class="row">



            <div class="col-lg-12  my-4 col-md-12 col-sm-12">
                <a class="btn btn-dark my-1" href="{{ route('addblog') }}">Add a Blog</a>
                <div class="card">
                    <div class="card-body">
                        <h2>All Blogs</h2>
                        <table class="table table-striped table-borderless">
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
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $blog->title }}</td>
                                        <td>
                                            <form method="POST"
                                                action="{{ route('changeBlogStatus', ['id' => $blog->id]) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-sm 
                                                    @if ($blog->active) 
                                                        btn-success"><i class="fa fa-check"></i>
                                                    @else
                                                        bg-secondary"><i class="fa fa-times"></i> 
                                                    @endif
                                                </button>
                                            </form>
                                        </td>
                                        <td><a href="{{ route('edit', ['id' => $blog->id]) }}"><i
                                                    class="fa fa-edit text-black"></i></a></td>
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
