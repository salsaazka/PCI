@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('banner.update', $dataBanner->id) }}" method="POST"  enctype="multipart/form-data" class="mb-3 mt-4">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="" class="form-label"
                >Upload Image</label
            >
            <input type="file" name="image" value="{{ $dataBanner->image }}" class="form-control" id="inputGroupFile02">
        </div>

       

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
                    value="{{ $dataBanner->title }}"
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
                    value="{{ $dataBanner->desc }}"
                    aria-describedby="desc"
                    placeholder="Masukan Description"
                />
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