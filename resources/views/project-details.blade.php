@extends('layouts.app')

@section('title', $title)

@section('content')

<!-- Banner -->
<section class="pb-12 lg:pb-16">

    <div class="overflow-hidden rounded-3xl border border-slate-700 shadow-2xl">

        <img
            src="{{ asset($banner) }}"
            alt="{{ $title }}"
            class="w-full h-64 sm:h-80 lg:h-[500px] object-cover">

    </div>

</section>

<!-- Project Info -->

<section class="pb-20">

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-10">

        <!-- Left Content -->

        <div class="xl:col-span-2">

            <span class="inline-flex px-5 py-2 rounded-full bg-blue-600/20 border border-blue-500 text-blue-400 text-sm">

                {{ $category }}

            </span>

            <h1 class="mt-6 text-4xl lg:text-5xl font-bold text-white">

                {{ $title }}

            </h1>

            <p class="mt-6 text-slate-400 leading-8 text-lg">

                {{ $description }}

            </p>

            <!-- Features -->

            <h2 class="mt-14 mb-8 text-3xl font-bold text-white">

                Project Features

            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                @foreach($features as $feature)

                <div class="flex items-center gap-4 bg-[#111827] border border-slate-700 rounded-2xl p-5 hover:border-blue-500 transition">

                    <div class="w-11 h-11 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">

                        ✓

                    </div>

                    <span class="text-slate-300">

                        {{ $feature }}

                    </span>

                </div>

                @endforeach

            </div>

            <!-- Gallery -->

            <h2 class="mt-16 mb-8 text-3xl font-bold text-white">

                Project Gallery

            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach($gallery as $image)

                <div class="group overflow-hidden rounded-2xl border border-slate-700 bg-[#111827]">

                    <img
                        src="{{ asset($image) }}"
                        class="w-full h-60 object-cover group-hover:scale-110 duration-500">

                </div>

                @endforeach

            </div>

        </div>

        <!-- Sidebar -->

        <div>

            <div class="xl:sticky xl:top-32 bg-[#111827] border border-slate-700 rounded-3xl p-8">

                <h2 class="text-2xl font-bold text-white mb-8">

                    Technologies

                </h2>

                <div class="flex flex-wrap gap-3">

                    @foreach($technologies as $tech)

                    <span class="px-5 py-2 rounded-full bg-slate-800 border border-slate-700 text-slate-300">

                        {{ $tech }}

                    </span>

                    @endforeach

                </div>

                <div class="mt-10 space-y-4">

                    <a href="#"
                        class="block w-full py-4 rounded-xl bg-blue-600 hover:bg-blue-700 text-center text-white font-semibold transition">

                        Live Demo

                    </a>

                    <a href="https://github.com/hassanshair01-prog"
                        target="_blank"
                        class="block w-full py-4 rounded-xl border border-blue-500 text-blue-400 text-center hover:bg-blue-600 hover:text-white transition">

                        GitHub Source

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->

<section class="pb-10">

    <div class="rounded-3xl overflow-hidden bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500 px-8 py-14 lg:py-20 text-center">

        <h2 class="text-3xl lg:text-5xl font-bold text-white">

            Ready To Start Your Project?

        </h2>

        <p class="mt-6 text-blue-100 max-w-3xl mx-auto leading-8">

            Have an idea? Let's build a modern, secure and scalable web application together.

        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-5 mt-10">

            <a href="{{ url('/contact') }}"
                class="px-8 py-4 rounded-xl bg-white text-blue-700 font-bold hover:scale-105 duration-300">

                Start Your Project

            </a>

            <a href="{{ url('/contact') }}"
                class="px-8 py-4 rounded-xl border border-white text-white hover:bg-white hover:text-blue-700 duration-300">

                Contact Me

            </a>

        </div>

    </div>

</section>

@endsection