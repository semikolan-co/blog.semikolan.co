@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12  my-4 col-md-12 col-sm-12">
                <button type="button" class="btn btn-dark my-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add category
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{route("addCategory")}}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Category Name</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="name" class="form-control" placeholder="Web Development">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2>All Categories</h2>
                        <table class="table table-striped table-borderless">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <form method="POST"
                                                action="{{ route('changeCategoryStatus', ['id' => $category->id]) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-sm 
                                                            @if ($category->active) btn-success"><i class="fa
                                                    fa-check"></i>
                                                @else
                                                    bg-secondary"><i class="fa
                                                    fa-times"></i> @endif
                                                </button>
                                            </form>
                                        </td>
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
