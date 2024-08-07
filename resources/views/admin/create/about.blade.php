@extends('admin.template.index')

@section('content-admin')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Create About</h5>
            <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data" class="mb-3 mt-4">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Upload Image</label>
                    <input type="file" name="logo" class="form-control dropify" id="inputGroupFile02">
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" aria-describedby="publisher"
                                placeholder="Masukan Address" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">No Telp</label>
                            <input type="number" class="form-control" name="no_telp" aria-describedby="no_telp"
                                placeholder="Masukan No Telp" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" aria-describedby="publisher"
                                placeholder="Masukan email" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <input type="textarea" class="form-control" name="desc" aria-describedby="desc"
                                placeholder="Masukan Description" />
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end align-items-center gap-2">
                    <a href="{{ route('about.index') }}" class="btn btn-danger text-white mb-5">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-primary text-white mb-5">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script-admin')
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>
@endsection
