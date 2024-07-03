<!DOCTYPE html>
<html lang="id">

<head>
    <?php $this->load->view('front/meta'); ?>
</head>

<body>

    <!-- Navigation -->
    <?php $this->load->view('front/navbar'); ?>

    <!-- MainContent -->
    <div class="container">
        <?php
        //Columns must be a factor of 12 (1,2,3,4,6,12)
        $numOfCols = 4;
        $rowCount = 0;
        $bootstrapColWidth = 20 / $numOfCols;
        ?>
        <div class="row">
            <?php foreach ($kandidat_data as $kandidat) : ?>
                <div class="col-md-4">
                    <div style="margin-top: 60px" class="card bg-light text-center">
                        <img class="card-img-top" style="object-fit:cover" src="<?php echo base_url('assets/uploads/kandidat/') . $kandidat->foto ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-text" style="text-transform: uppercase;"><?php echo $kandidat->nama ?></h5>
							<h6 class="card-text"><?php echo $kandidat->organisasi ?></h6>
                            <p class="card-title "><?php echo $kandidat->nourut ?></p>
                            <div id="visi-<?= $kandidat->idkandidat ?>" style="display: none; visibility: hidden;"><?= $kandidat->visi ?></div>
                            <div id="misi-<?= $kandidat->idkandidat ?>" style="display: none;  visibility: hidden;"><?= $kandidat->misi ?></div>
                        </div>
                        <div class="card-footer">
                            <button onclick="showVisiMisi('<?= $kandidat->idkandidat ?>')" class="btn btn-flat btn-primary" style="float: left;">Visi & Misi</button>
                            <a href="<?php echo base_url('home/doVote/' . $kandidat->idkandidat) ?>" class="btn btn-flat btn-success" style="float: right;">Vote</a> </div>
                        </div>
                </div>
            <?php
                $rowCount++;
                if ($rowCount % $numOfCols == 0) echo '</div><div class="row">';
            endforeach ?>
        </div>
    </div>
	<br>
	<br>
	<br>

    <!-- Footer -->
    <?php $this->load->view('front/footer'); ?>

    <!-- Javascript -->
    <?php $this->load->view('front/js'); ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function showVisiMisi(id) {
            Swal.fire({
                html: '<b>Visi</b><br>' + $('#visi-' + id).html() + '<br><br><b>Misi</b><br>' + $('#misi-' + id).html(),
                showCloseButton: false,
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonText: 'Tutup',
            })
        }
    </script>

</body>

</html>