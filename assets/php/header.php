<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="assets/js/jquery-3.7.min.js"></script>
</head>
<body>
<header class="container d-flex flex-wrap justify-content-center">
	<form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
		<input type="search" class="form-control" placeholder="Search..." aria-label="Search">
	</form>

	<div class="text-end">
		<button type="button" class="btn btn-light text-dark me-2">Login</button>
		<button type="button" class="btn btn-primary">Sign-up</button>
	</div>
</header> <!-- ./ header -->
<nav class="navbar navbar-expand-lg bg-body-tertiary rounded">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

<div class="collapse navbar-collapse d-lg-flex" id="navbarTop">
    <a class="navbar-brand col-lg-3 me-0" href="#">Centered nav</a>
        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
            <li class="nav-item"><a class="nav-link disabled">Disabled</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        </ul> <!-- ./ navbar-nav -->

<div class="d-lg-flex col-lg-3 justify-content-lg-end">
    <button class="btn btn-primary">Button</button>
</div>
</div>
    </div>
</nav> <!-- ./ nav -->
<main>