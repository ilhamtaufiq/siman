<style type="text/css">
    .tg {
        border: none;
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-style: solid;
        border-width: 0px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-style: solid;
        border-width: 0px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-0lax {
        text-align: left;
        vertical-align: top
    }
</style>
<table class="tg">
    <thead>

    </thead>
    <tbody>
        <tr>
            <th class="tg-0lax">Nama</th>
            <th class="tg-0lax">:</th>
            <th class="tg-0lax">{{ $data->nama }}</th>
        </tr>
        <tr>
            <td class="tg-0lax">Tanggal Lahir</td>
            <td class="tg-0lax">:</td>
            <td class="tg-0lax">{{ $data->tanggal_lahir }}</td>
        </tr>
        <tr>
            <td class="tg-0lax">Tanggal Meninggal</td>
            <td class="tg-0lax">:</td>
            <td class="tg-0lax">{{ $data->tanggal_meninggal }}</td>
        </tr>
        <tr>
            <td class="tg-0lax">TPU</td>
            <td class="tg-0lax">:</td>
            <td class="tg-0lax">TPU {{ $data->tpu->nama_tpu }} - Blok {{ $data->blok }} Nomor {{ $data->nomor }}</td>
        </tr>
    </tbody>
</table>
