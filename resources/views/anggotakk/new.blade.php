<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>iFamily Card - New Anggota Kartu Keluarga</title>
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
                <a href="/dashboard" onclick="return confirm('Apakah Anda Ingin Mengabaikan Perubahan ini?')"><span class="las la-home"></span>
                <span>Home</span></a>
            </li>
            <li>
                <a href="/agama" onclick="return confirm('Apakah Anda Ingin Mengabaikan Perubahan ini?')"><span class="las la-book"></span>
                <span>Agama</span></a>
            </li>
            <li>
                <a href="/penduduk" onclick="return confirm('Apakah Anda Ingin Mengabaikan Perubahan ini?')"><span class="las la-users"></span>
                <span>Penduduk</span></a>
            </li>
            <li>
                <a href="/kk" onclick="return confirm('Apakah Anda Ingin Mengabaikan Perubahan ini?')"><span class="las la-film"></span>
                <span>Kartu Keluarga</span></a>
            </li>
            <li>
                <a href="/anggotakk" onclick="return confirm('Apakah Anda Ingin Mengabaikan Perubahan ini?')" class="active"><span class="las la-users"></span>
                <span>Anggota Keluarga</span></a>
            </li>
            <li>
                <a href="/hubungankk" onclick="return confirm('Apakah Anda Ingin Mengabaikan Perubahan ini?')"><span class="las la-heart"></span>
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

  {{-- Start Form --}}
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> Dashboard
            </h2>
        </header>
    
        <main>
          <div class="card">
            <div class="card-header text-center">
              <h1>Form Anggota Kartu Keluarga</h1>
            </div>
            <div class="card-body">
              <form name="formAnggotakk" action="/anggotakk" method="post" onsubmit="return validateForm()">
                @csrf
                <div class="form-group">
                  <label>Kk ID</label>
                  <select name="kk_id" id="kk_id" class="form-control">
                      <option value="">-- Pilih --</option>
                      @foreach ($kk as $item)
                          <option class="text-option" value="{{ $item->id }}">{{ $item->nokk }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Penduduk ID</label>
                  <select name="penduduk_id" id="penduduk_id" class="form-control">
                      <option value="">-- Pilih --</option>
                      @foreach ($penduduk as $item)
                          <option class="text-option" value="{{ $item->id }}">{{ $item->nama }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Hubungankk ID</label>
                  <select name="hubungankk_id" id="hubungankk_id" class="form-control">
                      <option value="">-- Pilih --</option>
                      @foreach ($hubungankk as $item)
                          <option class="text-option" value="{{ $item->id }}">{{ $item->hubungankk }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Status Aktif</label>
                  <select name="statusaktif" id="statusaktif" class="form-control">
                      <option value="">-- Pilih --</option>
                      <option value="1">Aktif</option>
                      <option value="0">Tidak Aktif</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label>User ID</label>
                    <select name="user_id" id="user_id" class="form-control">
                        <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
                    </select>
                  </div>
                  <div>
                    <button type="submit" name="submit" class="btn btn-primary mb-4">Send</button>
                  </div>
              </form>
            </div>
          </div>
          <script>
            function validateForm() {
              // Validasi Kk ID
              if (document.forms["formAnggotakk"]["kk_id"].selectedIndex < 1) {
              alert("Anda belum memilih KK ID Anda");
              document.forms["formAnggotakk"]["kk_id"].focus();
              return false;
              }
              // Validasi Penduduk ID
              if (document.forms["formAnggotakk"]["penduduk_id"].selectedIndex < 1) {
              alert("Anda belum memilih Penduduk ID Anda");
              document.forms["formAnggotakk"]["penduduk_id"].focus();
              return false;
              }
              // Validasi Hubungankk ID
              if (document.forms["formAnggotakk"]["hubungankk_id"].selectedIndex < 1) {
              alert("Anda belum memilih Hubungankk ID Anda");
              document.forms["formAnggotakk"]["hubungankk_id"].focus();
              return false;
              }
              // Validasi Status Aktif ID
              if (document.forms["formAnggotakk"]["statusaktif"].selectedIndex < 1) {
              alert("Anda belum memilih Status Aktif Anda");
              document.forms["formAnggotakk"]["statusaktif"].focus();
              return false;
              }
            }
        </script>
        </main>
    </div>
    {{-- End List --}}
    
</body>
</html>