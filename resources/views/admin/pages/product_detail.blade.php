@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-4">Halaman Product Detail</h5>
                <a href="{{ route('product-detail.create') }}" class="btn add-new btn-primary m-1 float-end">Tambah Article</a>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="">
                                No
                            </th>
                            <th class="">
                                Product
                            </th>
                            <th class="">
                                Title
                            </th>
                            <th class="">
                               Packing
                            </th>
                            <th class="">
                                Size
                            </th>
                            <th class="">
                                Measurement
                            </th>
                            <th class="">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($productDetail as $items)
                            <tr>
                                <td class="">
                                    <p>{{ $no++ }}</p>
                                </td>
                                 <td class="">
                                    <p>{{ $items->title }}</p>
                                </td>
                                <td class="">
                                    <p>{{ $items->title }}</p>
                                </td>
                                 <td class="">
                                    <p>{{ $items->packing }}</p>
                                </td>
                                <td class="">
                                    <p>{{ $items->size_min }} - {{ $items->size_max }}</p>
                                </td>
                                <td class="">
                                    <p>{{ $items->measurement }}</p>
                                </td>
                                <td class="">
                                    <div class="d-flex">
                                        <a href="{{ route('product-detail.edit', $items->id) }} " class="btn btn-warning"
                                            style="margin-right: 5px"><i class="ti ti-edit"></i></a>
                                        <form action="/product-detail/delete/{{ $items->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="ti ti-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
