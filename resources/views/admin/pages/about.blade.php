@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-4">Halaman About</h5>
                {{-- <a href="{{ route('about.create') }}" class="btn add-new btn-primary m-1 float-end">Add</a> --}}
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="">
                                No
                            </th>
                            <th class="">
                                Logo
                            </th>
                            <th class="">
                                Alamat
                            </th>
                            <th class="">
                                No telp
                            </th>
                            <th class="">
                                Email
                            </th>
                            <th class="">
                                Desc
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
                        @foreach ($dataAbout as $about)
                            <tr>
                                <td class="">
                                    <p>{{ $no++ }}</p>
                                </td>
                                <td class="">
                                    <img src="{{ asset('assets/images/data/' . $about->logo) }}" alt="img"
                                        width="60" height="50">
                                </td>
                                <td class="" style="max-width: 200px;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $about->address }}</p>
                                </td>
                                <td class="">
                                    <p>{{ $about->no_telp }}</p>
                                </td>
                                <td class="">
                                    <p>{{ $about->email }}</p>
                                </td>
                                <td class="" style="max-width: 200px;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $about->desc }}</p>
                                </td>
                                <td class="">
                                    <div class="d-flex">
                                        <a href="{{ route('about.edit', $about->id) }} " class="btn btn-warning"
                                            style="margin-right: 5px"><i class="ti ti-edit"></i></a>
                                        {{-- <form action="/about/delete/{{ $about->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="ti ti-trash"></i></button>
                                        </form> --}}
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
