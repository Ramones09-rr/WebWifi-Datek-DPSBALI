<table>
    <thead>
    <tr>
        <th>TAHUN</th>
        <th>AM/AMEX</th>
        <th>SEGMEN</th>
        <th>SUB SEGMEN</th>
        <th>CUSTOMER</th>
        <th>PROJECT</th>
        <th>PRODUK</th>
        <th>QTY</th>
        <th>SATUAN</th>
        <th>OTC</th>
        <th>RECURRING</th>
        <th>EST TOTAL KONTRAK</th>
        <th>EST SCALING</th>
        <th>JUMLAH TERMIN</th>
        <th>BLN TERMIN</th>
        <th>EST BLN BILLCOM</th>
        <th>STATUS/KEYAKINAN</th>
        <th>LEVEL CONFIDENCE (%)</th>
        <th>PROGRESS</th>
        <th>KLASIFIKASI ORDER</th>
        <th>NILAI KONTRAK SEBELUMNYA</th>
        <th>CHANNEL</th>
        <th>DIVRE</th>
        <th>WITEL</th>
        <th>MITRA</th>
        <th>MASA KONTRAK (BULAN)</th>
        <th>KETERANGAN</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datin as $datin)
        <tr>
            <td>{{ $datin->th }}</td>
            <td>{{ $datin->am }}</td>
            <td>{{ $datin->segmen }}</td>
            <td>{{ $datin->sub }}</td>
            <td>{{ $datin->cust }}</td>
            <td>{{ $datin->project }}</td>
            <td>{{ $datin->produk }}</td>
            <td>{{ $datin->qty }}</td>
            <td>{{ $datin->satuan }}</td>
            <td>{{ $datin->otc }}</td>
            <td>{{ $datin->rec }}</td>
            <td>{{ $datin->tk }}</td>
            <td>{{ $datin->sca }}</td>
            <td>{{ $datin->jml }}</td>
            <td>{{ $datin->bln }}</td>
            <td>{{ $datin->bill }}</td>
            <td>{{ $datin->status }}</td>
            <td>{{ $datin->level }}</td>
            <td>{{ $datin->progress }}</td>
            <td>{{ $datin->ko }}</td>
            <td>{{ $datin->nks }}</td>
            <td>{{ $datin->channel }}</td>
            <td>{{ $datin->divre }}</td>
            <td>{{ $datin->witel }}</td>
            <td>{{ $datin->mitra }}</td>
            <td>{{ $datin->masa }}</td>
            <td>{{ $datin->ket }}</td>
    @endforeach
    </tbody>
</table>
