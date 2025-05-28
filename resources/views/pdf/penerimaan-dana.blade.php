<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penerimaan Dana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #000;
            padding-bottom: 15px;
        }

        .header h1 {
            font-size: 18px;
            margin: 0;
            text-transform: uppercase;
            font-weight: bold;
        }

        .header h2 {
            font-size: 14px;
            margin: 5px 0 0 0;
            font-weight: normal;
        }

        .info-section {
            margin-bottom: 20px;
        }

        .info-row {
            display: flex;
            margin-bottom: 5px;
        }

        .info-label {
            width: 150px;
            font-weight: bold;
        }

        .info-value {
            flex: 1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px 6px;
            text-align: left;
            font-size: 11px;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .currency {
            text-align: right;
            font-weight: bold;
        }

        .total-row {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .footer {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }

        .signature {
            text-align: center;
            width: 200px;
            border: none;
        }

        .signature-line {
            border-top: 1px solid #000;
            margin-top: 60px;
            padding-top: 5px;
        }

        .page-break {
            page-break-after: always;
        }

        @media print {
            body {
                margin: 0;
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Laporan Penerimaan Dana</h1>
        <h2>Laporan Data Penerimaan Dana</h2>
    </div>

    <div class="info-section">
        <div class="info-row">
            <div class="info-label">Tanggal Cetak:</div>
            <div class="info-value">{{ date('d/m/Y H:i:s') }}</div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="10%">Tahun Anggaran</th>
                <th width="15%">Sumber Dana</th>
                <th width="12%">Tanggal</th>
                <th width="15%">Pencatat</th>
                <th width="15%">Jumlah (Rp)</th>
                <th width="18%">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalPenerimaan = 0;
                $no = 1;
            @endphp

            @forelse($penerimaanDana as $item)
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td class="text-center">{{ $item->tahun_anggaran }}</td>
                    <td>{{ $item->sumberDana->nama ?? '-' }}</td>
                    <td class="text-center">{{ date('d/m/Y', strtotime($item->tanggal_penerimaan)) }}</td>
                    <td>{{ $item->pencatat }}</td>
                    <td>{{ $item->keterangan ?: '-' }}</td>
                    <td class="currency">{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                </tr>
                @php
                    $totalPenerimaan += $item->jumlah;
                @endphp
            @empty
                <tr>
                    <td colspan="8" class="text-center" style="padding: 20px; font-style: italic;">
                        Tidak ada data penerimaan dana
                    </td>
                </tr>
            @endforelse

            @if ($penerimaanDana->count() > 0)
                <tr class="total-row">
                    <td colspan="6" class="text-center">TOTAL PENERIMAAN</td>
                    <td class="currency">{{ number_format($totalPenerimaan, 0, ',', '.') }}</td>
                </tr>
            @endif
        </tbody>
    </table>

    <table style="border: none">
        <tr>
            <td class="signature">
                <div>Mengetahui,</div>
                <div style="margin-top: 10px; font-weight: bold; margin-bottom: 50pt">Kepala Bagian</div>
                <div>
                    ( ............................ )
                </div>
            </td>

            <td class="signature">
                <div>Desa Ntoke, {{ date('d') }}
                    {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('F Y') }}</div>
                <div style="margin-top: 10px; font-weight: bold; margin-bottom: 50pt">Penanggung Jawab</div>
                <div>
                    ( ............................ )
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
