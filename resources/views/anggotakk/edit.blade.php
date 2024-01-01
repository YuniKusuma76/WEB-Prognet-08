<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>iFamily Card - Edited Anggota Kartu Keluarga</title>
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
                <a href="/logout" onclick="return confirm('Apakah Anda Ingin Mengabaikan Perubahan ini?')"><span class="las la-sign-out-alt"></span>
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
              <form name="formAgama" action="/anggotakk/{{ $anggotakk->id }}" method="post" onsubmit="return validateForm()">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Kk ID</label>
                  <select name="kk_id" id="kk_id" class="form-control">
                      <option value="">-- Pilih --</option>
                      @foreach ($kk as $item)
                          <option value="{{ $item->id }}" @if ($anggotakk->kk_id==='{{ $item->id }}'){{ "selected" }} @endif>{{ $item->nokk }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Penduduk ID</label>
                  <select name="penduduk_id" id="penduduk_id" class="form-control">
                      <option value="">-- Pilih --</option>
                      @foreach ($penduduk as $item)
                          <option value="{{ $item->id }}" @if ($anggotakk->penduduk_id==='{{ $item->id }}'){{ "selected" }} @endif>{{ $item->nama }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Hubungan Kartu Keluarga ID</label>
                  <select name="hubungankk_id" id="hubungankk_id" class="form-control">
                      <option value="">-- Pilih --</option>
                      @foreach ($hubungankk as $item)
                          <option value="{{ $item->id }}" @if ($anggotakk->hubungankk_id==='{{ $item->id }}'){{ "selected" }} @endif>{{ $item->hubungankk }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Status Aktif</label>
                  <select name="statusaktif" id="statusaktif" class="form-control">
                      <option value="">-- Pilih --</option>
                      <option value="1" @if ($anggotakk->statusaktif=='1'){{ "selected" }} @endif>Aktif</option>
                      <option value="0" @if ($anggotakk->statusaktif=='0'){{ "selected" }} @endif>Tidak Aktif</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label>User ID</label>
                    <select name="user_id" id="user_id" class="form-control">
                      <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
                  </select>
                  </div>
                  <div>
                    <button type="submit" name="submit" class="btn btn-primary mb-4">Save</button>
                  </div>
              </form>
            </div>
          </div>
          <script>
            function validateForm() {
              // Validasi Agama
              if (document.forms["formAgama"]["agama"].value == "") {
                  alert("Anda belum memasukkan Agama Anda");
                  document.forms["formAgama"]["agama"].focus();
                  return false;
              }
            }
        </script>
        </main>
    </div>
    {{-- End List --}}
    
</body>
</html>