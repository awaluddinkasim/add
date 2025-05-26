<x-layout title="Laporan">
    <div class="card">
        <form action="#" method="POST" class="flex items-end space-x-4">
            @csrf
            <div class="w-1/3">
                <label for="tahun_anggaran" class="block text-sm font-medium text-gray-700 mb-1">Tahun Anggaran</label>
                <select id="tahun_anggaran" name="tahun_anggaran"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">-- Pilih Tahun --</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
            </div>

            <div class="w-1/3">
                <label for="jenis_laporan" class="block text-sm font-medium text-gray-700 mb-1">Jenis Laporan</label>
                <select id="jenis_laporan" name="jenis_laporan"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">-- Pilih Jenis Laporan --</option>
                    <option value="penerimaan">Laporan Penerimaan Dana</option>
                    <option value="pengeluaran">Laporan Pengeluaran Dana</option>
                    <option value="realisasi">Laporan Realisasi Anggaran</option>
                    <option value="rincian">Laporan Rincian Kegiatan</option>
                </select>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-file-pdf mr-2"></i> Generate PDF
                </button>
            </div>
        </form>
    </div>
</x-layout>
