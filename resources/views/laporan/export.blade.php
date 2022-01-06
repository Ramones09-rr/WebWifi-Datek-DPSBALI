<table>
    <thead>
    <tr>
        <th>NO</th>
        <th>NOTIK</th>
        <th>ASSIGN</th>
        <th>NAMA</th>
        <th>SITE ID</th>
        <th>SN AP</th>
        <th>SN ONT</th>
        <th>CP</th>
        <th>STATUS TIKET</th>
        <th>LOKASI</th>
        <th>STATUS</th>
        <th>TGL TERBIT TIKET</th>
        <th>REVISI/KETERANGAN</th>
    </tr>
    </thead>
    <tbody>
    @foreach($laporan as $laporan)
        <tr>
            <td>{{ $laporan->id }}</td>
            <td>{{ $laporan->notik }}</td>
            <td>{{ $laporan->assign }}</td>
            <td>{{ $laporan->nama }}</td>
            <td>{{ $laporan->site }}</td>
            <td>{{ $laporan->snap }}</td>
            <td>{{ $laporan->snont }}</td>
            <td>{{ $laporan->cp }}</td>
            <td>{{ $laporan->st }}</td>
            <td>{{ $laporan->lokasi }}</td>
            <td>{{ $laporan->status }}</td>
            <td>{{ $laporan->ttt }}</td>
            <td>{{ $laporan->ket }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
