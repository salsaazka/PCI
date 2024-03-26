@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('product.update', $dataProduct->id) }}" method="POST"  enctype="multipart/form-data" class="mb-3 mt-4">
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
                    value="{{ $dataProduct->title }}"
                    aria-describedby=""
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
                    value="{{ $dataProduct->desc }}"
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
                    value="{{ $dataProduct->price }}"
                    aria-describedby=""
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
                    value="{{ $dataProduct->stock }}"
                    aria-describedby=""
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
                    value="{{ $dataProduct->unit }}"
                    aria-describedby=""
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
                    <input type="file" name="image_1" value="{{ $dataProduct->image_1 }}" class="form-control" id="inputGroupFile01">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label"
                        >Upload Image</label
                    >
                    <input type="file" name="image_2" value="{{ $dataProduct->image_2 }}" class="form-control" id="inputGroupFile02">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label"
                        >Upload Image</label
                    >
                    <input type="file" name="image_3" value="{{ $dataProduct->image_3 }}" class="form-control" id="inputGroupFile03">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label"
                        >Upload Image</label
                    >
                    <input type="file" name="image_4" value="{{ $dataProduct->image_4 }}" class="form-control" id="inputGroupFile04">
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