@extends('layouts.master')

@section('content') < section class = "content" > <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button onclick="addForm('{{ route('karyawans.store') }}')" class="btn btn-success btn-xs btn-flat">
                        <i class="fa fa-plus-circle">Tambah</i>
                    </button>
                </div>
            </div>
            <div class="body table-responsive">
                <table class="table table-stiped table-bordered" id="table1">
                    <thead>
                        <th width="5%">No</th>
                        <th>Kode</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenkel</th>
                        {{-- <th>Status</th>
                        <th>Agama</th>
                        <th>Pendidikan</th> --}}
                        <th>Alamat Id</th>
                        <th>Ktp</th>
                        {{-- <th>npwp</th>
                        <th>Jamsostek</th> --}}
                        {{-- <th>Nomor Hp</th> --}}
                        <th width="5%">
                            <i class="fa fa-cog"></i>
                        </th>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</div>
@includeIf('karyawan.form')
@endsection @push('scripts')
<script>
    let table;

     $(function () {
         table = $('.table').DataTable({
             responsive: true,
             processing: true,
             serverSide: true,
             autoWidth: false,
             ajax: {
                 url: '{{ route('karyawans.data') }}',
             },
             columns: [
                 {data: 'DT_RowIndex', searchable: false, sortable: false},
                 {data: 'kodeKaryawan'},
                 {data: 'namaDepan'},
                 {data: 'namaBelakang'},
                 {data: 'tempatLahir'},
                 {data: 'tanggalLahir'},
                 {data: 'jenkel'},
                //  {data: 'status'},
                //  {data: 'agama'},
                //  {data: 'pendidikan'},
                 {data: 'alamat'},
                 {data: 'ktp'},
                //  {data: 'npwp'},
                //  {data: 'jamsostek'},
                //  {data: 'nomorHandphone'},
                 {data: 'aksi', searchable: false, sortable: false},
             ]
         });

         $('#modal-form').validator().on('submit', function (e) {
             if (! e.preventDefault()) {
                 $.post($('#modal-form form').attr('action'), $('#modal-form form').serialize())
                     .done((response) => {
                         $('#modal-form').modal('hide');
                         table.ajax.reload();
                     })
                     .fail((errors) => {
                         alert('Tidak dapat menyimpan data');
                         return;
                     });
             }
         });
     });

     function addForm(url) {
         $('#modal-form').modal('show');
         $('#modal-form .modal-title').text('Form Master Karyawan');

         $('#modal-form form')[0].reset();
         $('#modal-form form').attr('action', url);
         $('#modal-form [name=_method]').val('post');
         $('#modal-form [name=namaDepan]').focus();
     }

     function editForm(url) {
         $('#modal-form').modal('show');
         $('#modal-form .modal-title').text('Edit Data Karyawan');

         $('#modal-form form')[0].reset();
         $('#modal-form form').attr('action', url);
         $('#modal-form [name=_method]').val('put');
         $('#modal-form [name=namaDepan]').focus();

         $.get(url)
             .done((response) => {
                $('#modal-form [name=namaDepan]').val(response.namaDepan);
                $('#modal-form [name=namaBelakang]').val(response.namaBelakang);
                $('#modal-form [name=namaPanggilan]').val(response.namaPanggilan);
                $('#modal-form [name=tempatLahir]').val(response.tempatLahir);
                $('#modal-form [name=tanggalLahir]').val(response.tanggalLahir);
                $('#modal-form [name=jenkel]').val(response.jenkel);
                $('#modal-form [name=status]').val(response.status);
                $('#modal-form [name=agama]').val(response.agama);
                $('#modal-form [name=pendidikan]').val(response.pendidikan);
                $('#modal-form [name=alamat]').val(response.alamat);
                $('#modal-form [name=domisili]').val(response.domisili);
                $('#modal-form [name=ktp]').val(response.ktp);
                $('#modal-form [name=npwp]').val(response.npwp);
                $('#modal-form [name=jamsostek]').val(response.jamsostek);
                $('#modal-form [name=nomorHandphone]').val(response.nomorHandphone);
                $('#modal-form [name=nomorDarurat]').val(response.nomorDarurat);
                $('#modal-form [name=email]').val(response.email);
             })
             .fail((errors) => {
                 alert('Tidak dapat menampilkan data');
                 return;
             });
     }

     function deleteData(url) {
         if (confirm('Yakin ingin menghapus data terpilih?')) {
             $.post(url, {
                     '_token': $('[name=csrf-token]').attr('content'),
                     '_method': 'delete'
                 })
                 .done((response) => {
                     table.ajax.reload();
                 })
                 .fail((errors) => {
                     alert('Tidak dapat menghapus data');
                     return;
                 });
         }
     }
 </script>
@endpush
