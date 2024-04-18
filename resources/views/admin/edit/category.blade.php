@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('category.update', $dataCategory->id) }}" method="POST"  enctype="multipart/form-data" class="mb-3 mt-4">
        @csrf
        @method('PATCH')
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
                    value="{{  $dataCategory->title }}"
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
                <textarea name="desc" id="" cols="5" rows="5" class="form-control">{{ $dataCategory->desc }}</textarea>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end align-items-center gap-2">
            <a href="{{ route('category.index') }}" class="btn btn-danger text-white mb-5">
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
