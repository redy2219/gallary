<?php require_once "./lib/functions.php";
$mysql = connectDatabase();

?>

<!DOCTYPE html>

<html lang="en">

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
    <script src="./js/script.js"></script>
    <title>gallary</title>
    <script language="JavaScript">
        const RADIX = 36;
        const FROM_SYMBOL = 2;
        const LENGTH_WORD = 9;
        const makeId = () => `_${Math.random().toString(RADIX).substr(FROM_SYMBOL, LENGTH_WORD)}`;
        let arrayOfImages = [];
        let i = 1;

        <?php

        $mysql = connectDatabase();
        if (!empty($_GET['id_category'])) {
            $id_category = $_GET['id_category'];
            $query = "SELECT *  FROM galleryCategoryImages
         LEFT JOIN galleryImages ON galleryCategoryImages.id_images = galleryImages.id
          WHERE galleryCategoryImages.id_category=" . $id_category . "  ";
        } else {
            $query = "SELECT *  FROM galleryImages";
        }
        $result = $mysql->query($query);
        $i = 1;

        while ($arRes = $result->fetch_object()) {
            echo("arrayOfImages[$i] = {id: makeId(), address: '{$arRes->galleryPath}', height: 300, width: 200};");
            $i++;
        }
        $categoryName = '';
        if (!empty($_GET['id_category'])) {
            $categoryId = $_GET['id_category'];
            $query = "SELECT categoryName FROM galleryCategory WHERE id = " . $categoryId . " ";
            $result = $mysql->query($query);
            while ($arRes = $result->fetch_object()) {
                $categoryName = $arRes->categoryName;
            }
        }



        ?>
    </script>
</head>

<body>

<header class="header">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark  ">
        <a style="color: white" class="menu navbar-brand">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="#navbarsExampleDefault">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-auto " id="navbarsExampleDefault">
            <ul class="navbar-nav ">

                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                       aria-haspopup="true" data-target="menu1" aria-expanded="false">Category</a>
                    <ul class="dropdown-menu mr-auto" aria-haspopup="true" id="menu1" aria-labelledby="dropdown01">
                        <a href='/gallery.php'>
                            <li class='dropdown-item'><b>All images</b></li>
                        </a>
                        <?php
                        $query = "SELECT categoryName,id FROM galleryCategory";
                        $result = $mysql->query($query);
                        while ($arRes = $result->fetch_object()) {
                            echo("<a href='/gallery.php?id_category={$arRes->id}'><li class='dropdown-item'>{$arRes->categoryName}</li></a>");
                        }
                        ?>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01"
                       aria-haspopup="true" data-target="menu1" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu mr-auto" aria-haspopup="true" id="menu1" aria-labelledby="dropdown01">
                        <li class="dropdown-item">Contact</li>
                        <li class="dropdown-item">Forum</li>
                        <li class="dropdown-item">Private office</li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="http://example.com" id="dropdown02"
                       aria-haspopup="true" data-target="menu2" aria-expanded="false">Top</a>
                    <ul class="dropdown-menu mr-auto" aria-haspopup="true" id="menu2" aria-labelledby="dropdown02">
                        <li class="dropdown-item">Animal</li>
                        <li class="dropdown-item">Top</li>
                        <li class="dropdown-item">People</li>
                        <li class="dropdown-item">BW</li>
                        <li class="dropdown-item">Colors</li>
                        <li class="dropdown-item">Sky</li>
                        <li class="dropdown-item">Car</li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03"
                       aria-haspopup="true" aria-expanded="false">Class</a>
                    <ul class="dropdown-menu mr-auto" aria-haspopup="true" id="menu3">
                        <li class="dropdown-item">Top 10</li>
                        <li class="dropdown-item">Top 100</li>
                        <li class="dropdown-item">Top day</li>
                        <li class="dropdown-item">Top week</li>
                        <li class="dropdown-item">Top year</li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" class="nav-link " href="http://example.com" id="dropdown04"
                       aria-haspopup="true" aria-expanded="false">About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" class="nav-link " href="http://example.com" id="dropdown05"
                       aria-haspopup="true" aria-expanded="false">Sing in </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header">
        <div class="Top">
            <h1>MOMENT OF LIFE</h1>
            <h3 class="categoryNameImages">  <?php
                echo($categoryName);
                ?></h3>
        </div>
    </div>
