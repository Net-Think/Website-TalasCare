<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="nqiBR_4BjU4P4pg1u6hihB5cDmhubifJf3o9vbKANOs" />
    <title>TalasCare | Forum</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white topbar static-top shadow">
        <div class="container-fluid min-top">
            <img class="navbar-brand" width="109" src="assets/image/logo.png" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-active" href="index.php"><img src="assets/image/home.svg" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img src="assets/image/follow.svg" alt=""></a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item">
                        <div class="justify-content-md-center">
                            <form class="d-flex my-auto d-inline w-500">
                                <input class="form-search" type="search" placeholder="Cari forum" aria-label="Search">
                            </form>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link notification" href="#"><img src="assets/image/lonceng.svg" alt=""></a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile" src="assets/image/profil.png">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Zaky</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="profile.php">
                                <img src="assets/image/profil.svg" alt="">
                                Profil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.php">
                                <img src="assets/image/logout.svg" alt="">
                                Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="container-fluid">
            <div class="row mt-4 mb-5">
                <div class="col-3">
                        <div class="row">
                            <div class="w-auto d-none d-lg-block">
                                <div class="item-side">
                                    <div class="filter">
                                        <div class="body-filter">
                                                <img src="assets/image/profil.png" alt="">
                                            <div class="filter-text">
                                                <span class="title-filter">Zaky Ahmad</span>
                                                <span class="subtitle-filter">Bogor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="w-auto d-none d-lg-block">
                                <div class="item-side">
                                    <div class="filter">
                                        <a href="edit_profile.php">
                                            <div class="body-filter">
                                                    <img src="assets/image/profile.svg" alt="">
                                                <div class="filter-text">
                                                    <span class="title-filter">Edit Profil</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="post_forum.php">
                                            <div class="body-filter">
                                                    <img src="assets/image/forum.svg" alt="">
                                                <div class="filter-text">
                                                    <span class="title-filter">Postingan Forum</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="login.php">
                                            <div class="body-filter">
                                                    <img src="assets/image/keluar.svg" alt="">
                                                <div class="filter-text">
                                                    <span class="title-filter">Keluar</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="card-forum">
                            <div class="row">
                                <div class="col-12">
                                    <h3>Edit Profil</h3>
                                </div>
                                <div class="row mt-2 mb-5">
                                    <div class="col-2">
                                        <span>Avatar</span>
                                        <img src="assets/image/profile image.png" class="img-fluid" alt="">
                                        <div class="image-upload">
                                            <label for="file-input">
                                                <a class="btn btn-purple mt-1">Edit Avatar</a>
                                            </label>
                                            <input id="file-input" type="file"/>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-profil" value="Zaky Ahmad">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Username</label>
                                            <input type="text" class="form-profil" value="zaky">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Nomor Telepon</label>
                                            <input type="text" class="form-profil" value="085155411077">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Email</label>
                                            <input type="text" class="form-profil" value="zakyahmad@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-profil" value="16 Februari 2003">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Username</label>
                                            <textarea type="text" class="form-profil" rows="7">Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128</textarea>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-3">
                                                <button type="button" class="btn btn-purple-secondary">Batal</button>
                                            </div>
                                            <div class="col-4">
                                                <button type="button" class="btn btn-purple">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <script>
        function hide() {
            $('#show ').css("display", "block");
        }
    </script>
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </body>
    
    </html>