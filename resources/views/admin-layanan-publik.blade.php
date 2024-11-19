<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Layanan Publik - Desa Sungai Keran</title>
  <link rel="stylesheet" href="style.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;700&family=Lora:wght@400;700&family=Poppins:wght@400;700&family=Lato:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    *,
    ::after,
    ::before {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      font-size: 0.875rem;
      opacity: 1;
      overflow-y: scroll;
      margin: 0;
    }

    a {
      cursor: pointer;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
    }

    li {
      list-style: none;
    }

    h4 {
      font-family: 'Poppins', sans-serif;
      font-size: 1.3rem;
      color: rgb(196, 0, 39);
    }

    h5 {
      font-size: 1.2rem;
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
    }

    .form-label {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <aside id="sidebar" class="sticky-top" style="height: 100vh; overflow-y: auto;">
      <!-- Content fo Sidebar -->
      <div class="h100">
        <div class="sidebar-logo collapsed-icon">
          <a href="#">Desa Sungai Keran</a>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="admin-dashboard.html" class="sidebar-link" id="admin-dashboard">
              <i class="fa-solid fa-list pe-2"></i>
              <span class="link-text">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-profile-desa.html" class="sidebar-link" id="admin-profile-desa">
              <i class="fa-solid fa-id-card pe-2"></i>
              <span class="link-text">Profile Desa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-perangkat-desa.html" class="sidebar-link" id="admin-perangkat-desa">
              <i class="fa-solid fa-user-tie pe-2"></i>
              <span class="link-text">Perangkat Desa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-lembaga-desa.html" class="sidebar-link" id="admin-lembaga-desa">
              <i class="fa-solid fa-landmark pe-2"></i>
              <span class="link-text">Lembaga Desa</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-layanan-publik.html" class="sidebar-link" id="admin-layanan-publik">
              <i class="fa-solid fa-hands-helping pe-2"></i>
              <span class="link-text">Layanan Publik</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-layanan-administrasi.html" class="sidebar-link" id="admin-layanan-administrasi">
              <i class="fa-solid fa-file-signature pe-2"></i>
              <span class="link-text">Layanan Administrasi</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-pengumuman.html" class="sidebar-link" id="admin-pengumuman">
              <i class="fa-solid fa-bullhorn pe-2"></i>
              <span class="link-text">Pengumuman</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-kegiatan.html" class="sidebar-link" id="admin-kegiatan">
              <i class="fa-solid fa-calendar-day pe-2"></i>
              <span class="link-text">Kegiatan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="admin-kontak.html" class="sidebar-link" id="admin-kontak">
              <i class="fa-solid fa-address-book pe-2"></i>
              <span class="link-text">Kontak</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a href="kelola-pengguna.html" class="sidebar-link" id="kelola-pengguna">
              <i class="fa-solid fa-user pe-2"></i>
              <span class="link-text">Pengguna</span>
            </a>
          </li>
        </ul>

      </div>
    </aside>
    <div class="main">
      <nav class="navbar navbar-expand px-3 border-bottom">
        <button class="btn" id="sidebar-toggle" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <img src="img/6.jpg" class="avatar img-fluid" alt="User Avatar">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item">
                  <i class="fa-solid fa-user-gear pe-2"></i>
                  Profile
                </a>
                <a href="#" class="dropdown-item">
                  <i class="fa-solid fa-right-from-bracket pe-2"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <main class="content px-3 py-2">
        <div class="container-fluid" id="admin-layanan-publik">
          <div class="mt-3 mb-3">
            <h4>Kelola Layanan Publik</h4>
          </div>
          <div class="row">
            <div class="container">
              <!-- Card Form untuk Tambah Fasilitas -->
              <div class="row">
                <div class="col-12">
                  <div class="card" id="tambahFasilitasCard">
                    <div class="card-body">
                      <h5>Tambah Fasilitas Desa
                        <hr>
                      </h5>
                      <form id="tambahFasilitasForm">
                        <!-- Dropdown untuk memilih kategori fasilitas -->
                        <div class="form-group row mb-3">
                          <label for="kategoriFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">Kategori
                            Fasilitas:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <select class="form-control" id="kategoriFasilitas" required>
                              <option value="">-- pilih kategori --</option>
                              <option value="pendidikan">Pendidikan</option>
                              <option value="publik">Publik</option>
                            </select>
                          </div>
                        </div>

                        <!-- Input Nama Fasilitas -->
                        <div class="form-group row mb-3">
                          <label for="namaFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">Nama
                            Fasilitas:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <input type="text" class="form-control" id="namaFasilitas" required>
                          </div>
                        </div>

                        <!-- Input URL Alamat -->
                        <div class="form-group row mb-3">
                          <label for="urlAlamat" class="col-lg-2 col-md-3 col-sm-4 form-label">URL Alamat:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <input type="url" class="form-control" id="urlAlamat" required>
                          </div>
                        </div>

                        <!-- Input Foto -->
                        <div class="form-group row mb-3">
                          <label for="fotoFasilitas" class="col-lg-2 col-md-3 col-sm-4 form-label">Foto
                            Fasilitas:</label>
                          <div class="col-lg-10 col-md-9 col-sm-8">
                            <input type="file" class="form-control" id="fotoFasilitas" accept="image/*" required>
                          </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="d-flex justify-content-end mt-4">
                          <button type="submit" class="btn btn-simpan">Simpan</button>
                          <button type="button" onclick="toggleTambahFasilitasCard()"
                            class="btn btn-batal ms-2">Batal</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Tabel Fasilitas Pendidikan -->
              <h5 class="mt-3">Fasilitas Pendidikan</h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>URL Alamat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="fasilitasPendidikanTableBody">
                  <!-- Data fasilitas pendidikan akan ditambahkan di sini -->
                </tbody>
              </table>

              <!-- Tabel Fasilitas Publik -->
              <h5 class="mt-5">Fasilitas Publik</h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>URL Alamat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="fasilitasPublikTableBody">
                  <!-- Data fasilitas publik akan ditambahkan di sini -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <script>
    const sidebarToggle = document.querySelector("#sidebar-toggle");
    sidebarToggle.addEventListener("click", function () {
      document.querySelector("#sidebar").classList.toggle("collapsed");
    });

    // Active sidebar
    const currentUrl = window.location.href;

    const sidebarItems = [
      { id: 'admin-dashboard', url: 'admin-dashboard.html' },
      { id: 'admin-profile-desa', url: 'admin-profile-desa.html' },
      { id: 'admin-perangkat-desa', url: 'admin-perangkat-desa.html' },
      { id: 'admin-lembaga-desa', url: 'admin-lembaga-desa.html' },
      { id: 'admin-layanan-publik', url: 'admin-layanan-publik.html' },
      { id: 'admin-layanan-administrasi', url: 'admin-layanan-administrasi.html' },
      { id: 'admin-pengumuman', url: 'admin-pengumuman.html' },
      { id: 'admin-kegiatan', url: 'admin-kegiatan.html' },
      { id: 'admin-kontak', url: 'admin-kontak.html' },
      { id: 'kelola-pengguna', url: 'kelola-pengguna.html' }
    ];

    sidebarItems.forEach(item => {
      if (currentUrl.includes(item.url)) {
        const sidebarLink = document.getElementById(item.id);
        if (sidebarLink) {
          sidebarLink.classList.add('active');
        }
      }
    });


    // tambah layanan publik
    let fasilitasPendidikan = [];
    let fasilitasPublik = [];

    // Fungsi untuk menampilkan fasilitas pada tabel berdasarkan kategori
    function tampilkanFasilitas() {
      const bodyTablePendidikan = document.getElementById("fasilitasPendidikanTableBody");
      const bodyTablePublik = document.getElementById("fasilitasPublikTableBody");

      bodyTablePendidikan.innerHTML = "";
      bodyTablePublik.innerHTML = "";

      // Tampilkan fasilitas pendidikan
      fasilitasPendidikan.forEach((fasilitas, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
      <td>${index + 1}</td>
      <td>${fasilitas.nama}</td>
      <td>${fasilitas.url}</td>
      <td><img src="${fasilitas.foto}" alt="Foto ${fasilitas.nama}" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
      <td>
        <button class="btn btn-edit btn-sm" onclick="editFasilitas(${index}, 'pendidikan')">Edit</button>
        <button class="btn btn-hapus btn-sm" onclick="hapusFasilitas(${index}, 'pendidikan')">Hapus</button>
      </td>
    `;
        bodyTablePendidikan.appendChild(row);
      });

      // Tampilkan fasilitas publik
      fasilitasPublik.forEach((fasilitas, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
      <td>${index + 1}</td>
      <td>${fasilitas.nama}</td>
      <td>${fasilitas.url}</td>
      <td><img src="${fasilitas.foto}" alt="Foto ${fasilitas.nama}" class="img-thumbnail" style="width: 50px; height: 50px;"></td>
      <td>
        <button class="btn btn-edit btn-sm" onclick="editFasilitas(${index}, 'publik')">Edit</button>
        <button class="btn btn-hapus btn-sm" onclick="hapusFasilitas(${index}, 'publik')">Hapus</button>
      </td>
    `;
        bodyTablePublik.appendChild(row);
      });
    }

    // Fungsi untuk menambah fasilitas
    document.getElementById("tambahFasilitasForm").addEventListener("submit", function (e) {
      e.preventDefault();

      const kategori = document.getElementById("kategoriFasilitas").value;
      const nama = document.getElementById("namaFasilitas").value;
      const url = document.getElementById("urlAlamat").value;
      const fotoInput = document.getElementById("fotoFasilitas");
      const foto = URL.createObjectURL(fotoInput.files[0]);

      const fasilitasBaru = {
        nama,
        url,
        foto
      };

      if (kategori === "pendidikan") {
        fasilitasPendidikan.push(fasilitasBaru);
      } else {
        fasilitasPublik.push(fasilitasBaru);
      }

      tampilkanFasilitas();
      alert("Fasilitas berhasil disimpan.");  // Alert untuk simpan
      document.getElementById("tambahFasilitasForm").reset();
    });

    // Fungsi untuk menghapus fasilitas
    function hapusFasilitas(index, kategori) {
      if (kategori === "pendidikan") {
        fasilitasPendidikan.splice(index, 1);
      } else {
        fasilitasPublik.splice(index, 1);
      }

      tampilkanFasilitas();
      alert("Fasilitas berhasil dihapus.");  // Alert untuk hapus
    }

    // Fungsi untuk mengedit fasilitas
    function editFasilitas(index, kategori) {
      let fasilitasEdit;

      if (kategori === "pendidikan") {
        fasilitasEdit = fasilitasPendidikan[index];
      } else {
        fasilitasEdit = fasilitasPublik[index];
      }

      document.getElementById("kategoriFasilitas").value = kategori;
      document.getElementById("namaFasilitas").value = fasilitasEdit.nama;
      document.getElementById("urlAlamat").value = fasilitasEdit.url;

      document.getElementById("fotoFasilitas").value = '';

      document.getElementById("tambahFasilitasForm").onsubmit = function (e) {
        e.preventDefault();

        const kategori = document.getElementById("kategoriFasilitas").value;
        const nama = document.getElementById("namaFasilitas").value;
        const url = document.getElementById("urlAlamat").value;
        const fotoInput = document.getElementById("fotoFasilitas");
        const foto = fotoInput.files.length ? URL.createObjectURL(fotoInput.files[0]) : fasilitasEdit.foto;

        const fasilitasUpdate = {
          nama,
          url,
          foto
        };

        if (kategori === "pendidikan") {
          fasilitasPendidikan[index] = fasilitasUpdate;
        } else {
          fasilitasPublik[index] = fasilitasUpdate;
        }

        tampilkanFasilitas();
        alert("Fasilitas berhasil diupdate.");  // Alert untuk edit/update
      };
    }

  </script>
</body>

</html>