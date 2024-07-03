<?php $this->load->view('back/meta') ?>

<style>
    .cgp {
        display: flex;
        flex-direction: row;
        width: 100%;
    }

    .cgp p {
        padding: 4px;
        margin: 0px;
    }

    .cgp .progress-group {
        padding: 4px;
    }

    .cgp .progress-group .progress {
        margin: 0;
    }

    .cgp img {
        padding: 6px; 
        background: rgba(0, 0, 0, 0.2);
    }

    .cgp .suara {
        font-weight: bold;
    }

    /* Make p smaller on mobile */
    @media only screen and (max-width: 340px) {
        .cgp p {
            font-size: 8px;
        }
    }

    @media only screen and (max-width: 600px) {
        .cgp p {
            font-size: 10px;
        }
    }
</style>

<div class="wrapper">
    <?php $this->load->view('back/head') ?>
    <?php $this->load->view('back/sidebar') ?>
    <!-- Content Wrapper. Contains page content -->
    <div id="siteBreadcrumb" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Hasil
                <small>Perolehan</small>
            </h1>
            <ol class="breadcrumb">
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">Data Suara Pemilihan</h3>
                        </div>
                    </div>
                    <!-- ./box -->
                </div>
                <!-- ./col -->

                <div id="realtime">
                    
                </div>
            </div>
            <!-- ./row -->
           
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <?php $this->load->view('back/footer') ?>
</div>

<!-- /.modal -->

<?php $this->load->view('back/js') ?>

<script>
    $(document).ready(function(){
        $('#realtime').load('<?= site_url('admin/perolehan/update') ?>');

        setInterval(function() {
            $('#realtime').load('<?= site_url('admin/perolehan/update') ?>');
        }, 1000);
    });
</script>

<!-- page script -->

</body>

</html>