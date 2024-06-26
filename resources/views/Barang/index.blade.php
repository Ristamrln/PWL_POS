@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('barang/create')
}}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="" class="col-1 control-label col-form-label">Filter : </label>
                        <div class="col-3">
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                <option value="">- Semua -</option>
                                @foreach($kategori as $item)
                                    <option value="{{$item->kategori_id}}">{{$item->kategori_nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-striped table-hover table-sm w-100" id="table_barang">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori Barang</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Aksi</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
    <script>
        $(document).ready(function () {
            let dataUser = $('#table_barang').DataTable({
                serverSide: true, // True if we want to use Server side processing
                ajax: {
                    "url": "{{ url('barang/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data": function (d) {
                        d.kategori_id = $('#kategori_id').val();
                    }
                },
                columns: [
                    {
                        data: "DT_RowIndex", // numbering from laravel datatables addIndexColumn() function
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "barang_kode",
                        className: "",
                        orderable: true,    // orderable: true, if we want this column is orderable
                        searchable: true,   // searchable: true, if we want this column searchable
                    },
                    {
                        data: "barang_nama",
                        className: "",
                        orderable: true,    // orderable: true, if we want this column is orderable
                        searchable: true,   // searchable: true, if we want this column searchable
                    },
                    {
                        data: "kategori.kategori_nama",
                        className: "",
                        orderable: false,	// orderable: false, if we want this column not orderable
                        searchable: false	// searchable: false, if we want this column not searchable
                    },
                    {
                        data: "harga_beli",
                        className: "",
                        orderable: true,    // orderable: true, if we want this column is orderable
                        searchable: true,   // searchable: true, if we want this column searchable
                    },
                    {
                        data: "harga_jual",
                        className: "",
                        orderable: true,    // orderable: true, if we want this column is orderable
                        searchable: true,   // searchable: true, if we want this column searchable
                    },
                    {
                        data: "aksi",
                        className: "",
                        orderable: false,	// orderable: false, if we want this column not orderable
                        searchable: false	// searchable: false, if we want this column not searchable
                    }
                ]
            });

            $('#kategori_id').on('change', function () {
                dataUser.ajax.reload();
            });
        });
    </script>
@endpush