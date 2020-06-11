<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
    <link href="<?php echo base_url() ?>/assets1/dist/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Admin Page</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-2 my-1 my-md-0">
            <div class="input-group">
                <ul class="navbar-nav ml-auto">


                </ul>
            </div>
            </div>
        </form>
        <!-- Navbar-->
        <div class="topbar-divider d-none d-sm-block"></div>
        <ul class="na navbar-nav navbar-right">

            <button type="button" class="btn btn-dark ml-4 mr-2"><?php echo anchor('auth/logout', 'Logout'); ?></button>


    </nav>