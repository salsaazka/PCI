@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('productgrid.update', $dataProductGrid->id) }}" method="POST"  enctype="multipart/form-data" class="mb-3 mt-4">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="" class="form-label"
                        >Upload Image</label
                    >
                    <input type="file" name="image" value="{{ $dataProductGrid->image }}" class="form-control dropify" id="inputGroupFile01">
                </div>
            </div>
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
                    value="{{ $dataProductGrid->title }}"
                    aria-describedby=""
                    placeholder="Masukan title"
                />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Description ID</label
                >
                <textarea name="desc" id="" cols="5" rows="5" class="form-control">{{ $dataProductGrid->desc }}</textarea>
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
                    value="{{ $dataProductGrid->title_en }}"
                    aria-describedby=""
                    placeholder="Masukan title"
                />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Description EN</label
                >
                <textarea name="desc_en" id="" cols="5" rows="5" class="form-control">{{ $dataProductGrid->desc_en }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Destinasi</label
                >
                <select name="destination" class="form-select">
                    <option selected>Pilih Destinasi</option>
                    @foreach ($dataProduct as $product)
                        <option value="{{ $product->id }}" {{ $product->id == $dataProductGrid->destination ? 'selected' : '' }}>{{ $product->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="d-flex justify-content-end align-items-center gap-2">
            <a href="{{ route('productgrid.index') }}" class="btn btn-danger text-white mb-5">
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
