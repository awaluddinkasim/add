<x-layout title="Pengeluaran Dana">
    <div class="card">
        <x-offcanvas title="Tambah Pengaluaran Dana" label="Tambah">
            <x-errors />

            <form action="{{ route('pengeluaran-dana.store') }}" method="post" enctype="multipart/form-data"
                autocomplete="off">
                @csrf
                <div class="mb-3">
                    <label for="kegiatanSelect" class="block text-sm font-medium mb-2 dark:text-white">Kegiatan</label>
                    <select name="kegiatan_id" id="kegiatanSelect"
                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                        <option selected hidden value="">Pilih</option>
                        @foreach ($daftarKegiatan as $kegiatan)
                            <option value="{{ $kegiatan->id }}">{{ $kegiatan->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggalPengeluaranInput" class="block text-sm font-medium mb-2 dark:text-white">Tanggal
                        Pengeluaran</label>
                    <input type="date" id="tanggalPengeluaranInput" name="tanggal_pengeluaran"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="jumlahInput" class="block text-sm font-medium mb-2 dark:text-white">Jumlah yang
                        Dikeluarkan</label>
                    <input type="text" id="jumlahInput" name="jumlah"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="keteranganInput"
                        class="block text-sm font-medium mb-2 dark:text-white">Keterangan</label>
                    <textarea id="keteranganInput" name="keterangan"
                        class="py-2 px-3 sm:py-3 sm:px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        rows="3" required></textarea>
                </div>

                <button type="submit"
                    class="mt-3 w-full px-4 py-2 text-sm rounded-lg font-medium text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-hidden focus:bg-cyan-700 disabled:opacity-50 disabled:pointer-events-none">
                    Simpan
                </button>
            </form>
        </x-offcanvas>

        <div class="overflow-x-auto">
            <table id="dt-main" class="display">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kegiatan</th>
                        <th>Tanggal Pengaluaran</th>
                        <th>Jumlah</th>
                        <th>Pencatat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarPengeluaranDana as $pengeluaranDana)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengeluaranDana->kegiatan->nama }}</td>
                            <td>{{ tanggal($pengeluaranDana->tanggal_penerimaan) }}</td>
                            <td>Rp {{ number_format($pengeluaranDana->jumlah) }}</td>
                            <td>{{ $pengeluaranDana->pencatat }}</td>
                            <td class="whitespace-nowrap text-end text-sm font-medium">
                                {{-- <button type="button" onclick="location.href = '#'"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                    Edit
                                </button> --}}
                                <form action="{{ route('pengeluaran-dana.destroy', $pengeluaranDana->id) }}"
                                    method="post" class="inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit"
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
