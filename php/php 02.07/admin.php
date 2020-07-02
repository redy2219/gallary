<?php require_once "./lib/functions.php";

$mysql = connectDatabase();

if (!empty($_FILES['uploadImage']['name'])) {
    $uploaddir = 'images/';
    $imagePath = $uploaddir . basename($_FILES['uploadImage']['name']);
    move_uploaded_file($_FILES['uploadImage']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/'.$imagePath);

    if (empty($_GET['galleryImage'])) {
        $galleryImage = basename($_FILES['uploadImage']['name']);
    } else {
        $galleryImage = $_GET['galleryImage'];
    }
    $imageUrlPath = "./$imagePath";
    $sql = "INSERT galleryImages(galleryName, galleryPath) VALUES('$galleryImage','$imageUrlPath')";
    $mysql->query($sql);
    header('Location: http://gallery.docker.oblako-1c.ru/admin.php');
    exit();
}

if (!empty($_GET['Category'])) {
    $Category = $_GET['Category'];
    $sql = "INSERT galleryCategory(categoryName) VALUES('$Category')";
    $mysql->query($sql);
    header('Location: http://gallery.docker.oblako-1c.ru/admin.php');
    exit();
}


if (!empty($_POST['id_category']) && !empty($_POST['id_images'])) {
    $id_category = $_GET['id_category'];
    $id_images = $_GET['id_images'];
    $sql = "INSERT galleryCategoryImages(galleryName, galleryPath) VALUES('$id_category','$id_images')";
    $mysql->query($sql);
    header('Location: http://gallery.docker.oblako-1c.ru/admin.php');
    exit();
}


if (!empty($_GET['action'] && !empty($_GET['id']))) {
    if ($_GET['action'] == 'deleteCategory') {
        $Category = $_GET['id'];
        $sql = "DELETE FROM galleryCategory WHERE id = $Category";
        $mysql->query($sql);
        header('Location: http://gallery.docker.oblako-1c.ru/admin.php');
        exit();
    }
}
if (!empty($_GET['action'] && !empty($_GET['id']))) {
    if ($_GET['action'] == 'deleteImage') {
        $Images = $_GET['id'];
        $sql = "DELETE FROM galleryImages WHERE id = $Images";
        $mysql->query($sql);
        header('Location: http://gallery.docker.oblako-1c.ru/admin.php');
        exit();
    }
}
if (!empty($_GET['action'] && !empty($_GET['id']))) {
    if ($_GET['action'] == 'deleteTable') {
        $Tables = $_GET['id'];
        $sql = "DELETE FROM galleryCategoryImages WHERE id = $Tables";
        $mysql->query($sql);
        header('Location: http://gallery.docker.oblako-1c.ru/admin.php');
        exit();
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gallery.css">
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
                $query = "SELECT id, galleryName,galleryPath FROM galleryImages";
                $result = $mysql->query($query);
                while ($arRes = $result->fetch_object()) {
                    echo("<tr>");
                    echo("<td>{$arRes->id}</td>");
                    echo("<td>{$arRes->galleryName}</td>");
                    echo("<td>{$arRes->galleryPath}</td>");
                    echo("<td><a href='/admin.php?action=deleteImage&id={$arRes->id}'><button type='button' class='btn-delete-image  btn-outline-light btn  float-right btn'>
                <svg class='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24 ' fill='black' width='20px' height='20px'>
                    <path
                        d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z' />
                    <path d='M0 0h24v24H0z' fill='none' />
                </svg>
            </button> </a></td>");
                    echo("</tr>");
                    if (isset($_GET['id'])) {
                        $Images = htmlentities($_GET['id']);
                    }
                }

                ?>
                </tbody>
            </table>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="galleryImage"><b>Upload image</b></label>
                    <input type="file" name="uploadImage"/>
                </div>
                <div class="form-group">
                    <label for="galleryImage">Image name</label>
                    <input type="text" class="form-control" name="galleryImage" id="galleryImage" placeholder="Image name">
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
        <div class="col-8">
            <h2>Category images</h2>
            <table class="table" id="dynamic">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <?php
                $query = "SELECT id, categoryName FROM galleryCategory";
                $result = $mysql->query($query);
                while ($arRes = $result->fetch_object()) {
                    echo("<tr>");
                    echo("<td>{$arRes->id}</td>");
                    echo("<td ><a href='/admin_category.php?category_id={$arRes->id}'>{$arRes->categoryName}</a></td>");
                    echo("<td><a href='/admin.php?action=deleteCategory&id={$arRes->id}'><button type='button' class='btn-delete-image  btn-outline-light btn  float-right btn'>
                <svg class='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24 ' fill='black' width='20px' height='20px'>
                    <path
                        d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z' />
                    <path d='M0 0h24v24H0z' fill='none' />
                </svg>
            </button></a></td>");
                    echo("</tr>");
                    if (isset($_GET['id'])) {
                        $id = htmlentities($_GET['id']);
                    }
                }
                ?>
                </tbody>
            </table>
            <form>
                <div class="form-group">
                    <label for="Category">Category</label>
                    <input type="text" class="form-control Category" name="Category" id="Category">
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
        <div class="row">
            <div class="col-8">
                <h2>table_id</h2>
                <table class="table" id="dynamic">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">id_images</th>
                        <th scope="col">id_category</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT id, id_images,id_category FROM galleryCategoryImages";
                    $result = $mysql->query($query);
                    while ($arRes = $result->fetch_object()) {
                        echo("<tr>");
                        echo("<td>{$arRes->id}</td>");
                        echo("<td>{$arRes->id_images}</td>");
                        echo("<td>{$arRes->id_category}</td>");
                        echo("<td><a href='/admin.php?action=deleteTable&id={$arRes->id}'><button type='button' class='btn-delete-image  btn-outline-light btn  float-right btn'>
                <svg class='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24 ' fill='black' width='20px' height='20px'>
                    <path
                        d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z' />
                    <path d='M0 0h24v24H0z' fill='none' />
                </svg>
            </button> </a></td>");
                        echo("</tr>");
                        if (isset($_GET['id'])) {
                            $id = htmlentities($_GET['id']);
                        }
                    }

                    ?>
                    </tbody>
                </table>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id_category">table_category</label>
                        <input type="text" name="id_category" class="form-control id_category"
                               id="id_category"/>
                    </div>
                    <div class="form-group">
                        <label for="table_image">table_image</label>
                        <input type="text" class="form-control id_images" name="id_images" id="id_images"/>
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
        </div>

    </div>

</body>
