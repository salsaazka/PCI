@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('contact.update', $dataContact->id) }}" method="POST"  enctype="multipart/form-data" class="mb-3 mt-4">
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
                    value="{{ $dataContact->title }}"
                    aria-describedby="title"
                    placeholder="Masukan title"
                />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Contact</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="contact"
                    value="{{ $dataContact->contact }}"
                    aria-describedby=""
                    placeholder="Masukan Contact"
                />
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end align-items-center gap-2">
            <a href="{{ route('contact.index') }}" class="btn btn-danger text-white mb-5">
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
