<table>
    <thead>
    <tr>
        <th>NO</th>
        <th>SN</th>
        <th>MAC ADDRESS</th>
        <th>STO</th>
        <th>LOG ID</th>
        <th>AP NAME</th>
        <th>ALAMAT</th>
        <th>SN ONT</th>
        <th>LOKASI ONT</th>
        <th>TYPE OLT</th>
        <th>GPON</th>
        <th>GPON ONU</th>
        <th>VLAN</th>
        <th>STATUS</th>
        <th>ODP</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datek as $datek)
        <tr>
            <td>{{ $datek->id }}</td>
            <td>{{ $datek->sn }}</td>
            <td>{{ $datek->mac }}</td>
            <td>{{ $datek->sto }}</td>
            <td>{{ $datek->log }}</td>
            <td>{{ $datek->ap }}</td>
            <td>{{ $datek->alamat }}</td>
            <td>{{ $datek->ont }}</td>
            <td>{{ $datek->lokasi }}</td>
            <td>{{ $datek->olt }}</td>
            <td>{{ $datek->gpon }}</td>
            <td>{{ $datek->onu }}</td>
            <td>{{ $datek->vlan }}</td>
            <td>{{ $datek->status }}</td>
            <td>{{ $datek->odp }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
