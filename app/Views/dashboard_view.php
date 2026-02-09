<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Fixed Sidebar</title>
    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->
    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE 4 | Fixed Sidebar" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS. Fully accessible with WCAG 2.1 AA compliance."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel, WCAG compliant"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="<?= base_url('adminlte/dist/'); ?>css/adminlte.css" as="style" />
    <!--end::Accessibility Features-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media='all'"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?= base_url('adminlte/dist/'); ?>css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="<?= base_url('adminlte/dist/'); ?>assets/img/user2-160x160.jpg"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline"><?= esc(session('username') ?: 'Admin') ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="<?= base_url('adminlte/dist/'); ?>assets/img/user2-160x160.jpg"
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p>
                    <?= esc(session('username') ?: 'Admin') ?>
                    <small>Dashboard</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Body-->
                <!-- <li class="user-body">
                </li> -->
                <!--end::Menu Body-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="<?= base_url('dashboard') ?>" class="btn btn-default btn-flat">Dashboard</a>
                  <a href="<?= base_url('logout') ?>" class="btn btn-default btn-flat float-end text-danger">Logout</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="<?= base_url('adminlte/dist/'); ?>index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="<?= base_url('adminlte/dist/'); ?>assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Calon Pendaftar
                  </p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0 fw-bold">Pendaftar</h3></div>
              <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item active" aria-current="page">Fixed Layout</li>
                </ol>
              </div> -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <?php if (session('success')): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= esc(session('success')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>
            <?php if (session('error')): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= esc(session('error')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php endif; ?>
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Tabel Calon Pendaftar</h3>
                    <div class="card-tools">
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-collapse"
                        title="Collapse"
                      >
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                        title="Remove"
                      >
                        <i class="bi bi-x-lg"></i>
                      </button>
                      <button type="button" class="btn btn-tool" title="Refresh" onclick="window.location.reload()"><i class="bi bi-arrow-repeat"></i></button>
                    </div>
                  </div>
                  <!-- <div class="card-body">
                  <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Simple Full Width Table</h3>
                    <div class="card-tools">
                      <ul class="pagination pagination-sm float-end">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div> -->
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>NIK</th>
                          <th>Nama Lengkap</th>
                          <th>No Handphone</th>
                          <th>Email</th>
                          <th>Beasiswa</th>
                          <th>Kelas</th>
                          <th>Tanggal Pendaftaran</th>
                          <th>Status</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if (!empty($pendaftar)): ?>
                          <?php foreach ($pendaftar as $no => $row): ?>
                        <tr class="align-middle" data-nik="<?= esc($row['nik']) ?>">
                          <td><?= $no + 1 ?></td>
                          <td><?= esc($row['nik']) ?></td>
                          <td><?= esc($row['nama_lengkap']) ?></td>
                          <td><?= esc($row['no_handphone']) ?></td>
                          <td><?= esc($row['email']) ?></td>
                          <td><?= esc($row['beasiswa']) ?></td>
                          <td><?= esc($row['nama_kelas'] ?? '-') ?></td>
                          <td><?= isset($row['created_at']) ? date('d/m/Y', strtotime($row['created_at'])) : '-' ?></td>
                          <td>
                            <select class="form-select form-select-sm status-select" data-nik="<?= esc($row['nik']) ?>" aria-label="Status">
                              <option value="" <?= empty($row['status']) ? 'selected' : '' ?>>-- Pilih --</option>
                              <option value="diterima" <?= isset($row['status']) && $row['status'] === 'diterima' ? 'selected' : '' ?>>Diterima</option>
                              <option value="ditolak" <?= isset($row['status']) && $row['status'] === 'ditolak' ? 'selected' : '' ?>>Ditolak</option>
                            </select>
                          </td>
                          <td>
                            <div class="btn-group btn-group-sm">
                              <button type="button" class="btn btn-info btn-edit" title="Edit" data-nik="<?= esc($row['nik']) ?>"><i class="bi bi-pencil"></i></button>
                              <button type="button" class="btn btn-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                            </div>
                          </td>
                        </tr>
                          <?php endforeach; ?>
                        <?php else: ?>
                        <tr>
                          <td colspan="10" class="text-center py-4 text-muted">Belum ada data pendaftar.</td>
                        </tr>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

      <!-- Modal Edit -->
      <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalEditLabel">Edit Calon Pendaftar</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div id="editModalError" class="alert alert-danger d-none" role="alert"></div>
              <form id="formEditPendaftar">
                <?= csrf_field() ?>
                <input type="hidden" name="nik" id="edit_nik" />
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">NIK</label>
                      <input type="text" class="form-control bg-secondary" id="edit_nik_display" readonly disabled />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                      <input type="text" name="nama_lengkap" id="edit_nama_lengkap" class="form-control" required maxlength="100" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">No. Handphone <span class="text-danger">*</span></label>
                      <input type="text" name="no_handphone" id="edit_no_handphone" class="form-control" required maxlength="15" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Email <span class="text-danger">*</span></label>
                      <input type="email" name="email" id="edit_email" class="form-control" required maxlength="100" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Kampus <span class="text-danger">*</span></label>
                      <select name="kampus" id="edit_kampus" class="form-select" required>
                        <option value="1">Cicurug</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Program Studi <span class="text-danger">*</span></label>
                      <select name="prodi_id" id="edit_prodi_id" class="form-select" required>
                        <option value="">Pilih Program Studi</option>
                        <?php if (!empty($prodi)): foreach ($prodi as $p): ?>
                          <option value="<?= (int) $p['program_studi_id'] ?>"><?= esc($p['nama_program_studi']) ?></option>
                        <?php endforeach; endif; ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Kelas <span class="text-danger">*</span></label>
                      <select name="kelas_id" id="edit_kelas_id" class="form-select" required>
                        <option value="">Pilih Kelas</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Beasiswa <span class="text-danger">*</span></label>
                      <select name="beasiswa" id="edit_beasiswa" class="form-select" required>
                        <option value="TIDAK">TIDAK</option>
                        <option value="YA">YA</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Referensi Informasi</label>
                      <select name="referensi_id" id="edit_referensi_id" class="form-select">
                        <option value="">Pilih Referensi</option>
                        <?php if (!empty($referensi)): foreach ($referensi as $r): ?>
                          <option value="<?= (int) $r['referensi_id'] ?>"><?= esc($r['nama_referensi']) ?></option>
                        <?php endforeach; endif; ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Status</label>
                      <select name="status" id="edit_status" class="form-select">
                        <option value="">-- Pilih --</option>
                        <option value="diterima">Diterima</option>
                        <option value="ditolak">Ditolak</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary" id="btnSimpanEdit"><i class="bi bi-check-lg me-1"></i> Simpan</button>
            </div>
          </div>
        </div>
      </div>

      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2025&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="<?= base_url('adminlte/dist/'); ?>js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <script>
      (function () {
        var baseUrl = '<?= base_url() ?>';
        var modalEl = document.getElementById('modalEdit');
        var modal = modalEl ? new bootstrap.Modal(modalEl) : null;
        var form = document.getElementById('formEditPendaftar');
        var editError = document.getElementById('editModalError');
        var btnSimpan = document.getElementById('btnSimpanEdit');

        function showEditError(msg) {
          if (!editError) return;
          editError.textContent = msg || '';
          editError.classList.toggle('d-none', !msg);
        }

        function loadKelas(prodiId, selectedKelasId, done) {
          var sel = document.getElementById('edit_kelas_id');
          if (!sel) { if (done) done(); return; }
          sel.innerHTML = '<option value="">Loading...</option>';
          if (!prodiId) {
            sel.innerHTML = '<option value="">Pilih Kelas</option>';
            if (done) done();
            return;
          }
          fetch(baseUrl + 'registrasi/getKelasByProdi/' + prodiId)
            .then(function (r) { return r.json(); })
            .then(function (res) {
              sel.innerHTML = '<option value="">Pilih Kelas</option>';
              if (res.success && res.data && res.data.length) {
                res.data.forEach(function (item) {
                  var opt = document.createElement('option');
                  opt.value = item.kelas_id;
                  opt.textContent = item.nama_kelas;
                  if (String(item.kelas_id) === String(selectedKelasId)) opt.selected = true;
                  sel.appendChild(opt);
                });
              }
              if (done) done();
            })
            .catch(function () {
              sel.innerHTML = '<option value="">Gagal memuat</option>';
              if (done) done();
            });
        }

        function openEditModal(nik) {
          showEditError('');
          fetch(baseUrl + 'dashboard/getByNik/' + nik)
            .then(function (r) { return r.json(); })
            .then(function (res) {
              if (!res.success || !res.data) {
                showEditError(res.message || 'Data tidak ditemukan');
                return;
              }
              var d = res.data;
              document.getElementById('edit_nik').value = d.nik;
              document.getElementById('edit_nik_display').value = d.nik;
              document.getElementById('edit_nama_lengkap').value = d.nama_lengkap || '';
              document.getElementById('edit_no_handphone').value = d.no_handphone || '';
              document.getElementById('edit_email').value = d.email || '';
              document.getElementById('edit_kampus').value = d.kampus || '1';
              document.getElementById('edit_prodi_id').value = d.program_studi_id || '';
              document.getElementById('edit_beasiswa').value = d.beasiswa || 'TIDAK';
              document.getElementById('edit_referensi_id').value = d.referensi_id || '';
              document.getElementById('edit_status').value = d.status || '';
              loadKelas(d.program_studi_id, d.kelas_id, function () {
                document.getElementById('edit_kelas_id').value = d.kelas_id || '';
                if (modal) modal.show();
              });
            })
            .catch(function () {
              showEditError('Gagal memuat data.');
            });
        }

        document.getElementById('edit_prodi_id').addEventListener('change', function () {
          loadKelas(this.value, null);
        });

        if (btnSimpan) {
          btnSimpan.addEventListener('click', function () {
            if (!form || !form.checkValidity()) {
              form.reportValidity();
              return;
            }
            showEditError('');
            btnSimpan.disabled = true;
            var fd = new FormData(form);
            fetch(baseUrl + 'dashboard/update', {
              method: 'POST',
              body: fd,
              headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
              .then(function (r) { return r.json(); })
              .then(function (res) {
                btnSimpan.disabled = false;
                if (res.success && res.data) {
                  var row = document.querySelector('tr[data-nik="' + res.data.nik + '"]');
                  if (row) {
                    var cells = row.querySelectorAll('td');
                    if (cells.length >= 9) {
                      cells[2].textContent = res.data.nama_lengkap || '';
                      cells[3].textContent = res.data.no_handphone || '';
                      cells[4].textContent = res.data.email || '';
                      cells[5].textContent = res.data.beasiswa || '';
                      cells[6].textContent = res.data.nama_kelas || '-';
                      var statusSel = row.querySelector('.status-select');
                      if (statusSel) statusSel.value = res.data.status || '';
                    }
                  }
                  if (modal) modal.hide();
                } else {
                  showEditError(res.message || (res.errors ? Object.values(res.errors).join(' ') : 'Gagal menyimpan'));
                }
              })
              .catch(function () {
                btnSimpan.disabled = false;
                showEditError('Gagal menyimpan. Coba lagi.');
              });
          });
        }

        document.querySelectorAll('.btn-edit').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var nik = this.getAttribute('data-nik');
            if (nik) openEditModal(nik);
          });
        });
      })();
    </script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
