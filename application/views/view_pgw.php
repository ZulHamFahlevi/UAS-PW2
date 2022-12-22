<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
</head>
<body>
    <table border='1px solid black'>
        <tr>
            <th>NAMA PEGAWAI</th>
            <th>NIP</th>
            <th>ALAMAT</th>
        </tr>
        <?php foreach ($pegawai as $pgw):?>
        <tr>
            <td><?php echo $pgw['nama'];?></td>
            <td><?php echo $pgw['nim'];?></td>
            <td><?php echo $pgw['alamat'];?></td>
        </tr>
        <?php endforeach;?>
    </table>
    <!-- <?php print_r ($pegawai);?> -->
</body>
</html>