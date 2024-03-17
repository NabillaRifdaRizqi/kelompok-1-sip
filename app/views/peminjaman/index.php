<style>
 .my-table thead td{
  vertical-align : middle;
 }

</style>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
          
            <h3>Daftar Peminjaman</h3>
            
        </div>
    </div>
    
    <div class="row mt-3">
    <div class="col-lg-12 d-flex justify-content-start mb-3">
        <a href="<?= BASE_URL; ?>peminjaman/fromtambah" class="btn btn-primary">Tambah Data</a>
    </div>
</div>

 

    <div class="row ">
        <div class="col-12">
          
            <table class="table data-table my-table table table-bordered" >
                <thead>
                    <tr>
                        <td rowspan="2" width="5%"> No</td>
                        <td rowspan="2">Tanggal Pinjam</td>
                        <td rowspan="2">Tanggal Kembali</td>
                        <td rowspan="2">Id Anggota</td>
                        <td rowspan="2">Id Petugas</td>
                        <td colspan="3" style="text-align:center;">Opsi</td>

                    </tr>
                    <tr>
                      <th>Hapus</th>
                      <th>Ubah</th>
                      <th>Detail</th>
                </thead>
                <tbody>
                <?php
                  $pinjam = $this->model('Peminjaman_model')->getAllPeminjaman();
                  $no = 1;
                  foreach ($pinjam as $row):
                  ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['tanggal_pinjam']; ?></td>
                        <td><?= $row['tanggal_kembali']; ?></td>
                        <td><?= $row['anggota_id']; ?></td>
                        <td><?= $row['petugas_id']; ?></td>
                        <td >
                            <a href="<?= BASE_URL; ?>/peminjaman/hapus/<?= $row['id']; ?>" 
                            class="badge badge-danger ml-2" onclick="return confirm('Yakin hapus data?')">
                                <i class="fa fa-trash"  style="color: red;"></i>
                            </a>
                        </td>
                        <td > 
                        <a href="<?= BASE_URL; ?>peminjaman/fromubah/<?= $row['id']; ?>" 
                        class="badge badge-warning ml-2 " >
                          <i class="fa fa-edit" style="color: yellow;"></i></a>
                        </td>
                        <td > 
                        <a href="<?= BASE_URL; ?>Trans_peminjaman/fromdetail/<?= $row['id']; ?>" 
                        class="badge badge-warning ml-2 " >
                          <i class="fa fa-eye" style="color: blue;"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


