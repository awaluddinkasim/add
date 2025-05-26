<x-layout title="Kegiatan">
    <div class="card">
        <div class="overflow-x-auto">
            <table id="dt-main" class="display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kegiatan</th>
                        <th>Program</th>
                        <th>Anggaran</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Jumlah Hari</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarKegiatan as $kegiatan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kegiatan->nama }}</td>
                            <td>{{ $kegiatan->program->nama }}</td>
                            <td>Rp {{ number_format($kegiatan->total_anggaran) }}</td>
                            <td>{{ tanggal($kegiatan->tanggal_kegiatan) }}</td>
                            <td>{{ $kegiatan->jumlah_hari }} Hari</td>
                            <td class="whitespace-nowrap text-end text-sm font-medium">
                                <button type="button" onclick="location.href = '#'"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                    Detail Anggaran
                                </button>
                                <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="post"
                                    class="inline">
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
