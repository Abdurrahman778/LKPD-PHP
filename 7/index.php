<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nama1">Nama 1</label>
        <input type="text" id="nama1" name="nama1" required>
        <label for="nama2">Nama 2</label>
        <input type="text" id="nama2" name="nama2" required>
        <button type="submit">Mulai</button>
    </form>  
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['nama1'] != '' && $_POST['nama2'] != '') {

        $nama1 = strtoupper($_POST['nama1']);
        $nama2 = strtoupper($_POST['nama2']);

        if(strlen($nama1) > strlen($nama2)) {
            $total = strlen($nama1) - strlen($nama2);
            echo "Nama yang lebih panjang adalah $nama1 daripada $nama2, dan total perbedaan karakternya adalah $total.";
        } else {
            $total = strlen($nama2) - strlen($nama1);
            echo "Nama yang lebih panjang adalah $nama2 daripada $nama1, dan total perbedaan karakternya adalah $total.";
        }

    
}


?>