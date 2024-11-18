<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H2H</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
      
    </style>
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
            <a href="#" class="nav-link link-body-emphasis">
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
            <a href="{{route('logout')}}" class="nav-link link-body-emphasis">
              <i class="bi bi-box-arrow-right" style="font-size: 1.3rem;"></i>
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              <span class="text-nav">Logout</span>
          </li>
          </ul>
    </div>


    <div class="content">
      <nav class="navbar">
        <div class="container-fluid">
          <span class="navbar-brand mb-0">Welcome back Admin</span>
          <div class="navbar-item">
            <form>
            <div  class="search">
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
        </nav>



        <div class="table-data">
            <div class="book">
                <div class="head">
                    <h3>Data</h3>
                    <div class="add">
                        <a href="{{ route('operator.create_admin') }}" class="btn btn-success" data-toggle="modal">
                            <i class="bi bi-plus-lg" style="color: white;"></i>
                            <span>Add data</span>
                        </a>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA</th>
                            <th>NO.HP</th>
                            <th>EMAIL</th>
                            <th>AKSES</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>test2</td>
                            <td></td>
                            <td>test2@gmail.com</td>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <i class="bi bi-three-dots" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    </i>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-pencil">Edit</i>
                                      </a></li>
                                      <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-trash">Delete</i>
                                      </a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>test1</td>
                            <td></td>
                            <td>test1@gmail.com</td>
                            <td></td>
                            <td>
                                <div class="dropdown">
                                    <i class="bi bi-three-dots" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    </i>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-pencil">Edit</i>
                                      </a></li>
                                      <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-trash">Delete</i>
                                      </a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>operator</td>
                            <td></td>
                            <td>operator@gmail.com</td>
                            <td>operator</td>
                            <td>
                                <div class="dropdown">
                                    <i class="bi bi-three-dots" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    </i>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-pencil">Edit</i>
                                      </a></li>
                                      <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-trash">Delete</i>
                                      </a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ryan Feriza Rizky</td>
                            <td></td>
                            <td>ryanferizarizky102@gmail.com</td>
                            <td>operator</td>
                            <td>
                                <div class="dropdown">
                                    <i class="bi bi-three-dots" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    </i>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-pencil">Edit</i>
                                      </a></li>
                                      <li><a class="dropdown-item" href="#">
                                        <i class="bi bi-trash">Delete</i>
                                      </a></li>
                                    </ul>
                                  </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <div class="clearfix">
                            <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#"><i class="bi bi-chevron-left"></i></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#"><i class="bi bi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </tfoot>
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </body>
</html>