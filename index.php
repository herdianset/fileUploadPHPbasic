<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <div style="width : 50%; margin:auto; border:1px solid black; padding: 15px">
        <h2>Upload File</h2>

        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label>Upload Foto : </label><br>
            <input type="file" name="foto"><br><br>
            <input type="submit" value="Upload">
        </form>
    </div>

    <div style="width : 50%; margin:auto; border:1px solid black; padding: 15px">
        <h2>Foto</h2>

        <?php
            require "koneksi.php";
            $qry = mysqli_query($con, "SELECT * FROM foto");
            while($data = mysqli_fetch_assoc($qry)){
        ?>
            <img src="foto/<?= $data['nama_foto'] ?>" alt="foto" width="100px">
        <?php } ?>
    </div>
</body>
</html>