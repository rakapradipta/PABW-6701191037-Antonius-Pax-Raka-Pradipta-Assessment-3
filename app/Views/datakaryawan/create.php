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
                        <form action="<?php echo base_url('datakaryawan/views') ?>" method="post" accept-charset="utf-8">

                            <?php if (isset($validation)) : ?>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="alert alert-danger">
                                            <?php echo $validation->listErrors(); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="form-group row">
                                <label class="col-md-3" for="NIA">
                                    ID Karyawan
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="id" id="id" placeholder="Masukkan ID" class="form-control" value="<?php echo set_value('id'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="password">
                                    Nama Karyawan
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="nama" id="nama" placeholder="Masukkan nama" class="form-control" value="<?php echo set_value('nama'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="nama">
                                    Alamat
                                </label>
                                <div class="col-md-5">
                                    <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat" class="form-control" value="<?php echo set_value('alamat'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">
                                    &nbsp;
                                </label>
                                <div class="col-md-5">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bx bx-save"></i> Simpan
                                    </button>
                                    <a href="<?php echo base_url('datakaryawan'); ?>" class="btn btn-dark">
                                        <i class="bx bx-reply"></i> Batal
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php echo $this->endSection(); ?>