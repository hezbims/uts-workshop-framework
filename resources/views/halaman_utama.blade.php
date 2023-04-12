<!doctype html>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Utama</title>
</head>
<body>
    <a href="/halaman_tambah_data">Tambah Data Kontak</a><hr>
    <table>
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Group</th>
            <th>Pekerjaan</th>
        </tr>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->nomor }}</td>
                <td>{{ $contact->nama }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->group->nama }}</td>
                <td>{{ $contact->profesi->nama }}</td>

                <td>
                    <button>
                        <a href="/halaman_edit/{{ $contact->id }}">Edit</a>
                    </button>
                </td>
                <td>
                    <form action="/delete_data/{{ $contact->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
