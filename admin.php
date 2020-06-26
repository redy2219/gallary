<?php require_once "./lib/functions.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/gallary.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="./js/script.js"></script>
    <title>gallary</title>
</head>
<body>

<?php

$mysql = connectDatabase();
if (!empty($_GET['galleryImage']) && !empty($_GET['galleryPath'])) {
    echo('test');

    $galleryImage = $_GET['galleryImage'];
    $galleryPath = $_GET['galleryPath'];
    $sql = "INSERT galleryImages(galleryName, galleryPath) VALUES('$galleryImage','$galleryPath')";

    $mysql->query($sql);
}

$sql="SELECT * FROM galleryImages";
$result = $mysql->query($sql);
while ($rsVal = $result->fetch_object()){
    print_r($rsVal->id);
}

?>

<form>
    <div class="form-group">
        <label for="galleryImage">Name</label>
        <input type="text" class="form-control" name="galleryImage" id="galleryImage" aria-describedby="emailHelp"
               placeholder="name">
    </div>
    <div class="form-group">
        <label for="galleryPath">Path</label>
        <input type="text" class="form-control" name="galleryPath" id="galleryPath" placeholder="Path">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
