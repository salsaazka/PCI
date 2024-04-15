@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Transaction Page</h5>
            <a href="{{ route('transaction.create') }}" class="btn add-new btn-primary m-1 float-end">Add</a>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Id</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">User</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Payment</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Transaction product</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Total price</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Total count</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Proof Payment</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Action</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                    @endphp
                    @foreach ($dataTransaction as $transaction)
                        <tr>
                            <td class="">
                                <h6 class="fw-semibold mb-0">{{ $no++ }}</h6>
                            </td>
                            <td class="">
                                <h6 class="fw-semibold mb-1">{{ $transaction->user_id }}</h6>
                                {{-- <span class="fw-normal">Web Designer</span> --}}
                            </td>
                            <td class="">
                                <h6 class="fw-semibold mb-1">{{ $transaction->payment_id }}</h6>
                            </td>
                            <td class="">
                                <h6 class="fw-semibold mb-1">{{ $transaction->transaction_product_id }}</h6>
                            </td>
                            <td class="">
                                <h6 class="fw-semibold mb-1">{{ $transaction->total_price }}</h6>
                            </td>
                            <td class="">
                                <h6 class="fw-semibold mb-1">{{ $transaction->total_count }}</h6>
                            </td>
                            <td class="">
                                <h6 class="fw-semibold mb-1">{{ $transaction->proof_payment }}</h6>
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('transaction.edit', $transaction->id) }} " class="btn btn-warning" style="margin-right: 5px"><i class="ti ti-edit"></i></a>
                                <form action="/transaction/delete/{{ $transaction->id }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="ti ti-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
