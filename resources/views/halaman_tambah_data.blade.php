<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Kontak</title>
</head>
<body>
    <form action="/tambah_data" method="POST" >
        @csrf
        <label for="nama">Nama : </label>
        <input
            placeholder="Nama"
            id="nama"
            name="nama"
            required>
        <br>

        <label for="nomor">Nomor : </label>
        <input
            placeholder="Nomor Telepon"
            id="nomor"
            name="nomor"
            required>
        <br>

        <label for="email" id="email">Email : </label>
        <input
            placeholder="Email"
            id="email"
            name="email"
            type="email"
            required>
        <br>

        <label for="group">Pilih group : </label>
        <select id="group" name="id_group">
            @foreach(\App\Models\Group::all() as $group)
                <option value="{{ $group->id }}">{{ $group->nama }}</option>
            @endforeach
        </select>
        <br>


        <label for="profesi">Pilih profesi : </label>
        <select id="profesi" name="id_profesi">
            @foreach(\App\Models\Profesi::all() as $profesi)
                <option value="{{ $profesi->id }}">{{ $profesi->nama }}</option>
            @endforeach
        </select>
        <br>

        <button>Tambah Data</button>
    </form>
</body>
</html>
