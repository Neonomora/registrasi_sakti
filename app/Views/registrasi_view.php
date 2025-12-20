<main class="hold-transition kotak" style="background-color: rgb(239, 221, 204,.5);min-height:600px !important">
    <div style="width: 80%;" class="tengahkan">
        <div class="register-box">
            <div class="card card-outline card-primary mb-3">
                <div class="row no-gutters">
                    <div class="col-md-3 text-center align-items-center justify-content-center">
                        <img src="https://sakti.istikombci.ac.id/images/logo-samping.png" width="90%" style="padding-top: 2vh;">
                        <hr>

                        <button class="judul" type="button" data-toggle="collapse" data-target="#collapseProdi" aria-expanded="true" aria-controls="collapseProdi">
                            Pilhan Program Studi
                        </button>
                        <div class="tulisan-body collapse" id="collapseProdi">
                            <ul style="padding-inline-start: 20px !important;">
                                <li>Teknologi Rekayasa Komputer dan Jaringan (S1 Terapan)</li>
                                <li>Bisnis Digital (S1 Terapan)</li>
                                <li>Manajemen Keuangan Sektor Publik (S1 Terapan)</li>
                            </ul>
                        </div>
                        <hr>
                        <button class="judul" type="button" data-toggle="collapse" data-target="#collapsealamat" aria-expanded="true" aria-controls="collapsealamat">
                            Alamat
                        </button>
                        <div class="tulisan-body collapse" id="collapsealamat">
                            Jalan Siliwangi, Koramil Desa Purwasari Kec. Cicurug Kab. Sukabumi<br>
                            <a href="https://wa.me/6285724442416" target="blank"><i class="fas fa-phone"></i> 0266-6726283</a><br>
                            <a href="https://www.instagram.com/Istikom.bci/" target="blank"><i class="fab fa-instagram"></i> Istikom.bci</a>
                        </div>
                        <hr>
                        <button class="judul" type="button" data-toggle="collapse" data-target="#collapseInfo" aria-expanded="true" aria-controls="collapseInfo">
                            Informasi Pendaftaran
                        </button>
                        <div class="tulisan-body" id="collapseInfo">
                            <b>Periode Pendaftaran:</b>
                            <ul style="padding-inline-start: 20px !important;">
                            </ul>
                            <a href="https://wa.me/6281221688274" target="blank"><i class="fab fa-whatsapp"></i> 0812 2168 8274 (Jemmy)</a><br>
                            <a href="https://wa.me/6285794452421" target="blank"><i class="fab fa-whatsapp"></i> 0857 9445 2421 (Agie)</a>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md">
                        <div class="card-body">
                            <div class="judul2 text-center" role="alert">
                                Silahkan isi form dibawah ini untuk masuk kedalam sistem <b>SAKTI</b>
                            </div>
                            <hr>
                            <form action="#" id="form" method="post">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" name="nik">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap
                                                <span class="text-danger">*) Sesuai Ijazah</span>
                                            </label>
                                            <input type="text" class="form-control" name="nama">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>No. Handphone</label>
                                            <input type="text" class="form-control" name="hp">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="mail">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Kampus</label>
                                            <select name="kampus_id" class="form-control">

                                                <option value="1">Cicurug</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>

                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select name="prodi_id" class="form-control" id="prodi_id">
                                                <option value="-">Pilih Program Studi</option>
                                                <option value="1">Teknologi Rekayasa Komputer Jaringan</option>
                                                <option value="2">Bisnis Digital</option>
                                                <option value="3">Manajemen Keuangan Sektor Publik</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas <span class="text-danger">*) Pilih prodi terlebih dahulu</span></label>
                                            <select name="kelas_id" class="form-control" id="kelas_id">

                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Beasiswa</label>
                                            <select name="beasiswa_id" class="form-control">
                                                <option value="0">Pilih Beasiswa **)</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Dari manakah anda mendapatkan informasi tentang Politeknik Istikom BCI?</label>
                                            <select name="info" class="form-control" onclick="changeRef()">
                                                <option value="0">Silahkan Pilih</option>
                                                <option value="11">Referensi</option>
                                                <option value="1">Sekolah</option>
                                                <option value="2">Teman</option>
                                                <option value="3">Orang tua/Kerabat</option>
                                                <option value="4">Brosur/Poster</option>
                                                <option value="5">Spanduk/Banner</option>
                                                <option value="6">Koran/Surat</option>
                                                <option value="7">Internet</option>
                                                <option value="8">Radio</option>
                                                <option value="9">Televisi</option>
                                                <option value="10">Lainnya</option>
                                            </select>
                                            <input type="text" name="dari" class="form-control" placeholder="tuliskan namanya disini">
                                            <select name="referral" class="form-control">
                                                <option value="1">M. Sofwan Romli</option>
                                                <option value="2">SMA Negeri 1 Parakansalak</option>
                                                <option value="3">SMA Negeri 1 Parung Kuda</option>
                                                <option value="4">MA Negeri 1 Sukabumi</option>
                                                <option value="5">SMKS YASIDIK</option>
                                                <option value="6">SMA Negeri 1 Cigombong</option>
                                                <option value="7">SMA Negeri 1 Caringin</option>
                                                <option value="8">SMA Negeri 1 Cidahu</option>
                                                <option value="9">MA Syarikat Islam Parakansalak</option>
                                                <option value="10">SMA Negeri 1 Cicurug</option>
                                                <option value="11">SMK Bhakti Kencana Cigombong</option>
                                                <option value="12">SMKS TRIWIJAYA</option>
                                                <option value="13">SMK Wijaya PLus</option>
                                                <option value="14">SMK Nuansa Bogor</option>
                                                <option value="15">SMK Farmako Medika Plus</option>
                                                <option value="16">SMK Bhakti Candra</option>
                                                <option value="17">SMAS GITA PGRI</option>
                                                <option value="18">SMKS YASBAM</option>
                                                <option value="19">AULIANTI L-7 AMIK CBI CICURUG</option>
                                                <option value="20">SMA PGRI CICURUG</option>
                                                <option value="21">MAN 4 BOGOR</option>
                                                <option value="22">SMKN 1 Cigombong </option>
                                                <option value="23">SMA PGRI CIDAHU</option>
                                                <option value="24">SMA Negeri 1 Ciawi</option>
                                                <option value="25">SMK SMA YASINA</option>
                                                <option value="26">SMK Bhakti Pertiwi Indonesia </option>
                                                <option value="27">SMK YPM Cidahu</option>
                                                <option value="28">SMK PEMBANGUNAN CIBADAK</option>
                                                <option value="29">SMA AL ATIQIYAH</option>
                                                <option value="30">SMK PLUS MADANIAH</option>
                                                <option value="31">SMK TECMA CIAMBAR</option>
                                                <option value="32">SMA PGRI CIAMBAR</option>
                                                <option value="33">Ibu Ita</option>
                                                <option value="34">SMA Negeri 1 Cikidang</option>
                                                <option value="35">SMK PARIWISATA SAGAMULIA </option>
                                                <option value="36">SMA PGRI Ciawi</option>
                                                <option value="37">SMK Informatika CBI</option>
                                                <option value="38">Zakiyatul Amaliyah </option>
                                                <option value="39">MA AL ISTIQOMAH CARINGIN</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                            </form>
                            <div class="form-group text-center">
                                <button type="button" class="btn btn-daftar" onclick="daftarBaru()">Daftar</button>
                            </div>
                            <div class="text-right">
                                <a href="https://sakti.istikombci.ac.id/auth">Sudah Punya Akun</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- <div class="space" style="height: 150px;">
    &nbsp;
  </div> -->
    <!-- <nav class="fixed-bottom"> -->
    <!-- <div class="float-right d-sm-inline-block" style="text-align: right;"> -->
    <a href="https://wa.me/6281221688274" target="blank" style="position: fixed;bottom: 0"><img src="https://sakti.istikombci.ac.id/images/wa.png" class="img" width="15%"></a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <br>
    <br>
    <br>
    <!-- </div> -->
    <!-- </nav> -->
    <script src="https://sakti.istikombci.ac.id/assets/plugins/jquery/jquery.min.js"></script>

    <script src="https://sakti.istikombci.ac.id/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://sakti.istikombci.ac.id/assets/dist/js/adminlte.min.js"></script>
    <!-- Toastr -->
    <script src="https://sakti.istikombci.ac.id/assets/plugins/toastr/toastr.min.js"></script>

    <script>
        $(document).ready(function() {

            $('[name="referral"]').hide();

            $("input").change(function() {
                $(this).parent().parent().removeClass('text-danger');
                $(this).next().empty();
            });

            $("select").change(function() {
                $(this).parent().parent().removeClass('text-danger');
                $(this).next().empty();
            });

            $('#prodi_id').change(function() {
                $('#kelas_id').empty();
                var value = $(this).val();
                var kamp_val = $('[name="kampus_id"]').val();
                if (value > 0) {
                    $.ajax({
                        url: "https://sakti.istikombci.ac.id/daftar/ambil_kelas",
                        cache: false,
                        type: "POST",
                        data: {
                            id: value,
                            kamp: kamp_val
                        },
                        success: function(html) {
                            $('#kelas_id').append(html);
                        }
                    })
                }

            });
        });

        function changeRef() {
            let info = $('[name="info"]').val();

            if (info == 11) {
                $('[name="referral"]').show();
                $('[name="dari"]').hide();
            } else {
                $('[name="referral"]').hide();
                $('[name="dari"]').show();
            }
        }

        function daftarBaru() {
            $('#btnSave').text('saving...'); //change button text
            $('#btnSave').attr('disabled', true); //set button disable 
            var url = "https://sakti.istikombci.ac.id/daftar/ajax_add";

            // ajax adding data to database
            $.ajax({
                url: url,
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function(data) {

                    if (data.status) //if success close modal and reload ajax table
                    {
                        toastr.success('Selamat Bergabung, Silahkan login dan lengkapi profil anda.');
                        alert('Silahkan login dengan menggunakan nomor HP sebagai Username dan No. KTP Password');
                        location.replace('https://sakti.istikombci.ac.id/auth');
                    } else {
                        for (var i = 0; i < data.inputerror.length; i++) {
                            $('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('text-danger'); //select parent twice to select div form-group class and add has-error class
                            $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
                            toastr.error(data.error_string[i], data.inputerror[i], {
                                positionClass: "toast-top-center",
                                closeButton: true,
                                progressBar: true,
                                toastClass: "toast ngx-toastr",
                                timeOut: 10000,
                                extendedTimeOut: 10000,
                                tapToDismiss: false,
                                disableTimeOut: false,
                                titleClass: "toast-title",
                                messageClass: "toast-message",
                                toastContainer: "#toast-container",
                                debug: false,
                                newestOnTop: true,
                                preventDuplicates: false,
                                preventOpenDuplicates: false,
                                rtl: false,
                                enableHtml: false,
                                bodyOutputType: "default",
                                iconClasses: {
                                    error: "toast-error",
                                    info: "toast-info",
                                    success: "toast-success",
                                    warning: "toast-warning",
                                    question: "toast-question"
                                },
                                iconClass: "toast-error",
                                target: "body",
                                closeHtml: "<button type='button' class='btn btn-secondary float-right toastr-close'><i class='fas fa-times'></i></button>",
                                newestFirst: true,
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                closeMethod: "fadeOut",
                                closeDuration: 300,
                                closeEasing: "swing",
                                closeOnHover: false,
                                closeButton: false,
                                progressBar: false,
                                tapToDismiss: true,
                                onShown: undefined,
                                onHidden: undefined,
                                onCloseClick: undefined,
                                onHover: undefined,
                                onClick: undefined,
                                id: undefined,
                                message: "",
                                title: "",
                                options: {}
                            }).css("font-size", "18px");
                        }
                    }

                    $('#btnSave').text('Daftar'); //change button text
                    $('#btnSave').attr('disabled', false); //set button enable 


                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error adding / update data');
                    $('#btnSave').text('Daftar'); //change button text
                    $('#btnSave').attr('disabled', false); //set button enable 

                }
            });
        }
    </script>
</main>