<x-layout title="Dashboard">
    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Total Program -->
        <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-lg font-semibold">Total Program</h2>
            <p class="text-3xl font-bold">{{ $totalProgram }}</p>
        </div>

        <!-- Total Kegiatan -->
        <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-lg font-semibold">Total Kegiatan</h2>
            <p class="text-3xl font-bold">{{ $totalKegiatan }}</p>
        </div>

        <!-- Total Anggaran -->
        <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-lg font-semibold">Total Anggaran</h2>
            <p class="text-3xl font-bold">Rp {{ number_format($totalAnggaran) }}</p>
        </div>

        <!-- Total Penerimaan Dana -->
        <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-lg font-semibold">Total Penerimaan Dana</h2>
            <p class="text-3xl font-bold">Rp {{ number_format($totalPenerimaanDana) }}</p>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="bg-white rounded-lg shadow p-4 mb-6">
        <h2 class="text-lg font-semibold mb-4">Kegiatan Terbaru</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                        Kegiatan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Anggaran</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($recentKegiatan as $kegiatan)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $kegiatan->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ tanggal($kegiatan->tanggal_kegiatan) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($kegiatan->total_anggaran) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-gray-500 p-4">Belum ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Recent Dana Penerimaan -->
    <div class="bg-white rounded-lg shadow p-4">
        <h2 class="text-lg font-semibold mb-4">Penerimaan Dana Terbaru</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Sumber Dana</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Jumlah</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($recentPenerimaanDana as $penerimaan)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $penerimaan->sumberDana->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ tanggal($penerimaan->tanggal_penerimaan) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($penerimaan->jumlah) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center text-gray-500 p-4">Belum ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</x-layout>
