@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-4">Halaman Product Variant</h5>
                <div class="flex align-items-center gap-3">
                    <a href="{{ route('productVariant.create') }}" class="btn add-new btn-primary m-1 float-end">Tambah
                        variant Zeolites</a>
                    <a href="{{ route('productVariant.create2') }}" class="btn add-new btn-primary m-1 float-end">Tambah
                        variant Export</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card w-100">
        <div class="card-body">
            <h6 class="mb-3">Product Zeolites</h3>
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
                                    Size (Gram)
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
                            @foreach ($product1 as $items)
                                <tr>
                                    <td class="">
                                        <p>{{ $no++ }}</p>
                                    </td>
                                    <td class="">
                                        {{-- filter berdasarkan product_id --}}
                                        <p>
                                        @php
                                            $product = DB::table('products')->where('id', $items->product_id)->first();

                                            $titleProduct = $product->title;

                                            echo $titleProduct
                                        @endphp
                                        </p>
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
                                            <a href="{{ route('productVariant.edit', $items->id) }} "
                                                class="btn btn-warning" style="margin-right: 5px"><i
                                                    class="ti ti-edit"></i></a>
                                            <form action="/product-variant/delete/{{ $items->id }}" method="POST">
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


    <div class="card w-100">
        <div class="card-body">
            <h6 class="mb-3">Product Export</h3>
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
                                    Container (Feet)
                                </th>
                                <th class="">
                                    Size (Ton)
                                </th>
                                <th class="">
                                    Bag (Kg)
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
                            @foreach ($product2 as $items)
                                <tr>
                                    <td class="">
                                        <p>{{ $no++ }}</p>
                                    </td>
                                    <td class="">
                                        <p>
                                            @php
                                                $product = DB::table('products')->where('id', $items->product_id)->first();

                                                $titleProduct = $product->title;

                                                echo $titleProduct
                                            @endphp
                                            </p>
                                    </td>
                                    <td class="">
                                        <p>{{ $items->container }}</p>
                                    </td>
                                    <td class="">
                                        <p>{{ $items->size }}</p>
                                    </td>
                                    <td class="">
                                        <p>{{ $items->bag }}</p>
                                    </td>
                                    <td class="">
                                        <div class="d-flex">
                                            <a href="{{ route('productVariant.edit2', $items->id) }} "
                                                class="btn btn-warning" style="margin-right: 5px"><i
                                                    class="ti ti-edit"></i></a>
                                            <form action="/product-variant/delete/{{ $items->id }}" method="POST">
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
