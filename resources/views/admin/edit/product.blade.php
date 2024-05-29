@extends('admin.template.index')

@section('content-admin')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('product.update', $dataProduct->id) }}" method="POST" enctype="multipart/form-data"
                class="mb-3 mt-4">
                @csrf
                @method('PATCH')
                <div class="row">
                    {{-- <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Satuan</label>
                            <select class="form-select" aria-label="Default select example" name="unit">
                                @if ($dataProduct->unit == 'pcs')
                                    <option value="pcs" selected>Pcs</option>
                                    <option value="container">Container</option>
                                @else
                                    <option value="pcs">Pcs</option>
                                    <option value="container" selected>Container</option>
                                @endif
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-12">
                        <label for="" class="form-label">Kategory</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            @foreach ($dataCategory as $item)
                                @if ($item->id == $dataProduct->category_id)
                                    <option value="{{ $item->id }}" selected>{{ $item->title }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" value="{{ $dataProduct->price }}"
                                aria-describedby="" placeholder="Masukan price" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Stock</label>
                            <input type="number" class="form-control" name="stock" value="{{ $dataProduct->stock }}"
                                aria-describedby="" placeholder="Masukan stock" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Min Order</label>
                            <input value="{{ $dataProduct->min_order }}" type="number" class="form-control" name="min_order" aria-describedby="publisher"
                                placeholder="Masukan Min Order" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Marketplace Url</label>
                            <input value="{{ $dataProduct->marketplace_url }}" type="text" class="form-control" name="marketplace_url" aria-describedby="publisher"
                                placeholder="Masukan Marketplace Url" />
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Title ID</label>
                            <input type="text" class="form-control" name="title" value="{{ $dataProduct->title }}"
                                aria-describedby="" placeholder="Masukan title" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Title EN</label>
                            <input type="text" class="form-control" name="title_en" value="{{ $dataProduct->title_en }}"
                                aria-describedby="" placeholder="Masukan title" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description ID</label>
                            <textarea name="desc" id="editor1" cols="5" rows="5">{{ $dataProduct->desc }}</textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description EN</label>
                            <textarea name="desc_en" id="editor2" cols="5" rows="5">{{ $dataProduct->desc_en }}</textarea>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Image 1</label>
                            <input type="file" name="image_1" value="{{ $dataProduct->image_1 }}"
                                class="form-control dropify1" id="inputGroupFile01">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Image 2</label>
                            <input type="file" name="image_2" value="{{ $dataProduct->image_2 }}"
                                class="form-control dropify2" id="inputGroupFile02">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Image 3</label>
                            <input type="file" name="image_3" value="{{ $dataProduct->image_3 }}"
                                class="form-control dropify3" id="inputGroupFile03">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Image 4</label>
                            <input type="file" name="image_4" value="{{ $dataProduct->image_4 }}"
                                class="form-control dropify4" id="inputGroupFile04">
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end align-items-center gap-2">
                    <a href="{{ route('product.index') }}" class="btn btn-danger text-white mb-5">
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
            $('.dropify1').dropify();
        });

        $(document).ready(function() {
            $('.dropify2').dropify();
        });

        $(document).ready(function() {
            $('.dropify3').dropify();
        });

        $(document).ready(function() {
            $('.dropify4').dropify();
        });
    </script>
    <script>
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
    </script>
@endsection
