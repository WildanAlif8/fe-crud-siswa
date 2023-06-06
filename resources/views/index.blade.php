<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Update</th>
          </tr>
        </thead>

        <tbody>
            <a href="{{ route('add') }}">Tambah Data</a>
            <tr>
                @foreach ($siswas as $siswa)
                
                <td>{{ $siswa['nis'] }}</td>
                <td> {{ $siswa['nama'] }}</td>
                <td>  {{ $siswa['rombel'] }}</td>
                <td><a href="" class="btn btn-sm btn-success">edit</a></td>
            </tr>
        </tbody>
    </table> --}}
    <table class="table table-dark ms-5">
        <thead>
          <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            <a href="{{ route('add') }}">Tambah Data</a>
            @foreach ($siswas as $siswa)

            <tr>
               
                
                <td>{{ $siswa['nis'] }}</td>
                <td>{{ $siswa['nama'] }}</td>
                <td>{{ $siswa['rombel'] }}</td>
                <td>
                    <a href="{{ route('edit', $siswa['id']) }}" type="button" class="btn btn-success bi bi-pencil-square"></a>
                    <form action="{{ route('destroy', $siswa['id']) }}" method="GET">
                      @csrf
                      <button type="submit" class="btn btn-danger bi bi-trash"></button>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
 
</body>


</html>