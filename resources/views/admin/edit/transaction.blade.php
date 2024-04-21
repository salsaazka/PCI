@extends('admin.template.index')

@section('content-admin')
<div class="card">
    <div class="card-body">
    <form action="{{ route('transaction.update', $dataTransaction->id) }}" method="POST"  enctype="multipart/form-data" class="mb-3 mt-4">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="" class="form-label">User</label>
                    <select class="form-select" aria-label="User" name="user_id" disabled>
                        <option selected value="-" disabled>-</option>
                        @foreach ($users as $user)
                            <option value="{{$user['id']}}">{{$user['name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <label class="form-label text-muted">Payment Method</label>
                <select class="form-select" aria-label="Payment" name="payment_id" disabled>
                    <option selected value="-" disabled>-</option>
                    @foreach ($payments as $payment)
                        <option value="{{$payment['id']}}">{{$payment['bank_name']}} - {{$payment['no_bank']}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label">Total Price (Rp)</label
                >
                <input
                    type="number"
                    class="form-control"
                    name="total_price"
                    value="{{ $dataTransaction->total_price }}"
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
                    value="{{ $dataTransaction->total_count }}"
                    aria-describedby="total_count"
                    placeholder="Masukan Total Count"
                />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label">Product Name</label
                >
                <select disabled class="form-select" aria-label="Payment" name="transaction_product_id">
                    <option selected value="{{$dataTransaction['transactionProduct']['id']}}">{{$dataTransaction['transactionProduct']['product']['title']}}</option>
                </select>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                <label for="" class="form-label">Proof of Payment</label
                >
                <input
                    type="number"
                    class="form-control"
                    name="proof_payment"
                    value="-"
                    aria-describedby=""
                    placeholder=""
                    disabled
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
