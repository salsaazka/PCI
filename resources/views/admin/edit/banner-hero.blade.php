@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('banner-hero.update', $dataBanner->id) }}" method="POST"  enctype="multipart/form-data" class="mb-3 mt-4">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="" class="form-label"
                >Upload Image</label
            >
            <input type="file" name="image" value="{{ $dataBanner->image }}" class="form-control dropify" id="inputGroupFile02">
        </div>

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Title ID</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    value="{{ $dataBanner->title }}"
                    aria-describedby="publisher"
                    placeholder="Masukan title"
                />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Description ID</label
                >
                <textarea placeholder="Masukan description" name="description" id="" cols="5" rows="5" class="form-control">{{ $dataBanner->description }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Title EN</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="title_en"
                    value="{{ $dataBanner->title_en }}"
                    aria-describedby="publisher"
                    placeholder="Masukan title"
                />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Description EN</label
                >
                <textarea placeholder="Masukan description" name="desc_en" id="" cols="5" rows="5" class="form-control">{{ $dataBanner->desc_en }}</textarea>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end align-items-center gap-2">
            <a href="{{ route('banner-hero.index') }}" class="btn btn-danger text-white mb-5">
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
