@extends('layouts.masyarakat')

@section('title')
Monitoring Penyuluh CDK Malang
@endsection
<link href="img/logocdk.ico" rel="icon">
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    {{-- @foreach($liat as $li)
    <li>{{ $li->nik }}</li>
    @endforeach --}}
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
        </h2>


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data">
            @csrf

            <div class="px-4 py-3 mb-8 bg-red-300 rounded-lg shadow-xl border-2 dark:bg-gray-800">
                <label for="title" class="block mt-4 text-sm">
                    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
                        Form Laporan
                    </h2>
                </label>
                <label for="title" class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Judul Kegiatan</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="text" value="{{ old('title')}}" name="title" />
                </label>
                <label for="title" class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Kategori Kegiatan</span>
                    <select id="countries"
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="category">
                        <option selected>Choose a country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </label>
                <label for="description" class="block text-sm mt-4">
                    <span class="text-gray-700 dark:text-gray-400">Deskripsi Kegiatan</span>
                    <textarea
                        class="block w-full mt-1 text-sm border-2 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:focus:shadow-outline-gray"
                        rows="8" type="text" placeholder="Isi laporan Anda dan sertakan lokasi dengan jelas"
                        value="{{ old('description')}}" name="description">{{ old('description') }}</textarea>
                </label>
                <label for="image" class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Foto</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="file" value="{{ old('image')}}" name="image" />
                </label>
                <label for="dokumen" class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Lampiran File</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        type="file" value="{{ old('dokumen')}}" name="dokumen" />
                </label>
                <button style="width: 100%" type="submit"
                    class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                    Laporkan
                </button>
                <button style="width: 100%" type="back"
                    class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-red">
                    <a href="/">Kembali ke halaman utama</a>
                </button>

            </div>
        </form>
</main>
@endsection
