<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" width="80px">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" background-color="blue    ">
          <h5 class="modal-title" id="exampleModalLabel">Form Input Data Kategori</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <form action="" method="POST" class="form-horizontal">
        <div class="modal-body" width="800px">
            <div width="800px">
                @csrf

                <table>
                    <tr>
                        <td>Nama Karyawan</td>
                        <td>:</td>
                        <td>
                        <div class="input-group">
                            <input type="text"  placeholder="Nama Depan" id="namaDepan" name="namaDepan" class="form-control">
                          <input type="text" placeholder="namaBelakang" id="namaBelakang" name="namaBelakang" class="form-control">
                    </div></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Panggilan</td>
                        <td>:</td>
                        <td><input type="text" id="namaPanggilan" class="form-control" name="namaPanggilan"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" id="tempatLahir" class="form-control" name="tempatLahir"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input class="datepicker" data-date-format="mm/dd/yyyy" type="date" class="form-control" name="tanggalLahir"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jenkel" value="L" id="laki" class="">Laki-laki
                            <input type="radio" name="jenkel" value="P" id="perempuan" class="">perempuan</td>
                        <td></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Status Pernikahan</td>
                        <td>:</td>
                        <td><input type="radio" name="status" id="lajang" value="lajang" class="">Lajang
                            <input type="radio" name="status" id="menikah" value="menikah" class="">Menikah
                            <input type="radio" name="status" id="single parent" value="single parent" class="">Menikah
                        </td>
                        <td></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><select class="custom-select custom-select-sm" name="agama">
                            <option selected>--Pilih Satu--</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">konghucu</option>
                            <option value="lainnya">lainnya</option>
                          </select></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>:</td>
                        <td><select class="custom-select custom-select-sm" name="pendidikan">
                            <option selected>--Pilih Satu--</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="lainnya">lainnya</option>
                          </select></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Alamat Sesuai Identitas</td>
                        <td>:</td>
                        <td><textarea name="alamat" rows="3" cols="50" class="form-control"></textarea></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Alamat Saat Ini</td>
                        <td>:</td>
                        <td><textarea name="domisili" rows="3" cols="50" class="form-control"></textarea></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Nomor Identitas (KTP)</td>
                        <td>:</td>
                        <td><input type="text" id="ktp" value="" class="form-control" name="ktp"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Nomor NPWP</td>
                        <td>:</td>
                        <td><input type="text" id="npwp" value="" name="npwp" class="form-control"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Nomor Jamsostek</td>
                        <td>:</td>
                        <td><input type="text" id="jamsostek" value="" class="form-control" name="jamsostek"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone</td>
                        <td>:</td>
                        <td><input type="text" id="nomorHandphone" value="" class="form-control" name="nomorHandphone"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Nomor Darurat</td>
                        <td>:</td>
                        <td><input type="text" id="nomorDarurat" value="" class="form-control" name="nomorDarurat"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" id="email"  name="email" value="" class="form-control"></td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
