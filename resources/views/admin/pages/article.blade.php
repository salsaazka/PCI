@extends('admin.template.index')

@section('content-admin')
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title fw-semibold mb-4">Halaman Article</h5>
                <a href="{{ route('article.create') }}" class="btn add-new btn-primary m-1 float-end">Tambah Article</a>
            </div>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="">
                                No
                            </th>
                            <th class="">
                                Image
                            </th>
                            <th class="">
                                Title ID
                            </th>
                            <th class="">
                                Title EN
                            </th>
                            <th class="">
                                Description ID
                            </th>
                            <th class="">
                                Description EN
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
                        @foreach ($dataArticle as $article)
                            <tr>
                                <td class="">
                                    <p>{{ $no++ }}</p>
                                </td>
                                <td class="">
                                    <img src="{{ asset('assets/images/data/' . $article->image) }}" alt="img"
                                        width="50" height="50">
                                </td>
                                <td class="">
                                    <p>{{ $article->title }}</p>
                                </td>
                                <td class="">
                                    <p>{{ $article->title_en }}</p>
                                </td>
                                <td class="" style="max-width: 200px;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $article->desc }}</p>
                                </td>
                                <td class="" style="max-width: 200px;">
                                    <p style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $article->desc_en }}</p>
                                </td>
                                <td class="">
                                    <div class="d-flex">
                                        <a href="{{ route('article.edit', $article->id) }} " class="btn btn-warning"
                                            style="margin-right: 5px"><i class="ti ti-edit"></i></a>
                                        <form action="/article/delete/{{ $article->id }}" method="POST">
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
