<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <title>Edit Data</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg" style="background-color:#EFF5F5;">
        <div class="container">
            <a class="navbar-brand" href="#">SISWA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container mt-4">
  
  @if (Session::get('errors'))
    <p style="color: red">{{Session::get('errors')}}</p>
  @endif
  
  <form action="{{ route('update', $siswa['id']) }}" method="POST">
      @csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Masukkan nama" value="{{ $siswa['nama'] }}">
  </div>
  <div class="form-group">
    <label for="nis">NIS</label>
    <input type="text" class="form-control" id="nis" name="nis" aria-describedby="emailHelp" placeholder="Masukkan NIS" value="{{ $siswa['nis'] }}">
  </div>
  <div class="form-group">
    <label for="rombel">Rombel</label>
    <input type="text" class="form-control" id="rombel" name="rombel" placeholder="Masukkan rombel" value="{{ $siswa['rombel'] }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
  </tbody>
  </table>