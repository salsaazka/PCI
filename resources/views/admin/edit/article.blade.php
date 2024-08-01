@extends('admin.template.index')

@section('content-admin')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Edit About</h5>
        <form action="{{ route('article.update', $dataArticle->id) }}" method="POST" enctype="multipart/form-data" class="mb-3 mt-4">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">Upload Image</label>
                    <input type="file" name="logo" value="{{ $dataArticle->logo }}" class="form-control dropify" id="inputGroupFile02">
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Title ID</label>
                            <input value="{{ $dataArticle->title }}" type="text" class="form-control" name="title" aria-describedby="title"
                                placeholder="Masukan Title" />
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Title EN</label>
                            <input value="{{ $dataArticle->title_en }}" type="text" class="form-control" name="title_en" aria-describedby="title_en"
                                placeholder="Masukan Title" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Description ID</label>
                            <textarea name="desc" id="editor1" cols="5" rows="5">{{ $dataArticle->desc }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Description EN</label>
                            <textarea name="desc_en" id="editor2" cols="5" rows="5">{{ $dataArticle->desc_en }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Urutan</label>
                            <input value="{{ $dataArticle->order}}" type="number" class="form-control" name="order" aria-describedby="order"
                                placeholder="Masukan Urutan" />
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end align-items-center gap-2">
                    <a href="{{ route('article.index') }}" class="btn btn-danger text-white mb-5">
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
    <script>
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
    </script>
@endsection
