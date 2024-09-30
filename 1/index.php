<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Check Number in String</title>
</head>

<body>
    <div class="card" >
        <div class="card-body">
            <div class="card-header">
                <h4>Check Number in String</h4>
            </div>
            <form action="" method="post" class="row g-3">
                <div class="col-auto col-sm-3">
                    <input class="form-control" type="text" id="text" name="text" placeholder="Insert Text" required>
                </div>
                <div class="col-auto">
                    <button class="btn btn-success " type="submit" name="submit">process</button>
                </div>
            </form>
            <?php
            if (isset($_POST['submit']) && $_POST['text'] != '') {
                $text = $_POST['text'];
                $numberArray = [];

                for ($i = 0; $i < strlen($text); $i++) {
                    if (is_numeric($text[$i])) {
                        $numberArray[] = $text[$i];
                    }
                }

                if (!empty($numberArray)) {
                    $numberString = implode(",", $numberArray);
                    echo "<h6>Teks mengandung angka: $numberString</h6>";
                } else {
                    echo "<h6>Tidak ditemukan angka dalam teks.</h6>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>