@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('transaction.store') }}" method="post"  enctype="multipart/form-data" class="mb-3 mt-4">
        @csrf


        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Total Price</label
                >
                <input
                    type="number"
                    class="form-control"
                    name="total_price"
                    aria-describedby=""
                    placeholder="Masukan Total Price"
                />
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label"
                    >Total Count</label
                >
                <input
                    type="text"
                    class="form-control"
                    name="total_count"
                    aria-describedby="total_count"
                    placeholder="Masukan Total Count"
                />
                </div>
            </div>
        </div>

        <div class="row">
            
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