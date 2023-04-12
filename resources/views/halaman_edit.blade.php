<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Edit</title>
</head>
<body>
    <form action="/save_edit_data" method="POST" >
        @csrf
        @method("PUT")
        <input value="{{ $contact->id }}" name="id" hidden>

        <label for="nama">Nama : </label>
        <input
            value="{{ $contact->nama }}"
            placeholder="Nama"
            id="nama"
            name="nama">
        <br>

        <label for="nomor">Nomor : </label>
        <input
            value="{{ $contact->nomor }}"
            placeholder="Nomor Telepon"
            id="nomor"
            name="nomor">
        <br>

        <label for="email" id="email">Email : </label>
        <input
            value="{{ $contact->email }}"
            placeholder="Email"
            id="email"
            name="email">
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

        <button>Save</button>
    </form>
</body>
</html>