</header>

<div class="wrapper">

    <main class="main" style="min-height: 1024px">
        <div class="content border-secondary">
            <div class="container-fluid">
                <div class="row">

                    <!--                gallery-->
                    <div class="col-md-9 col-12">
                        <div class="row block-gallery-images p-4 ">
                        </div>
                    </div>

                    <div class="col-md-3 col-9"  style="z-index: 100; position: absolute; top:0; right: 0; height: 100%; " id ="navbarsExampleDefault-1">
                        <div class="container  p-0 list-inline  "  >
                            <form class="columns d-print-inline " >
                                <div class="collapse d-lg-block p-0  list-inline-item " id ="navbarsExampleDefault-1">
                                <div class="form-group list-inline">
                                    <li class=" p-0 list-group-item">
                                        <div class="custom-file inpt">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </li>
                                    <li class=" p-0 list-group-item ">
                                        <div class="param ">
                                            <h2 class="text-secondary">To edit</h2>
                                            <section class="information " id="information">
                                                <label>Height</label>
                                                <input type="text" id="imageHeight" class="form-control"/>
                                                <label>Width</label>
                                                <input type="text" id="imageWidth" class="form-control"/>
                                            </section>
                                            <a class="btn btn-warning " id="applyChanges" href="#">Apply</a>
                                        </div>
                                    </li>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                    <!--                parameters-->
                    <p style="position: fixed; top: 50%;right: 0;z-index: 1000;">
                        <a class="btn btn-secondary linkToggle col-lg-3  " data-toggle="collapse"
                           id="linkCollapseMenu"
                           href="#navbarsExampleDefault-1" role="button"
                           aria-expanded="false" aria-controls="navbarsExampleDefault-1"><<<</a>
                    </p>



                    <!--            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
                    <!--                <ol class="carousel-indicators">-->
                    <!--                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
                    <!--                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
                    <!--                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
                    <!--                </ol>-->
                    <!--                <div class="carousel-inner">-->
                    <!--                    <div class="carousel-item active">-->
                    <!--                        <img class="d-block w-100 " src="./css/Images/image4.jpg" alt="First slide">-->
                    <!--                    </div>-->
                    <!--                    <div class="carousel-item">-->
                    <!--                        <img class="d-block w-100" src="./css/Images/image2.jpg" alt="Second slide">-->
                    <!--                    </div>-->
                    <!--                    <div class="carousel-item">-->
                    <!--                        <img class="d-block w-100" src="./css/Images/image8.jpg" alt="Third slide">-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
                    <!--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                    <!--                    <span class="sr-only">Previous</span>-->
                    <!--                </a>-->
                    <!--                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
                    <!--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                    <!--                    <span class="sr-only">Next</span>-->
                    <!--                </a>-->
                    <!--            </div>-->

                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <div class="collapse navbar-collapse mx-auto flex-column">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link " href="http://example.com" id="dropdown06"
                           aria-haspopup="true" aria-expanded="false">Contact:</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link " href="http://example.com" id="dropdown07"
                           aria-haspopup="true" aria-expanded="false">Tel : +*(***)-(***)-(**)-(**) </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link " href="http://example.com" id="dropdown08"
                           aria-haspopup="true" aria-expanded="false"> mail : supportGMOL@gmail.com </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link " href="http://example.com" id="dropdown09"
                           aria-haspopup="true" aria-expanded="false">(c.) 2020 ~ MomentOfLife ~ </a>
                    </li>
                </ul>
            </div>
        </nav>
    </footer>

</div>
</body>

</html>
