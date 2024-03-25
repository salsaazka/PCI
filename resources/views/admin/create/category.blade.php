@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('category.store') }}" method="post"  enctype="multipart/form-data" class="mb-3 mt-4">
        @csrf

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Title</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    aria-describedby="publisher"
                    placeholder="Masukan title"
                />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Description</label
                >
                <input
                    type="textarea"
                    class="form-control"
                    name="desc"
                    aria-describedby="desc"
                    placeholder="Masukan Description"
                />
                </div>
            </div>
        </div>
        
        <button
        type="submit"
        class="btn text-white mb-5"
        style="background-color: #B46060"
        >
        Submit
        </button>
    </form>
    </div>
</div>
@endsection