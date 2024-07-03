<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Kartu Pemilih</title>
    <script>
        window.print();
    </script>
    <style>
        .kartu {
            position: relative;
            float: left;
            border: 1px solid black;
            margin: 10px;
            padding: 0 5px 5px 5px;
            width: 325px;
            height: 180px;
			background-image: url(<?= base_url('assets/bg.png') ?>);
        }

        h4 {
            margin: 0px;
            text-align: center;
        }

        hr {
            margin: 2;
        }
		td {
            text-align: left;
            vertical-align: top;
        }
        th {
            text-align: left;
            vertical-align: top;
        }
    </style>
</head>

<body>
<?php foreach ($data_pemilih_data as $data_pemilih) : ?>
		<div class="kartu">
		<br>
		<img src="<?= get_url_file(get_pengaturan('site_logo')) ?>" height='40px' width='40px' align="left">
		<img src="<?= base_url('assets/pilketos.png') ?>" height='40px' width='40px' align="right">
            <h4>Kartu Pemilihan Ketua Osis</h4>
            <h4><?= get_pengaturan('penyelenggara') ?></h4>
            <hr>
            <table>

                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><?= $data_pemilih->nama ?></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td><?= $data_pemilih->kelas ?></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>:</td>
                    <td><?= $data_pemilih->username ?></td>
                </tr>
				 <tr>
                    <th>Password</th>
                    <td>:</td>
                    <td><?= $data_pemilih->password ?></td>
                </tr>
            </table>
            <div style="margin-top: 4px; padding-left: 5px">
            </div>
        </div>
		<?php endforeach; ?>
</body>

</html>