<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title text-bold">Laporan Harian</h3>
        </div>
        <div class="card-body">
            <?php echo form_open('laporan/harian') ?>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <select name="tanggal" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < $mulai + 31; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 2;
                            for ($i = $mulai; $i < $mulai + 3; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Cetak Laporan</button>
                    </div>
                </div>

            </div>
            <?php echo form_close() ?>

        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title text-bold">Laporan Bulanan</h3>
        </div>
        <div class="card-body">
            <?php echo form_open('laporan/bulanan') ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 2;
                            for ($i = $mulai; $i < $mulai + 3; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Cetak Laporan</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title text-bold">Laporan Tahunan</h3>
        </div>
        <div class="card-body">
            <?php echo form_open('laporan/tahunan') ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 2;
                            for ($i = $mulai; $i < $mulai + 3; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Cetak Laporan</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>