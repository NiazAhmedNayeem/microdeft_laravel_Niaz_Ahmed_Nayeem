@extends('admin.master')

@section('title')
    Create Blog
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Create Blog Form</h4>
                        <p class="text-center text-success">{{Session::get('message')}}</p>
                        <form action="{{route('create.blog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Please fill up the form</label>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input12" class="col-sm-3 col-form-label">Blog Title</label>
                                <div class="col-sm-9">
                                    <input class="form-control summernote" placeholder="Blog title" type="text" id="horizontal-email-input12" name="title">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" type="text" rows="5" placeholder="Description" id="horizontal-password-input" name="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-password-input4" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" id="horizontal-password-input4" name="image"/>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input12" class="col-sm-3 col-form-label">Tag</label>
                                <div class="col-sm-9">
                                    <input class="form-control summernote" placeholder="Tag" type="text" id="horizontal-email-input12" name="tag">
                                </div>
                            </div>


                            <div class="form-group row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Create Blog</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


