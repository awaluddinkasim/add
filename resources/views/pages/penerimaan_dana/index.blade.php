<x-layout title="Penerimaan Dana">
    <div class="card">
        <div class="overflow-x-auto">
            <table id="dt-main" class="display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tahun Anggaran</th>
                        <th>Sumber Dana</th>
                        <th>Tanggal Penerimaan</th>
                        <th>Jumlah</th>
                        <th>Pencatat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarPenerimaanDana as $penerimaanDana)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $penerimaanDana->tahun_anggaran }}</td>
                            <td>{{ $penerimaanDana->sumberDana->nama }}</td>
                            <td>{{ tanggal($penerimaanDana->tanggal_penerimaan) }}</td>
                            <td>Rp {{ number_format($penerimaanDana->jumlah) }}</td>
                            <td>{{ $penerimaanDana->pencatat }}</td>
                            <td class="whitespace-nowrap text-end text-sm font-medium">
                                <button type="button" onclick="location.href = '#'"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                    Edit
                                </button>
                                <form action="{{ route('pengeluaran-dana.destroy', $penerimaanDana->id) }}"
                                    method="post" class="inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" onclick="location.href = '#'"
                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-hidden focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none">
                                        Hapus
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script type="module">
            new DataTable('#dt-main', {
                ordering: false,
            })
        </script>
    @endpush
</x-layout>
