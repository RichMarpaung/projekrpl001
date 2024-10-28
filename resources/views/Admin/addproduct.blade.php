@extends('Admin.master')
@section('body')
<form action="POST" enctype="multipart/form-data">
@csrf
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Add Product</h4>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <form id="form-validation-2" class="form">
                        <div class="mb-2">
                            <label for="username" class="form-label">Nama</label>
                            <input class="form-control" type="text" id="name" placeholder="Enter Name" name="name">
                        </div>

                        <div class="mb-2">
                            <label for="email" class="form-label">Fuel</label>
                            <input class="form-control" type="text" id="fuel" placeholder="Enter Fuel" name="fuel">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" id="password" placeholder="Enter password">
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label">Confirm Password</label>
                            <input class="form-control" type="password" id="password2" placeholder="Enter password again">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="message">Deskripsi</label>
                            <textarea class="form-control" rows="5" id="message" name="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit form</button>
                    </form><!--end form-->
                </div><!--end card-body-->
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Custom File Upload</h4>
                        </div><!--end col-->
                    </div>  <!--end row-->
                </div><!--end card-header-->
                <div class="card-body pt-0">
                    <div class="d-grid">
                        <p class="text-muted">Upload your blog image here, Please click "Upload Image" Button.</p>
                        <div class="preview-box d-block justify-content-center rounded  border-dashed border-theme-color overflow-hidden p-3"></div>
                        <input type="file" id="input-file" name="image" accept="image/*" onchange={handleChange()} hidden />
                        <label class="btn-upload btn btn-primary mt-3" for="input-file">Upload Image</label>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!--end col-->

        <!--end col-->
    </div><!--end row-->
</div>

</form>
@endsection
