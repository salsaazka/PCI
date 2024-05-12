@extends('admin.template.index')

@section('content-admin')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productVariant.store') }}" method="POST" enctype="multipart/form-data" class="mb-3 mt-4">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Title ID</label>
                            <input type="text" class="form-control" name="title" aria-describedby="title"
                                placeholder="Masukan title" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Title EN</label>
                            <input type="text" class="form-control" name="title_en" aria-describedby="title"
                                placeholder="Masukan title" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Gram Min</label>
                            <input type="number" class="form-control" name="size_min" aria-describedby=""
                                placeholder="Masukan size min" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Gram Max</label>
                            <input type="number" class="form-control" name="size_max" aria-describedby=""
                                placeholder="Masukan Size Max" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Packing</label>
                            <input type="text" class="form-control" name="packing" aria-describedby=""
                                placeholder="Masukan Packing" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Product</label>
                            <select class="form-select" aria-label="Default select example" name="product_id">
                                <option value="">Pilih Product</option>
                                @foreach ($data as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Measurement ID</label>
                            <input type="text" class="form-control" name="measurement" aria-describedby=""
                                placeholder="Masukan Measurement" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Measurement EN</label>
                            <input type="text" class="form-control" name="measurement_en" aria-describedby=""
                                placeholder="Masukan Measurement" />
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end align-items-center gap-2">
                    <a href="{{ route('productVariant.index') }}" class="btn btn-danger text-white mb-5">
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

