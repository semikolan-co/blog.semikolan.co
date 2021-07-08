@extends('layouts.admin')

@section('content')

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12  my-4 col-md-12 col-sm-12">
                <button type="button" class="btn btn-dark my-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Sub category
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ route('addSubcategory') }}" method="POST">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Category Name</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <select name="category" required class="form-select form-select-lg"
                                        aria-label=".form-select-lg example">
                                        <option selected disabled>Sub Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="text" name="name" class="form-control" placeholder="Web Development">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Sub category</button>
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
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($subcategories as $category)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $category->sname }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <form method="POST"
                                                action="{{ route('changeSubcategoryStatus', ['id' => $category->id]) }}">
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
