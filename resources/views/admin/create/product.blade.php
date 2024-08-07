@extends('admin.template.index')

@section('content-admin')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="mb-3 mt-4">
                @csrf
                <div class="row">
                    {{-- <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Satuan</label>
                            <select class="form-select" aria-label="Default select example" name="unit">
                                <option>Pilih Satuan</option>
                                <option value="pcs">Pcs</option>
                                <option value="container">Container</option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Kategory</label>
                            <select class="form-select" aria-label="Default select example" name="category_id">
                                <option value="">Pilih Kategory</option>
                                @foreach ($dataCategory as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" aria-describedby="publisher"
                                placeholder="Masukan price" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Stock</label>
                            <input type="number" class="form-control" name="stock" aria-describedby="publisher"
                                placeholder="Masukan stock" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Min Order</label>
                            <input type="number" class="form-control" name="min_order" aria-describedby="publisher"
                                placeholder="Masukan Min Order" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Marketplace Url</label>
                            <input type="text" class="form-control" name="marketplace_url" aria-describedby="publisher"
                                placeholder="Masukan Marketplace Url" />
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Title ID</label>
                            <input type="text" class="form-control" name="title" aria-describedby="publisher"
                                placeholder="Masukan title" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Title EN</label>
                            <input type="text" class="form-control" name="title_en" aria-describedby="publisher"
                                placeholder="Masukan title" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description ID</label>
                            <textarea name="desc" id="editor1" rows="5" cols="5">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description EN</label>
                            <textarea name="desc_en" id="editor2" rows="5" cols="5">
                            </textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Highlight</label>
                            <textarea class="form-control" placeholder="Description Highlight" name="desc_highlight" rows="5" cols="5">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Highlight EN</label>
                            <textarea class="form-control" placeholder="Description Highlight EN" name="desc_highlight_en" rows="5" cols="5">
                            </textarea>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Gambar 1</label>
                            <input type="file" name="image_1" class="form-control dropify1" id="inputGroupFile01">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Image 1</label>
                            <input type="text" class="form-control" name="image_desc_1" aria-describedby="publisher"
                            placeholder="Masukan Image Description" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Image 1 EN</label>
                            <input type="text" class="form-control" name="image_desc_1_en" aria-describedby="publisher"
                                placeholder="Masukan Image Description" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Gambar 2</label>
                            <input type="file" name="image_2" class="form-control dropify2" id="inputGroupFile01">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Image 2</label>
                            <input type="text" class="form-control" name="image_desc_2" aria-describedby="publisher"
                            placeholder="Masukan Image Description" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Image 2 EN</label>
                            <input type="text" class="form-control" name="image_desc_2_en" aria-describedby="publisher"
                                placeholder="Masukan Image Description" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Gambar 3</label>
                            <input type="file" name="image_3" class="form-control dropify3" id="inputGroupFile01">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Image 3</label>
                            <input type="text" class="form-control" name="image_desc_3" aria-describedby="publisher"
                            placeholder="Masukan Image Description" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Image 3 EN</label>
                            <input type="text" class="form-control" name="image_desc_3_en" aria-describedby="publisher"
                                placeholder="Masukan Image Description" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Gambar 4</label>
                            <input type="file" name="image_4" class="form-control dropify4" id="inputGroupFile01">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Image 4</label>
                            <input type="text" class="form-control" name="image_desc_4" aria-describedby="publisher"
                            placeholder="Masukan Image Description" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Description Image 4 EN</label>
                            <input type="text" class="form-control" name="image_desc_4_en" aria-describedby="publisher"
                                placeholder="Masukan Image Description" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Urutan</label>
                            <input type="number" class="form-control" name="order" aria-describedby="order"
                                placeholder="Masukan Urutan" />
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
        CKEDITOR.replace('editor3');
    </script>
@endsection
