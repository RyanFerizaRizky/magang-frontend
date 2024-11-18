<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H2H</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/style1.css') }}"> --}}
    <link rel="stylesheet" href="{{ secure_asset('css/style1.css') }}">
  </head>
  <body>
    <div class="sidebar d-flex flex-column p-3">
        <a href="/" class="d-flex justify-content-center">
          <img src="{{ asset('img/logopnj.png') }}" width="100" alt="">
        </a>
        <span class="fs-4">Politeknik Negeri Jakarta</span>
        <span class="fs-6">Admin Dashboard</span>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" style="background-color: #008797;" aria-current="page">
              <i class="bi-act bi-columns-gap" style="font-size: 1.3rem;"></i>
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              <span class="text-nav-act">Home</span>
            </a>
          </li>
          <li>
            <a href="booklist.html" class="nav-link link-body-emphasis">
              <i class="bi bi-journal-bookmark" style="font-size: 1.3rem;"></i>
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              <span class="text-nav">Data</span>
            </a>
          </li>
        </ul>
        <ul class="nav nav-pills flex-column me-auto">
        <li>
            <a href="#" class="nav-link link-body-emphasis">
              <i class="bi bi-gear" style="font-size: 1.3rem;"></i>
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              <span class="text-nav">Settings</span>
            </a>
          </li>
          <li>
            <a href="login.html" class="nav-link link-body-emphasis">
              <i class="bi bi-box-arrow-right" style="font-size: 1.3rem;"></i>
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              <span class="text-nav">Logout</span>
            </a>
          </li>
          </ul>
          
    </div>

    <div class="content p-4 ms-auto" style="max-width: 80%;">
        <!-- Add 'p-4' for padding and adjust the max-width as needed -->
        <nav class="navbar">
          <div class="container-fluid">
            <span class="navbar-brand mb-0">Welcome back Admin</span>
            <div class="navbar-item">
              <form>
                <div class="search">
                  <i class="bi-nav bi-search"></i>
                  <input class="search-input" type="search" placeholder="Cari apapun disini">
                </div>
              </form>
              <div class="notif">
                <i class="bi bi-bell" style="font-size: 1.5rem;"></i>
              </div>
              <div class="profile">
                <i class="bi bi-person-circle" style="font-size: 2.5rem;"></i>
              </div>
            </div>
          </div>
        </nav>
        
        <div class="container mt-5">
          <h3 class="mb-4">Form USER</h3>
          <form>
            <!-- Nama -->
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
            </div>
    
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email">
            </div>
    
            <!-- No HP -->
            <div class="mb-3">
              <label for="no_hp" class="form-label">No HP</label>
              <input type="text" class="form-control" id="no_hp" placeholder="Masukkan nomor HP">
            </div>
    
            <!-- Hak Akses -->
            <div class="mb-3">
              <label for="akses" class="form-label">Hak Akses</label>
              <select class="form-select" id="akses">
                <option selected>Operator Kampus</option>
                <option value="AdminKeuangan">Admin Keuangan</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </body>
</html>