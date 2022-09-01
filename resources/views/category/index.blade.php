<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Simple Tables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('/recipe') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/recipe-ingredients') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Recipe Ingridients
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('category') }}" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Category
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url(('property')) }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Property
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Category</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                  <a class="btn btn-primary mb-3" href="{{ url('category/create') }}"><i class="nav-icon fas fa-plus"></i>&nbsp; Add</a>
                    <table id="table_ingredient" class="table table-strip display mb-4">
                        <thead>
                            <tr>
                                <th style="width: 5%;">No. </th>
                                <th>Name</th>
                                <th style="width: 50%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php
                              $no=1
                          @endphp
                          @foreach ($categories as $category)
                          <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $category->name }}</td>
                              <td>
                                <div class="row">
                                  <div class="col-2">
                                    <a href="category/{{ $category->id }}/edit" class="btn btn-warning">Update</a>
                                  </div>
                                  <div class="col-2">
                                    <form action="category/{{ $category->id }}" method="post">
                                      @csrf
                                      <input type="hidden" name="_method" value="delete" />
                                      <button type="submit" class="btn btn-danger">Delete</button></form>
                                  </div>
                                </div>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(function () {
          
          var table = $('#table_category').DataTable();
          
        });
      </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset(('plugins/bootstrap/js/bootstrap.bundle.min.js')) }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>
