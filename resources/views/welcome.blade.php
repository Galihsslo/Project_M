<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-secondary">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('admin/images/favicon.png') }}" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                Bootstrap
            </a>
            <a href="/login">Login</a>
        </div>
    </nav>
    {{-- @livewire('employe') --}}
    <div>
        {{-- Close your eyes. Count to one. That is how long forever feels. --}}


        <div class="container">
            <!-- START FORM -->
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <form>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10"><button type="button" class="btn btn-primary"
                                name="submit">SIMPAN</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- AKHIR FORM -->

            <!-- START DATA -->
            <h1>Data Pegawai</h1>
            <div class="my-5 p-5 bg-body rounded shadow-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-4">Alamat</th>
                            <th class="col-md-3">Wali</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php $nomor = 1; ?>
                            @foreach ($user as $item)
                        <tr>
                            <td>{{ $nomor }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->wali }}</td>
                            <?php $nomor++; ?>
                            @endforeach
                            {{-- 
                            <td>1</td>
                            <td>Muhammad {{ $nama }} </td>
                            <td>muhammad@gmail.com</td>
                            <td>Yogyakarta</td>
                            <td> --}}
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <!-- AKHIR DATA -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

</body>

</html>
