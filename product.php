<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Eatio - Restaurant Food Order Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">




</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<?php
            include 'navbar.php';
            ?>
			
		<!--  I need to remove this content-body so i can easily view product to full screen  -->
        <!-- <div class="content-body"> -->
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 ">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="images/product/1.jpg" alt="">
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="second">
                                                <img class="img-fluid" src="images/product/2.jpg" alt="">
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="third">
                                                <img class="img-fluid" src="images/product/3.jpg" alt="">
                                            </div>
											<div role="tabpanel" class="tab-pane fade" id="for">
                                                <img class="img-fluid" src="images/product/4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                            <!-- Nav tabs -->
                                            <ul class="nav slide-item-list mt-3" role="tablist">
                                               
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h4>Solid Women's V-neck Dark T-Shirt</h4>
                                                <div class="star-rating mb-2">
                                                    <ul class="produtct-detail-tag">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span class="review-text">(34 reviews) / </span><a class="product-review" href="#">Write a review?</a>
                                                </div>
                                                <p class="price">$320.00</p>
                                                <p>Availability: <span class="item"> In stock <i
                                                            class="fa fa-shopping-basket"></i></span>
                                                </p>
                                                <p>Product code: <span class="item">0405689</span> </p>
                                                <p>Brand: <span class="item">Lee</span></p>
                                                <p>Product tags:&nbsp;&nbsp;
                                                    <span class="badge badge-success light">bags</span>
                                                    <span class="badge badge-success light">clothes</span>
                                                    <span class="badge badge-success light">shoes</span>
                                                    <span class="badge badge-success light">dresses</span>
                                                </p>
                                                <p class="text-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                                                <div class="filtaring-area my-3">
                                                    <div class="size-filter">
                                                        <h4 class="m-b-15">Select size</h4>
                                                        <ul>
                                                            <li class="btn btn-primary light sharp">x</li>
                                                            <li class="btn btn-primary light sharp">m</li>
                                                            <li class="btn btn-primary light sharp">l</li>
                                                            <li class="btn btn-primary light sharp">xs</li>
                                                            <li class="btn btn-primary light sharp">xl</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--Quantity start-->
												<div class="col-2 px-0">
													<input type="number" name="num" class="form-control input-btn input-number" value="1">
												</div>
                                                <!--Quanatity End-->
                                                <div class="shopping-cart mt-3">
                                                    <a class="btn btn-primary btn-lg" href="temp.php"><i
                                                            class="fa fa-shopping-basket mr-2"></i>Add
                                                        to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->

	

    <?php

			include "javascript.php"
			?>

    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
    
    <script src="./vendor/highlightjs/highlight.pack.min.js"></script>
    <!-- Circle progress -->



</body>

</html>