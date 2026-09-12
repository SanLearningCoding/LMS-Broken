<x-layout title="Halaman Tidak Ditemukan">
    <div class="flex flex-col items-center justify-center text-center py-24">
        <p class="text-6xl font-bold text-slate-300 mb-4">404</p>
        <h1 class="text-2xl font-bold mb-2">Halaman Tidak Ditemukan</h1>
        <p class="text-gray-500 mb-6">
            Maaf, halaman atau mata kuliah yang kamu cari tidak tersedia.
        </p>
        <a href="{{ route('dashboard') }}"
           class="bg-slate-800 text-white px-4 py-2 rounded hover:bg-slate-700">
            Kembali ke Dashboard
        </a>
    </div>
</x-layout>