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
    <section>
        <div class="container-fluid">
            <div class="row mt-4 mb-5">
                <div class="col-2">
                        <div class="row">
                            <div class="w-auto d-none d-lg-block">
                                <a href="index.html">
                                    <div class="back">
                                        <img src="assets/image/back.svg" alt="">
                                        Kembali
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-forum">
                                    <h6>Masukkan Foto</h6>
                                    <div class="custom-file">
                                        <input type="file" class="form-profil" id="customFile" name="gambar" accept="image/*" onchange="loadFile(event)" onclick="hide()" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="card-forum" id="show">
                                    <div class="col-12" id="show">
                                        <img id="output" class="img-thumbnail img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="card-forum" id="show">
                            <p align="justify">
                                Terima kasih telah mengirimkan foto daun talas Anda. Saya telah menganalisis foto tersebut dan menemukan bahwa tanaman talas Anda mengalami penyakit antraknosa. Antraknosa adalah penyakit jamur yang menyerang daun, batang, dan umbi talas. Gejala awalnya adalah munculnya bercak hitam kecil pada daun yang kemudian membesar dan menyebabkan daun menguning dan gugur1. Pengguna: Oh, tidak. Apa yang harus saya lakukan untuk mengobati penyakit ini? AI: Untuk mengobati penyakit antraknosa, Anda harus melakukan beberapa langkah berikut:
                                <ol class="list-group list-group-flush">
                                    <li class="list-group-item">Pangkas dan buang semua bagian tanaman yang terinfeksi dan jangan biarkan jatuh di tanah.</li>
                                    <li class="list-group-item">Bersihkan alat pangkas dengan alkohol atau larutan pemutih sebelum dan sesudah digunakan.</li>
                                    <li class="list-group-item">Semprotkan fungisida yang sesuai dengan label produk pada tanaman talas yang sehat untuk mencegah penularan.</li>
                                    <li class="list-group-item">Jaga kebersihan dan drainase lahan agar tanah tidak terlalu lembap dan jamur tidak berkembang biak
                                </ol>
                            </p>
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