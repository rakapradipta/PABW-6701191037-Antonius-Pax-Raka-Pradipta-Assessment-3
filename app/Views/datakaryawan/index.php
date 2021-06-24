<?php echo $this->extend('layout/template') ?>

<?php echo $this->section('content') ?>

<section id="features" class="features mt-5" data-aos="fade-up">
    <div class="container">
        <div class="row content justify-content-center" style="min-height:480px;">
            <div class="col-md-12 mt-5 mb-5 pb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <div class="card-header">
                        <?php echo $title; ?>
                    </div>
                    <div class="card-body">

                        <a href="<?php echo base_url('datakaryawan/create'); ?>" title="Tambah Data" class="btn btn-primary mb-2">
                            <i class="bx bx-plus"></i> Tambah Karyawan
                        </a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" style="width:100%;">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th class="text-center" width="50">ID</th>
                                        <th>Nama Karyawan</th>
                                        <th>Alamat Karyawan</th>
                                        <th class="text-center" width="120">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($datakaryawan) {
                                        $nomor = 0;
                                        foreach ($datakaryawan as $row) {
                                            $nomor++;
                                            echo '
                                                    <tr>
                                                        <td class="text-center">' . $nomor . '</td>
                                                        <td>' . $row['id'] . '</td>
                                                        <td>' . $row['nama'] . '</td>
                                                        <td>' . $row['alamat'] . '</td>
                                                        <td class="text-center">
                                                            <a href="' . base_url('datakaryawan/edit/' . $row['id']) . '" class="btn btn-warning" title="Ubah Data">
                                                                <i class="bx bx-edit">Edit</i>
                                                            </a>
                                                            <a href="' . base_url('datakaryawan/delete/' . $row['id']) . '" class="btn btn-danger" title="Hapus Data" onclick="return confirm(\'ANDA YAKIN INGIN MENGHAPUS DATA INI?\')">
                                                                <i class="bx bx-trash-alt">Hapus</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ';
                                        }
                                    } else {
                                        echo '
                                                <tr>
                                                    <td colspan="4" class="text-center">TIDAK ADA DATA</td>
                                                </tr>
                                                ';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php echo $this->endSection(); ?>