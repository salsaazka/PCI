@extends('admin.template.index')

@section('content-admin')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productVariant.store2') }}" method="POST" enctype="multipart/form-data" class="mb-3 mt-4">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Container (Feet)</label>
                            <input type="number" class="form-control" name="container" aria-describedby=""
                                placeholder="Masukan Container" />
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
                            <label for="" class="form-label">Size (Ton)</label>
                            <input type="number" class="form-control" name="size" aria-describedby=""
                                placeholder="Masukan Size" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Bag (Kg)</label>
                            <input type="number" class="form-control" name="bag" aria-describedby=""
                                placeholder="Masukan Bag" />
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

