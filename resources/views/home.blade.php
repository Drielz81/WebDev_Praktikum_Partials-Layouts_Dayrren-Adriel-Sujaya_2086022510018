@extends('app')

@section('title', 'Home')

@section('content')
    <section class="flex flex-col justify-center h-full items-center px-4 py-10 sm:px-8 lg:min-h-[calc(100vh-84px)]">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h1 class="text-4xl text-slate-50 font-bold !leading-tight mb-6 md:text-5xl lg:text-6xl">
                    WELCOME TO THE<br><span class="text-gradient-animated">HOME PAGE</span></h1>
                <p class="text-lg text-slate-200 leading-relaxed">Dayrren Adriel Sujaya personal Home Page.</p>

                <div class="mt-8 flex items-center justify-center flex-wrap gap-4">
                    <a href="{{ route('about') }}"
                        class="py-2.5 px-4 text-slate-900 text-sm font-semibold rounded-md bg-white border border-slate-300 transition-colors hover:bg-gray-300">
                        About Me
                    </a>
                    <a href="{{ route('blog') }}"
                        class="py-2.5 px-4 text-slate-900 text-sm font-semibold rounded-md bg-white border border-slate-300 transition-colors hover:bg-gray-300">
                        Blog
                    </a>
                    <a href="{{ route('contact') }}"
                        class="py-2.5 px-4 text-slate-900 text-sm font-semibold rounded-md bg-white border border-slate-300 transition-colors hover:bg-gray-300">
                        My Contact
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection