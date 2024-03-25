@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('product.store') }}" method="post"  enctype="multipart/form-data" class="mb-3 mt-4">
        @csrf
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
                <input
                    type="textarea"
                    class="form-control"
                    name="desc"
                    aria-describedby="desc"
                    placeholder="Masukan Description"
                />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Price</label
                >
                <input
                    type="number"
                    class="form-control"
                    name="price"
                    aria-describedby="publisher"
                    placeholder="Masukan price"
                />
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Stock</label
                >
                <input
                    type="number"
                    class="form-control"
                    name="stock"
                    aria-describedby="publisher"
                    placeholder="Masukan stock"
                />
                </div>
            </div>
            <div class="col-4">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Unit</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="unit"
                    aria-describedby="desc"
                    placeholder="Masukan Unit"
                />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label"
                        >Upload Image</label
                    >
                    <input type="file" name="image_1" class="form-control" id="inputGroupFile02">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label"
                        >Upload Image</label
                    >
                    <input type="file" name="image_2" class="form-control" id="inputGroupFile02">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label"
                        >Upload Image</label
                    >
                    <input type="file" name="image_3" class="form-control" id="inputGroupFile02">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label"
                        >Upload Image</label
                    >
                    <input type="file" name="image_4" class="form-control" id="inputGroupFile02">
                </div>
            </div>
        </div>
        
        <button
        type="submit"
        class="btn text-white mb-5"
        style="background-color: #B46060"
        >
        Submit
        </button>
    </form>
    </div>
</div>
@endsection