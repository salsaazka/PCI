@extends('admin.template.index')

@section('content-admin')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('product-detail.update', $dataProduct->id) }}" method="POST" enctype="multipart/form-data" class="mb-3 mt-4">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $dataProduct->title }}" aria-describedby="title"
                                placeholder="Masukan title" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Product</label>
                            <select class="form-select" aria-label="Default select example" name="product_id" value="{{ $dataProduct->product_id }}">
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
                            <label for="" class="form-label">Size Min</label>
                            <input type="number" class="form-control" name="size_min" value="{{ $dataProduct->size_min }}"
                                placeholder="Masukan size min" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Size Max</label>
                            <input type="number" class="form-control" name="size_max" value="{{ $dataProduct->size_max }}"
                                placeholder="Masukan Size Max" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Packing</label>
                            <input type="text" class="form-control" name="packing" value="{{ $dataProduct->packing }}"
                                placeholder="Masukan Packing" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Measurement</label>
                            <input type="text" class="form-control" name="measurement" value="{{ $dataProduct->measurement }}"
                                placeholder="Masukan Measurement" />
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end align-items-center gap-2">
                    <a href="{{ route('product-detail.index') }}" class="btn btn-danger text-white mb-5">
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

