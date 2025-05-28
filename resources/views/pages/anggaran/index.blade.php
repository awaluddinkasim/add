<x-layout title="Anggaran {{ $kegiatan->nama }}">
    <div class="card">
        <x-offcanvas title="Tambah Kegiatan" label="Tambah">
            <x-errors />

            <form action="{{ route('anggaran.store', $kegiatan) }}" method="post" autocomplete="off">
                @csrf

                <div class="mb-3">
                    <label for="nameInput" class="block text-sm font-medium mb-2 dark:text-white">Anggaran</label>
                    <input type="text" id="nameInput" name="nama"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="volumeInput" class="block text-sm font-medium mb-2 dark:text-white">Volume</label>
                    <input type="text" id="volumeInput" name="volume"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="satuanInput" class="block text-sm font-medium mb-2 dark:text-white">Satuan</label>
                    <input type="text" id="satuanInput" name="satuan"
                        class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        required>
                </div>

                <div class="mb-3">
                    <label for="hargaSatuanInput" class="block text-sm font-medium mb-2 dark:text-white">Harga
                        Satuan</label>
                    <input type="text" id="hargaSatuanInput" name="harga_satuan"
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
                        <th>Anggaran</th>
                        <th>Volume</th>
                        <th>Satuan</th>
                        <th>Harga Satuan</th>
                        <th>Total Harga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarAnggaran as $anggaran)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $anggaran->nama }}</td>
                            <td>{{ number_format($anggaran->volume) }}</td>
                            <td>{{ $anggaran->satuan }}</td>
                            <td>Rp {{ number_format($anggaran->harga_satuan) }}</td>
                            <td>Rp {{ number_format($anggaran->total_harga) }}</td>
                            <td class="whitespace-nowrap text-end text-sm font-medium">
                                <form
                                    action="{{ route('anggaran.destroy', ['kegiatan' => $kegiatan, 'anggaran' => $anggaran]) }}"
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
