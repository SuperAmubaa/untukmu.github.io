@php
    $ar_judul = ['No','Nama Team','Nama Penyewa','Umur','Nomor HP','Alamat'];
    $no = 1;
@endphp
    <h3 align="center">Data Penyewa </h3>
    <table align="center" border="1" cellpadding="5">
        <thead>
            <tr>
                @foreach ($ar_judul as $jdl)
                    <th align="center">{{ $jdl }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody align="center">
            @foreach ($ar_penyewa as $m)
                <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $m->team }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->umur }}</td>
                <td>{{ $m->hp }}</td>
                <td>{{ $m->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>