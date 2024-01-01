<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>iFamily Card - Hubungan Kartu Keluarga</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="/css/style-header.css">
</head>

<body>
  {{-- Start Title Sidebar --}}
  <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
      <div class="sidebar-brand">
        <h2>
          <span class="las la-smile"></span>
          <span>iFamilyCard</span>
        </h2>
      </div>
  {{-- End Title Sidebar --}}

  {{-- Start Sidebar --}}
    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="/dashboard"><span class="las la-home"></span>
                <span>Home</span></a>
            </li>
            <li>
                <a href="/agama"><span class="las la-book"></span>
                <span>Agama</span></a>
            </li>
            <li>
                <a href="/penduduk"><span class="las la-users"></span>
                <span>Penduduk</span></a>
            </li>
            <li>
                <a href="/kk"><span class="las la-film"></span>
                <span>Kartu Keluarga</span></a>
            </li>
            <li>
                <a href="/anggotakk"><span class="las la-users"></span>
                <span>Anggota Keluarga</span></a>
            </li>
            <li>
                <a href="/hubungankk"  class="active"><span class="las la-heart"></span>
                <span>Hubungan Keluarga</span></a>
            </li>
            <li>
                <a href="/logout"><span class="las la-sign-out-alt"></span>
                <span>Logout</span></a>
            </li>
        </ul>
    </div>
  </div>
  {{-- End Sidebar --}}

  {{-- Start List --}}
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> Dashboard
            </h2>
        </header>
    
        <main>
          <div class="container">
            <h1>List Hubungan Kartu Keluarga</h1>
            <table width=100% border=1>
              <tr class="thead">
                  <th>No</th>
                  <th>Hubungan Kartu Keluarga</th>
                  <th>Action</th>
              </tr>
            <?php $i = 1; ?>
              <tr class="tbody">
                <form action="/hubungankk/create" method="get">
                  <button type="submit" class="btn btn-success">New Data</button>
                </form>
                @foreach ($data as $hubungankk)
                  <tr>
                    <td><?= $i++; ?></td>
                    <td>{{ $hubungankk->hubungankk }}</td>
                    <td>
                      <form action="/hubungankk/{{ $hubungankk->id }}/edit" method="GET">
                        <button class="btn btn-warning">Edit</button>
                      </form>
                      <form action="/hubungankk/{{ $hubungankk->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apa Anda yakin menghapus data ini?')">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
            </table>
          </div>
        </main>
    </div>
    {{-- End List --}}
</body>
</html>