<x-layout title="Laporan">
    <div class="card">
        <form method="get" class="flex items-end justify-center space-x-4">
            <div class="w-1/3">
                <label for="jenis_laporan" class="block text-sm font-medium text-gray-700 mb-1">Jenis Laporan</label>
                <select id="jenis_laporan" name="jenis"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="" hidden>-- Pilih Jenis Laporan --</option>
                    <option value="penerimaan">Laporan Penerimaan Dana</option>
                    <option value="pengeluaran">Laporan Pengeluaran Dana</option>
                </select>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <i class="fas fa-file-pdf mr-2"></i> Generate PDF
                </button>
            </div>
        </form>

        <img src="{{ asset('images/report.svg') }}" alt="" class="md:w-1/2 mx-auto">
    </div>
</x-layout>
