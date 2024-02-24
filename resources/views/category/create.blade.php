@extends('layout/app-web-layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>CREATE CATEGORIES</h4>
                        <a href="{{ route('category') }}" class="btn btn-primary float-end">BACK TO INDEX</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Name of the Category">
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="is_Active">Is Active</label>
                                <input type="checkbox" name="is_active">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
