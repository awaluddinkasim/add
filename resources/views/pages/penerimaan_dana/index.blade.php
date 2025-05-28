<x-layout title="Penerimaan Dana">
    <div class="card">
        <x-offcanvas title="Tambah Penerimaan Dana" label="Tambah">
            <x-errors />

            <form action="{{ route('penerimaan-dana.store') }}" method="post" enctype="multipart/form-data"
                autocomplete="off">
                @csrf
                <div class="mb-3">
                    <label for="tahunAnggaranInput" class="block text-sm font-medium mb-2 dark:text-white">Tahun
                        Anggaran</label>
                    <input type="text" id="tahunAnggaranInput" name="tahun_anggaran"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="kategoriProgramSelect" class="block text-sm font-medium mb-2 dark:text-white">Sumber
                        Dana</label>
                    <select name="kategori_program_id" id="kategoriProgramSelect"
                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                        <option selected hidden value="">Pilih</option>
                        @foreach ($daftarSumberDana as $sumber)
                            <option value="{{ $sumber->id }}">{{ $sumber->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggalPenerimaanInput" class="block text-sm font-medium mb-2 dark:text-white">Tanggal
                        Penerimaan</label>
                    <input type="date" id="tanggalPenerimaanInput" name="tanggal_penerimaan"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="jumlahInput" class="block text-sm font-medium mb-2 dark:text-white">Jumlah yang
                        Diterima</label>
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

                <div class="mb-3">
                    <label for="buktiPenerimaanInput" class="block text-sm font-medium mb-2 dark:text-white">Bukti
                        Penerimaan</label>
                    <input type="file" id="buktiPenerimaanInput" name="bukti_penerimaan" accept=".pdf"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
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
                                {{-- <button type="button" onclick="location.href = '#'"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                    Edit
                                </button> --}}
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
