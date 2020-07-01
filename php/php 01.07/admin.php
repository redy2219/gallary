<?php require_once "./lib/functions.php";

$mysql = connectDatabase();
if (!empty($_GET['select'])) {
    $select = $_GET['select'];
    $query = "INSERT galleryImages(select) VALUES('$select')";
    $mysql->query($query);
    header('Location: http://gallery.docker.oblako-1c.ru/admin.php');
    exit();
}
?>
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
    <title>gallary</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h2>Images</h2>
            <table class="table" id="dynamic">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Path</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (!empty($_GET['category_id'])) {
                    $categoryId = $_GET['category_id'];
                    $query = "SELECT *  FROM galleryCategoryImages
         LEFT JOIN galleryImages ON galleryCategoryImages.id_images = galleryImages.id
          WHERE galleryCategoryImages.id_category=" . $categoryId . " ";
                    $result = $mysql->query($query);
                    while ($sql = $result->fetch_object()) {
                        echo("<tr>");
                        echo("<td>$sql->id_images<?td>");
                        echo("<td>$sql->galleryName<?td>");
                        echo("<td> $sql->galleryPath<?td> ");
                        echo("</tr>");
                    }
                } ?>
                </tbody>
            </table>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="galleryImage">image</label>
                    <select class="form-control select2 select2-hidden-accessible select" id="select" name="select">

                            <?php
                            $query = " SELECT id, galleryName FROM galleryImages ";
                            $result = $mysql->query($query);
                            while ($sql = $result->fetch_object()) {
                                echo ("<option value='galleryName' id='{$sql->id}'>");
                                echo ("{$sql->galleryName}");
                                echo (" </option>");
                            }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
