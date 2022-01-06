<table>
    <thead>
    <tr>
        <th>NO</th>
        <th>SITE NAME</th>
        <th>SITE ADDRESS</th>
        <th>SITE ID</th>
        <th>HUB SITE NAME</th>
        <th>LATITUDE</th>
        <th>LONGITUDE</th>
        <th>AKSES</th>
        <th>SYSTEM</th>
        <th>HUB SITE ID</th>
        <th>DATEK METRO E</th>
        <th>OLT NAME</th>
        <th>OLT PORT</th>
        <th>PLAN TRANSPORT CO TRANS</th>
        <th>SN ONT</th>
        <th>ONT VERSION</th>
        <th>VLAN CLUSTER 2G</th>
        <th>VLAN CLUSTER 3G</th>
        <th>VLAN CLUSTER 4G</th>
        <th>PORT ONT</th>
        <th>IP ONT</th>
        <th>BW TOT</th>
        <th>VLAN OAM</th>
        <th>ODP NAME</th>
        <th>REMARK</th>
        <th>TAGIHAN DES</th>
        <th>KETERANGAN</th>
    </tr>
    </thead>
    <tbody>
    @foreach($node as $node)
        <tr>
            <td>{{ $node->id }}</td>
            <td>{{ $node->sname }}</td>
            <td>{{ $node->sadd }}</td>
            <td>{{ $node->sid }}</td>
            <td>{{ $node->hsn }}</td>
            <td>{{ $node->lat }}</td>
            <td>{{ $node->long }}</td>
            <td>{{ $node->akses }}</td>
            <td>{{ $node->system }}</td>
            <td>{{ $node->hsi }}</td>
            <td>{{ $node->dme }}</td>
            <td>{{ $node->oname }}</td>
            <td>{{ $node->oport }}</td>
            <td>{{ $node->ptct }}</td>
            <td>{{ $node->sn }}</td>
            <td>{{ $node->ont }}</td>
            <td>{{ $node->v2g }}</td>
            <td>{{ $node->v3g }}</td>
            <td>{{ $node->v4g }}</td>
            <td>{{ $node->portn }}</td>
            <td>{{ $node->ipo }}</td>
            <td>{{ $node->bwt }}</td>
            <td>{{ $node->oam }}</td>
            <td>{{ $node->odp }}</td>
            <td>{{ $node->remark }}</td>
            <td>{{ $node->tdes }}</td>
            <td>{{ $node->ket }}</td>
    @endforeach
    </tbody>
</table>
