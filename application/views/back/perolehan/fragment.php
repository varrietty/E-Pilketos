<?php 
    function randomColor($seed) {
        $seed = $seed;

        $colors = [
            '#19E6E2',
            '#FD8A8A',
            '#F2B705',
            '#F94A29',
            '#FCE22A',
            '#30E3DF',
            '#F1F7B5',
            '#A8D1D1',
            '#A8D1D1',
        ];

        return $colors[$seed % count($colors)];
    }

?>

<?php if(count($perolehan) > 0) {?>

<?php foreach($perolehan as $key => $value) { ?>
    <div class="col-md-12">
    <div class="box box-solid">
        <div class="box-body box-solid" style="padding: 0; background-color: <?= randomColor($key) ?>;">
            <div class="cgp">
                <div class="cgp-wrapper">
                    <img src="<?= base_url('assets/uploads/kandidat/'.$value->foto) ?>" alt="Profile" width="100px">
                </div>
                <div class="cgp-wrapper" style="width: 100%">
                    <p class="calon">CALON <?= $value->nourut ?> (<?= $value->organisasi ?>)</p>
                    <p class="suara"><?= $value->jumlahSuara ?> PEMILIH</p>
                    <div class="progress-group">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-primary" style="width: <?= $value->persen ?>%" role="progressbar" aria-valuenow="<?= $value->persen ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <p>
                        Total mendapatkan <?= $value->persen ?>% suara dari total <?= $value->jumlahPemilih ?> pemilih
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php } ?>