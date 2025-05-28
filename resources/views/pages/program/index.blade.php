<x-layout title="Program">
    <div class="card">
        <x-offcanvas title="Tambah Program" label="Tambah">
            <x-errors />

            <form action="{{ route('program.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="mb-3">
                    <label for="nameInput" class="block text-sm font-medium mb-2 dark:text-white">Nama</label>
                    <input type="text" id="nameInput" name="nama"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="tahunAnggaranInput" class="block text-sm font-medium mb-2 dark:text-white">Tahun
                        Anggaran</label>
                    <input type="text" id="tahunAnggaranInput" name="tahun_anggaran"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="kategoriProgramSelect" class="block text-sm font-medium mb-2 dark:text-white">Kategori
                        Program</label>
                    <select name="kategori_program_id" id="kategoriProgramSelect"
                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                        <option selected hidden value="">Pilih</option>
                        @foreach ($daftarKategori as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
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
                        <th>Nama Program</th>
                        <th>Tahun Anggaran</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarProgram as $program)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $program->nama }}</td>
                            <td>{{ $program->tahun_anggaran }}</td>
                            <td>{{ $program->kategori->nama }}</td>
                            <td>{{ $program->keterangan }}</td>
                            <td class="whitespace-nowrap text-end text-sm font-medium">
                                {{-- <button type="button" onclick="location.href = '#'"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-hidden focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                                    Edit
                                </button> --}}
                                <form action="{{ route('program.destroy', $program->id) }}" method="post"
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
