<table>
    <thead>
    <tr>
        <th>NO</th>
        <th>NO TICATERS</th>
        <th>TANGGAL START</th>
        <th>TANGGAL CLOSE</th>
        <th>CUSTOMER</th>
        <th>NETWORK ID</th>
        <th>SERVICE ID</th>
        <th>EXTERNAL ID</th>
        <th>JENIS INSTALASI</th>
        <th>BW (Mbps)</th>
        <th>ALAMAT NODE</th>
        <th>LONGITUDE</th>
        <th>LATITUDE</th>
        <th>NTE TYPE</th>
        <th>TYPE DAN KONFIGURASI NETWORK</th>
        <th>PRODUCT</th>
        <th>JENIS LAYANAN</th>
        <th>STO</th>
        <th>METRO</th>
        <th>PORT METRO</th>
        <th>OLT</th>
        <th>PORT OLT</th>
        <th>ODP</th>
        <th>ONT MODEL</th>
        <th>PORT ONT</th>
        <th>SN ONT</th>
        <th>VLAN</th>
        <th>OA|DISMANTLE</th>
        <th>KETERANGAN</th>
    </tr>
    </thead>
    <tbody>
    @foreach($olo as $olo)
        <tr>
            <td>{{ $olo->id }}</td>
            <td>{{ $olo->notic }}</td>
            <td>{{ $olo->ts }}</td>
            <td>{{ $olo->tc }}</td>
            <td>{{ $olo->cust }}</td>
            <td>{{ $olo->nid }}</td>
            <td>{{ $olo->sid }}</td>
            <td>{{ $olo->xid }}</td>
            <td>{{ $olo->jin }}</td>
            <td>{{ $olo->bw }}</td>
            <td>{{ $olo->alamat }}</td>
            <td>{{ $olo->long }}</td>
            <td>{{ $olo->lat }}</td>
            <td>{{ $olo->nte }}</td>
            <td>{{ $olo->type }}</td>
            <td>{{ $olo->product }}</td>
            <td>{{ $olo->jla }}</td>
            <td>{{ $olo->sto }}</td>
            <td>{{ $olo->metro }}</td>
            <td>{{ $olo->portm }}</td>
            <td>{{ $olo->olt }}</td>
            <td>{{ $olo->portl }}</td>
            <td>{{ $olo->odp }}</td>
            <td>{{ $olo->ont }}</td>
            <td>{{ $olo->portn }}</td>
            <td>{{ $olo->sn }}</td>
            <td>{{ $olo->vlan }}</td>
            <td>{{ $olo->oa }}</td>
            <td>{{ $olo->ket }}</td>
    @endforeach
    </tbody>
</table>
