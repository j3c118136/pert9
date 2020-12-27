<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Author">
        <meta name="Description">
        <meta name="keyword">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">

        <!-- Font Awsome CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>IPB University</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">

                <a class="navbar-brand" href="#">IPB University</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto"> 
                        <li class="nav-item <?php if (current_url(true)->getSegment(1) == 'Beranda') echo ' active'; ?>">
                            <a class="nav-link" href='<?php echo site_url("Beranda") ?>' >Beranda<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php if (current_url(true)->getSegment(1) == 'Prodi') echo ' active'; ?>">
                            <a class="nav-link" href='<?php echo base_url("Prodi") ?>'>Prodi</a>
                        </li>
                        <li class="nav-item <?php if (current_url(true)->getSegment(1) == 'Mahasiswa') echo ' active'; ?>">
                            <a class="nav-link" href="<?php echo base_url("Mahasiswa") ?>">Mahasiswa</a>
                        </li>
                        <li class="nav-item dropdown<?php if (current_url(true)->getSegment(1) == 'Agama' || current_url(true)->getSegment(1) == 'Hobi') echo ' active'; ?>">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Data Master
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item<?php if (current_url(true)->getSegment(1) == 'Agama') echo ' active'; ?>" href="<?php echo site_url('Agama'); ?>">Agama</a>
                                <a class="dropdown-item<?php if (current_url(true)->getSegment(1) == 'Hobi') echo ' active'; ?>" href="<?php echo site_url('Hobi'); ?>">Hobi</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        
    </body>
</html>

    