<?php 
    $name = auth()->user()->name;
    echo'
    <!Doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="/css/stylePerpus.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="icon" href="/img/thumb.png">
        <style>
        * {
            font-family: "Poppins";
        }

        .side-bar {
            width: 270px;
            background-color: #1A374D;
            min-height: 100vh;
        }

        a {
            padding-left: 10px;
            font-size: 13px;
            text-decoration: none;
            color: #B1D0E0;
        }

        .menu i {
            padding-left: 10px;
        }

        .menu .content-menu {
            padding: 9px 8px;
        }

        .isActive {
            background-color: #B1D0E0 !important;
            border-right: 8px solid #B1D0E0;
        }

        i {
            color: white;
        }

        div.profile {
            box-shadow: inset 0 0 0 0 #406882;
            color: #406882;
            transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
            margin-top: 10px;
        }

        div.profile:hover {
            box-shadow: inset 260px 0 0 0 #Ff4e44;
            color: white;
        }
        </style>
    </head>

    <body>
        <aside>
            <div class="d-flex">
                <div class="side-bar">
                    <div class="menu">
                        <div class="content-menu">';
                            if($name!='admin'){
                                echo'
                                <form action="/profile" method="get">
                                    <button type="submit" style="border: 0; background-color: #1A374D; margin-top:15px;">
                                        <i class="fa fa-user"></i>
                                        <a style="font-weight:600; font-size:20px; color:#b1d0e0">'.$name.'</a>
                                    </button>
                                </form>';
                            }else{
                                echo'
                                <i class="fa fa-user" style=" margin-top:15px;"></i>
                                <a style="font-weight:600; font-size:20px; color:#b1d0e0">'.$name.'</a>';
                            }
                            echo'
                        </div>
                    </div>
                    <hr style="color:#FFFFFF; height:5px;">
                    <div class="menu">
                        <div class="content-menu">
                            <form action="/dashboard" method="get">
                                <button type="submit" style="border: 0; background-color: #1A374D">
                                    <i class="bi bi-house"></i>
                                    <a style="font-weight:600; font-size:13px; color:#b1d0e0">Dashboard</a>
                                </button>
                            </form>
                        </div>
                        <div class="content-menu ">
                            <form action="/listBuku" method="get">
                                <button type="submit" style="border: 0; background-color: #1A374D">
                                    <i class="bi bi-book"></i>
                                    <a style="font-weight:600; font-size:13px; color:#b1d0e0">List Buku</a>
                                </button>
                            </form>
                        </div>';
                        if($name=="admin"){
                            echo'
                            <div class="content-menu ">
                                <form action="/listPeminjam" method="get">
                                    <button type="submit" style="border: 0; background-color: #1A374D">
                                        <i class="bi bi-view-list"></i>
                                        <a style="font-weight:600; font-size:13px; color:#b1d0e0">List Peminjam</a>
                                    </button>
                                </form>
                            </div>
                            <div class="content-menu ">
                                <form action="/listPembeli" method="get">
                                    <button type="submit" style="border: 0; background-color: #1A374D">
                                        <i class="fa fa-list-alt"></i>
                                        <a style="font-weight:600; font-size:13px; color:#b1d0e0">List Pembeli</a>
                                    </button>
                                </form>
                            </div>';
                        }else{
                            echo'
                            <div class="content-menu ">
                                <form action="/listPeminjaman" method="get">
                                    <button type="submit" style="border: 0; background-color: #1A374D">
                                        <i class="bi bi-view-list"></i>
                                        <a style="font-weight:600; font-size:13px; color:#b1d0e0">List Peminjaman</a>
                                    </button>
                                </form>
                            </div>
                            <div class="content-menu">
                                <form action="/listPembelianMajalah" method="get">
                                    <button type="submit" style="border: 0; background-color: #1A374D">
                                        <i class="bi bi-bag"></i>
                                        <a style="font-weight:600; font-size:13px; color:#b1d0e0">List Pembelian Majalah</a>
                                    </button>
                                </form>
                            </div>';
                        }
                        echo'
                        <div class="content-menu ">
                            <form action="/listMajalah" method="get">
                                <button type="submit" style="border: 0; background-color: #1A374D">
                                    <i class="bi bi-book-half"></i>
                                    <a style="font-weight:600; font-size:13px; color:#b1d0e0">List Majalah</a>
                                </button>
                            </form>
                        </div>';
                        ?>
                        
                        <div class="content-menu ">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" style="border: 0; background-color: #1A374D">
                                    <i class="fa fa-sign-out"></i>
                                    <a style="font-weight:600; font-size:13px; color:#b1d0e0">Logout</a>
                                </button>
                            </form>
                        </div>
                    </div>
                    <hr style="color: #FFFFFF; height: 5px;">
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
                </script>
                <script>
                    @if(Session::has('message'))
                      toastr.options =
                      {
                        "closeButton" : true,
                        "progressBar" : true
                      }
                          toastr.success("{{ session('message') }}");
                    @endif
                
                    @if(Session::has('error'))
                      toastr.options =
                      {
                        "closeButton" : true,
                        "progressBar" : true
                      }
                          toastr.error("{{ session('error') }}");
                    @endif
                    @if(Session::has('info'))
                      toastr.options =
                      {
                        "closeButton" : true,
                        "progressBar" : true
                      }
                          toastr.info("{{ session('info') }}");
                    @endif
                  </script>
                  <script defer src="/js/scriptPerpus.js"></script>