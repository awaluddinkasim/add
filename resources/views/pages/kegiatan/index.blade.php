<x-layout title="Kegiatan">
    <div class="card">
        <x-offcanvas title="Tambah Kegiatan" label="Tambah">
            <x-errors />

            <form action="{{ route('kegiatan.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="mb-3">
                    <label for="programSelect" class="block text-sm font-medium mb-2 dark:text-white">Program</label>
                    <select name="program_id" id="programSelect"
                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                        <option selected hidden value="">Pilih</option>
                        @foreach ($daftarProgram as $program)
                            <option value="{{ $program->id }}">{{ $program->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nameInput" class="block text-sm font-medium mb-2 dark:text-white">Nama Kegiatan</label>
                    <input type="text" id="nameInput" name="nama"
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
                    <label for="tanggalKegiatanInput" class="block text-sm font-medium mb-2 dark:text-white">Tanggal
                        Kegiatan</label>
                    <input type="date" id="tanggalKegiatanInput" name="tanggal_kegiatan"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="jumlahHariInput" class="block text-sm font-medium mb-2 dark:text-white">Jumlah
                        Hari</label>
                    <input type="number" id="jumlahHariInput" name="jumlah_hari"
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
                                <button type="button" onclick="location.href = '{{ route('anggaran', $kegiatan) }}'"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                    Detail Anggaran
                                </button>
                                <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="post"
                                    class="inline">
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
