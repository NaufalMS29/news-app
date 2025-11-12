@extends('layouts.main')

@section('container')
<h1 class="text-3xl font-bold mb-6">Detail Berita</h1>

<div class="space-y-8">
    {{-- Detail berita --}}
    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <h2 class="text-2xl font-bold mb-1 text-gray-800">{{ $news->title }}</h2>
        <p class="text-gray-500 mb-4">Oleh <span class="font-semibold">{{ $news->wartawan->nama }}</span></p>
        <p class="text-gray-700 leading-relaxed">{{ $news->ringkasan }}</p>
    </div>

    {{-- Form komentar --}}
    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Tulis Komentar</h3>

        {{-- Notifikasi sukses --}}
        @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('news.store', $news->id) }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="nama" class="block text-gray-700 font-medium mb-1">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                    class="w-full border border-gray-300 rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('nama')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="isi" class="block text-gray-700 font-medium mb-1">Komentar</label>
                <textarea name="isi" id="isi" rows="3"
                    class="w-full border border-gray-300 rounded-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('isi') }}</textarea>
                @error('isi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition duration-150">
                    Kirim Komentar
                </button>
            </div>
        </form>
    </div>

    {{-- Daftar komentar --}}
    <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Komentar</h3>

        @if($news->komentar->count() > 0)
        @foreach($news->komentar as $komen)
        <div class="bg-gray-100 rounded-lg p-4 mb-3">
            <p class="text-gray-900 font-semibold mb-1">{{ $komen->nama }}</p>
            <p class="text-gray-700">{{ $komen->isi }}</p>
        </div>
        @endforeach
        @else
        <p class="text-gray-500 italic">Belum ada komentar.</p>
        @endif
    </div>
</div>
@endsection