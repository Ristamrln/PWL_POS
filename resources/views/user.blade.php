<!DOCTYPE html>
<html>
    <head>
        <tittle></tittle>
    </head>
    <body>
        <h1>Data User</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <td>ID</td>
                 <td>username</td> 
                 <td>Nama</td>
                <td>ID Level Pengguna</td> 
            </tr>
            {{-- @foreach ($data as $d) --}}
            <tr>
                
                <td>{{ $data->user_id}}</td>
                <td>{{ $data->username}}</td>
                <td>{{ $data->nama}}</td>
                <td>{{ $data->level_id}}</td>
                {{-- <td>{{$data}}</td> --}}
            </tr>
            {{-- @endforeach --}}
        </table>
    </body>
</html> 