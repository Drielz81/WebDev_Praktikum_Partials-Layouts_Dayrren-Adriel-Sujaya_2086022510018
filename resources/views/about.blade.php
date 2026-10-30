@extends('app')

@section('title', 'About')

@section('content')
    <div
        class="bg-white border border-slate-200 shadow-sm w-full max-w-max rounded-lg mx-auto my-10 p-4 sm:p-6 dark:bg-neutral-800 dark:border-neutral-50">
        <section class="flex flex-col h-full items-center px-4 py-10 sm:px-8 lg:min-h-[calc(100vh-84px)]">
            <div class="max-w-7xl mx-auto">
                <div class="max-w-4xl mx-auto text-center relative z-10">
                    <h1 class="text-4xl text-slate-50 font-bold !leading-tight mb-6 md:text-5xl lg:text-6xl">
                        <span">Tentang Saya</span>
                    </h1>
                    <p class="text-lg text-slate-200 leading-relaxed">
                        Halo! Nama saya Dayrren Adriel Sujaya, lahir pada tanggal 29 Maret 2008 di Makassar. Saya berumur
                        18tahun. Saya merupakan mahasiswa aktif UC Makassar yang sedang
                        menjalani semester 3. Saya berada di program studi Informatika dengan jurusan
                        Artificial Intelligence. Saya memiliki hobi bermain game dan mendengarkan musik.
                    </p>
                    <div class="mt-8 flex items-center justify-center flex-wrap gap-4">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
