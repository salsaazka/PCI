@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold mb-4">Pengaturan Tampilan Grid Produk</h5>
            <a href="{{ route('productgrid.create') }}" class="btn add-new btn-primary m-1 float-end">Tambah Produk</a>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Id</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Title</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Desc</h6>
                            </th>
                            <th class="">
                                <h6 class="fw-semibold mb-0">Image</h6>
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
                        @foreach ($dataProductGrid as $product)
                            <tr>
                                <td class="">
                                    <h6 class="fw-semibold mb-0">{{ $no++ }}</h6>
                                </td>
                                <td class="">
                                    <h6 class="fw-semibold mb-1">{{ $product->title }}</h6>
                                </td>
                                <td class="">
                                    <h6 class="fw-semibold mb-1">{{ $product->desc }}</h6>
                                </td>
                                <td class="">
                                    <button type="button" class="border-0 bg-white">
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/data/' . $product->image) }}" class="image-table" alt="">
                                        </div>
                                    </button>
                                </td>
                                <td class="d-flex">
                                    <a href="{{ route('productgrid.edit', $product->id) }} " class="btn btn-warning" style="margin-right: 5px"><i class="ti ti-edit"></i></a>
                                    <form action="/productgrid/delete/{{ $product->id }}" method="POST">
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
