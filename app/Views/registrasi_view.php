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
                                <?= csrf_field() ?> <div class="row">
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
                                            <input type="text" class="form-control" name="nama_lengkap">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>No. Handphone</label>
                                            <input type="text" class="form-control" name="no_handphone">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email">
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Kampus</label>
                                            <select name="kampus" class="form-control">
                                                <option value="1">Cicurug</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>

                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <label>Program Studi</label>
                                            <select name="prodi_id" class="form-control" id="prodi_id">
                                                <option value="">Pilih Program Studi</option>
                                                <?php foreach ($prodi as $p) : ?>
                                                    <option value="<?= $p['program_studi_id']; ?>"><?= $p['nama_program_studi']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas <span class="text-danger">*) Pilih prodi terlebih dahulu</span></label>
                                            <select name="kelas_id" class="form-control" id="kelas_id">
                                                <option value="">Pilih Kelas</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Beasiswa</label>
                                            <select name="beasiswa" class="form-control">
                                                <option value="TIDAK">TIDAK</option>
                                                <option value="YA">YA</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Informasi Pendaftaran Dari?</label>
                                            <select name="referensi_id" class="form-control">
                                                <option value="">Pilih Referensi</option>
                                                <?php foreach ($referensi as $r) : ?>
                                                    <option value="<?= $r['referensi_id']; ?>"><?= $r['nama_referensi']; ?></option>
                                                <?php endforeach; ?>
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
    // Definisikan Base URL secara global
    const baseUrl = "http://localhost/registrasi_sakti/public/";

    $(document).ready(function() {
        // 1. Fungsi Ambil Data Kelas Berdasarkan Prodi
        $('#prodi_id').change(function() {
            const prodiId = $(this).val();
            var kelasDropdown = $('#kelas_id');
            
            // Reset dropdown kelas
            kelasDropdown.empty().append('<option value="">Loading...</option>');
            
            if (prodiId !== "") {
                $.ajax({
                    url: baseUrl + "registrasi/getKelasByProdi/" + prodiId, // Menuju function di controller
                    type: "GET",
                    dataType: "JSON",
                    success: function(response) {
                        kelasDropdown.empty().append('<option value="">Pilih Kelas</option>');
                        if (response.success === true) {
                            // alert('me');
                            $.each(response.data, function(key, item) {
                                kelasDropdown.append('<option value="' + item.kelas_id + '">' + item.nama_kelas + '</option>');
                            });
                        }
                    },
                    error: function() {
                        kelasDropdown.empty().append('<option value="">Gagal memuat data</option>');
                    }
                });
            } else {
                kelasDropdown.empty().append('<option value="">Pilih Kelas</option>');
            }
        });

        // Hapus pesan error saat input berubah
        $("input, select").change(function() {
            $(this).removeClass('is-invalid');
            $(this).next('.help-block').empty();
        });
    });

    // 2. Fungsi Simpan Pendaftaran Baru
    function daftarBaru() {
    const btn = $('.btn-daftar');
    btn.text('Sedang memproses...').attr('disabled', true);

    // Bersihkan error lama
    $('.form-control').removeClass('is-invalid');
    $('.help-block').empty();

    $.ajax({
        url: baseUrl + "registrasi/simpan", // Hapus garis miring di akhir jika perlu
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data) {
            // Sesuai dengan Controller: return $this->response->setJSON(['success' => true...])
            if (data.success === true) {
                toastr.success(data.message);
                alert('Pendaftaran Berhasil! Silahkan login dengan Username: Nama dan Password: Email Anda.');
                window.location.href = baseUrl + "auth";
            } else {
                // Sesuai dengan Controller: 'errors' => $this->validator->getErrors()
                if (data.errors) {
                    $.each(data.errors, function(key, value) {
                        $('[name="' + key + '"]').addClass('is-invalid');
                        $('[name="' + key + '"]').next('.help-block').text(value).addClass('text-danger');
                    });
                    toastr.error("Beberapa input tidak valid.");
                } else {
                    toastr.error(data.message || 'Mohon periksa kembali form Anda.');
                }
            }
            btn.text('Daftar').attr('disabled', false);
        },
        error: function(xhr) {
            console.error(xhr.responseText);
            toastr.error('Terjadi kesalahan sistem/server.');
            btn.text('Daftar').attr('disabled', false);
        }
    });
}
</script>
</main>