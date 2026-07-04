@extends('layouts.app')

@section('title','Home')

@section('content')

<!-- ================= HERO ================= -->
<section class="relative py-16 lg:py-20 overflow-hidden">

    <!-- Background Glow -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-600/20 blur-[150px] rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-500/20 blur-[150px] rounded-full"></div>

    <div class="grid lg:grid-cols-2 gap-8 lg:gap-2 items-center">

        <!-- Left -->
        <div data-aos="fade-right">

            <span
                class="inline-flex items-center gap-2 px-5 py-2 rounded-full border border-blue-500 bg-blue-600/10 text-blue-300">

                👋 Welcome to My Portfolio

            </span>

            <h1
                class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-white">

                Building

                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">

                    Modern

                </span>

                Web Experiences

            </h1>

            <p
                class="mt-6 text-lg text-slate-400 leading-8 max-w-xl">

                Hi, I'm Hassan Shair. A passionate Full Stack Web Developer
                specializing in Laravel, PHP, MySQL and JavaScript.
                I create secure, scalable and modern web applications.

            </p>

            <div
                class="mt-8 flex flex-col sm:flex-row gap-5">

                <a href="{{ url('/projects') }}"
                    class="px-8 py-4 rounded-2xl bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-semibold hover:scale-105 duration-300">

                    View Projects

                </a>

                <a href="{{ url('/contact') }}"
                    class="px-8 py-4 rounded-2xl border border-blue-500 text-blue-400 hover:bg-blue-600 hover:text-white duration-300">

                    Hire Me

                </a>

            </div>

        </div>

        <!-- Right -->
        <div
            class="flex justify-center lg:justify-start lg:-ml-24"
            data-aos="zoom-in">

            <div class="relative">

                <div
                    class="absolute inset-0 rounded-full bg-blue-600/20 blur-[120px]">
                </div>

                <img
                    src="{{ asset('images/profile.png') }}"
                    class="relative w-72 h-72 md:w-[380px] md:h-[380px] rounded-full border-4 border-blue-500 shadow-2xl object-cover">

                <!-- Floating Card -->
                <div
                    class="absolute -left-5 top-10 bg-[#111827] border border-slate-700 rounded-2xl px-5 py-3 shadow-xl">

                    <h3 class="text-blue-400 font-bold">
                        Laravel
                    </h3>

                    <p class="text-slate-400 text-sm">
                        Expert Developer
                    </p>

                </div>

                <div
                    class="absolute -right-5 bottom-10 bg-[#111827] border border-slate-700 rounded-2xl px-5 py-3 shadow-xl">

                    <h3 class="text-cyan-400 font-bold">
                        25+
                    </h3>

                    <p class="text-slate-400 text-sm">
                        Completed Projects
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ================= TECH STACK ================= -->

<section class="py-20">

    <div class="text-center">

        <h2
            class="text-4xl font-bold text-white">

            Technologies I Use

        </h2>

        <p
            class="mt-4 text-slate-400">

            Modern tools that power every project.

        </p>

    </div>

    <div
        class="mt-14 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6">

        @foreach([
        'Laravel',
        'PHP',
        'JavaScript',
        'MySQL',
        'Tailwind CSS',
        'GitHub'
        ] as $tech)

        <div
            class="bg-[#111827] border border-slate-700 rounded-2xl p-6 text-center hover:border-blue-500 hover:-translate-y-2 duration-300">

            <h3
                class="text-white font-semibold">

                {{ $tech }}

            </h3>

        </div>

        @endforeach

    </div>

</section>

<!-- ================= ABOUT ================= -->

<!-- ========================= -->
<!-- ABOUT SECTION -->
<!-- ========================= -->

<section class="py-16 lg:py-20">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-center">

        <!-- Image -->
        <div class="flex justify-center lg:justify-start" data-aos="fade-right">

            <div class="relative">

                <!-- Glow -->
                <div class="absolute inset-0 bg-blue-600/20 blur-[90px] rounded-3xl"></div>

                <img
                    src="{{ asset('images/profile.png') }}"
                    alt="Hassan Shair"
                    class="relative w-72 sm:w-80 lg:w-[340px] rounded-3xl border border-slate-700 shadow-2xl object-cover hover:scale-105 transition duration-500">

            </div>

        </div>

        <!-- Content -->
        <div data-aos="fade-left">

            <span
                class="inline-flex items-center px-4 py-2 rounded-full bg-blue-600/10 border border-blue-500 text-blue-400 text-sm font-semibold">

                👨‍💻 ABOUT ME

            </span>

            <h2
                class="mt-6 text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight text-white">

                Passionate Developer
                <br>

                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">

                    Creating Digital Solutions

                </span>

            </h2>

            <p
                class="mt-6 text-slate-400 leading-8 text-lg">

                I build premium Laravel applications, REST APIs, Admin
                Dashboards and modern responsive websites using Laravel,
                PHP, MySQL, JavaScript and Tailwind CSS.

            </p>

            <p
                class="mt-5 text-slate-400 leading-8">

                My focus is writing clean, scalable and secure code while
                delivering fast performance and a modern user experience.

            </p>

            <div class="mt-10">

                <a
                    href="{{ url('/about') }}"
                    class="inline-flex items-center px-8 py-4 rounded-2xl bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-semibold shadow-lg hover:scale-105 transition duration-300">

                    More About Me

                </a>

            </div>

        </div>

    </div>

</section>
<!-- ================= COUNTERS ================= -->

<section class="py-20">

    <div
        class="grid grid-cols-2 lg:grid-cols-4 gap-8">

        <div
            class="bg-[#111827] rounded-3xl border border-slate-700 p-10 text-center">

            <h2
                id="projects"
                class="text-5xl font-bold text-blue-400">

                0

            </h2>

            <p
                class="mt-3 text-slate-400">

                Projects

            </p>

        </div>

        <div
            class="bg-[#111827] rounded-3xl border border-slate-700 p-10 text-center">

            <h2
                id="clients"
                class="text-5xl font-bold text-blue-400">

                0

            </h2>

            <p
                class="mt-3 text-slate-400">

                Happy Clients

            </p>

        </div>

        <div
            class="bg-[#111827] rounded-3xl border border-slate-700 p-10 text-center">

            <h2
                id="years"
                class="text-5xl font-bold text-blue-400">

                0

            </h2>

            <p
                class="mt-3 text-slate-400">

                Years Learning

            </p>

        </div>

        <div
            class="bg-[#111827] rounded-3xl border border-slate-700 p-10 text-center">

            <h2
                class="text-5xl font-bold text-blue-400">

                100%

            </h2>

            <p
                class="mt-3 text-slate-400">

                Dedication

            </p>

        </div>

    </div>

</section>
<!-- ================= OUR SERVICES ================= -->

<section class="py-20">

    <div class="text-center">

        <span class="text-blue-400 font-semibold uppercase tracking-widest">
            What I Do
        </span>

        <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-white">
            Professional Services
        </h2>

        <p class="mt-5 text-slate-400 max-w-2xl mx-auto leading-8">
            I develop modern, responsive and high-performance web applications
            that help businesses grow with clean code and premium user experience.
        </p>

    </div>

    <div class="mt-16 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

        <!-- Card -->

        <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8 hover:border-blue-500 hover:-translate-y-3 duration-300">

            <div class="w-16 h-16 rounded-2xl bg-blue-600 flex items-center justify-center text-3xl">
                💻
            </div>

            <h3 class="text-white text-2xl font-bold mt-8">
                Laravel Development
            </h3>

            <p class="text-slate-400 mt-5 leading-8">
                Professional Laravel web applications, admin panels,
                authentication systems and REST APIs.
            </p>

        </div>

        <!-- Card -->

        <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8 hover:border-blue-500 hover:-translate-y-3 duration-300">

            <div class="w-16 h-16 rounded-2xl bg-cyan-600 flex items-center justify-center text-3xl">
                🌐
            </div>

            <h3 class="text-white text-2xl font-bold mt-8">
                Website Development
            </h3>

            <p class="text-slate-400 mt-5 leading-8">
                Responsive business websites, portfolios,
                company profiles and custom web solutions.
            </p>

        </div>

        <!-- Card -->

        <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8 hover:border-blue-500 hover:-translate-y-3 duration-300">

            <div class="w-16 h-16 rounded-2xl bg-indigo-600 flex items-center justify-center text-3xl">
                🛒
            </div>

            <h3 class="text-white text-2xl font-bold mt-8">
                E-Commerce
            </h3>

            <p class="text-slate-400 mt-5 leading-8">
                Complete online stores with product management,
                orders, payments and dashboards.
            </p>

        </div>

        <!-- Card -->

        <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8 hover:border-blue-500 hover:-translate-y-3 duration-300">

            <div class="w-16 h-16 rounded-2xl bg-green-600 flex items-center justify-center text-3xl">
                📱
            </div>

            <h3 class="text-white text-2xl font-bold mt-8">
                Responsive Design
            </h3>

            <p class="text-slate-400 mt-5 leading-8">
                Mobile-first layouts optimized for Desktop,
                Tablet and Smartphone devices.
            </p>

        </div>

        <!-- Card -->

        <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8 hover:border-blue-500 hover:-translate-y-3 duration-300">

            <div class="w-16 h-16 rounded-2xl bg-purple-600 flex items-center justify-center text-3xl">
                ⚡
            </div>

            <h3 class="text-white text-2xl font-bold mt-8">
                Performance Optimization
            </h3>

            <p class="text-slate-400 mt-5 leading-8">
                Fast loading websites with optimized code,
                SEO and excellent user experience.
            </p>

        </div>

        <!-- Card -->

        <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8 hover:border-blue-500 hover:-translate-y-3 duration-300">

            <div class="w-16 h-16 rounded-2xl bg-red-600 flex items-center justify-center text-3xl">
                🔒
            </div>

            <h3 class="text-white text-2xl font-bold mt-8">
                Secure Solutions
            </h3>

            <p class="text-slate-400 mt-5 leading-8">
                Secure authentication, validation,
                database protection and scalable architecture.
            </p>

        </div>

    </div>

</section>

<!-- ================= WHY CHOOSE ME ================= -->

<section class="py-20">

    <div class="text-center">

        <span class="text-blue-400 uppercase tracking-widest">
            Why Choose Me
        </span>

        <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-white">
            Why Clients Love Working With Me
        </h2>

    </div>

    <div class="mt-16 grid grid-cols-2 lg:grid-cols-4 gap-6">

        @foreach([
        'Clean Code',
        'Responsive Design',
        'Fast Performance',
        'SEO Friendly',
        'Modern UI',
        'Secure Website',
        'REST APIs',
        '24/7 Support'
        ] as $item)

        <div class="bg-[#111827] border border-slate-700 rounded-2xl p-8 text-center hover:border-blue-500 hover:scale-105 duration-300">

            <div class="text-4xl mb-5">
                ✔
            </div>

            <h3 class="text-white font-semibold">
                {{ $item }}
            </h3>

        </div>

        @endforeach

    </div>

</section>

<!-- ================= FEATURED SKILLS ================= -->

<section class="py-20">

    <div class="text-center">

        <span class="text-blue-400 uppercase tracking-widest">
            Skills
        </span>

        <h2 class="mt-4 text-4xl font-bold text-white">
            My Technical Skills
        </h2>

    </div>

    <div class="max-w-4xl mx-auto mt-16 space-y-8">

        @foreach([
        ['Laravel','95'],
        ['PHP','90'],
        ['MySQL','88'],
        ['JavaScript','85'],
        ['Tailwind CSS','95'],
        ['Git & GitHub','80']
        ] as $skill)

        <div>

            <div class="flex justify-between mb-3">

                <span class="text-white font-medium">
                    {{ $skill[0] }}
                </span>

                <span class="text-blue-400">
                    {{ $skill[1] }}%
                </span>

            </div>

            <div class="w-full h-3 bg-slate-700 rounded-full overflow-hidden">

                <div
                    class="h-3 rounded-full bg-gradient-to-r from-blue-600 to-cyan-500"
                    style="width: {{ $skill[1] }}%;">
                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>
<!-- ================= FEATURED PROJECTS ================= -->

<section class="py-24">

    <div class="text-center">

        <span class="text-blue-400 uppercase tracking-widest">
            Portfolio
        </span>

        <h2 class="mt-4 text-4xl lg:text-5xl font-bold text-white">
            Featured Projects
        </h2>

        <p class="mt-5 text-slate-400 max-w-2xl mx-auto">
            Here are some of my latest web applications built using Laravel,
            PHP, MySQL and modern frontend technologies.
        </p>

    </div>

    <div class="mt-16 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

        <!-- Project -->

        <div class="group overflow-hidden rounded-3xl bg-[#111827] border border-slate-700 hover:border-blue-500 transition duration-500">

            <div class="overflow-hidden">

                <img src="{{ asset('images/projects/ecommerce.jpg') }}"
                    class="h-60 w-full object-cover group-hover:scale-110 duration-500">

            </div>

            <div class="p-7">

                <span class="text-blue-400 text-sm">
                    Laravel • PHP • MySQL
                </span>

                <h3 class="text-2xl font-bold text-white mt-3">
                    E-Commerce Website
                </h3>

                <p class="text-slate-400 mt-4">
                    Complete online shopping system with Admin Dashboard.
                </p>

                <a href="{{ url('/projects') }}"
                    class="inline-flex mt-6 text-blue-400 font-semibold hover:text-white">

                    View Project →

                </a>

            </div>

        </div>

        <!-- Project -->

        <div class="group overflow-hidden rounded-3xl bg-[#111827] border border-slate-700 hover:border-blue-500 transition duration-500">

            <div class="overflow-hidden">

                <img src="{{ asset('images/projects/blog.jpg') }}"
                    class="h-60 w-full object-cover group-hover:scale-110 duration-500">

            </div>

            <div class="p-7">

                <span class="text-blue-400 text-sm">
                    Laravel Blog
                </span>

                <h3 class="text-2xl font-bold text-white mt-3">
                    Blog Management System
                </h3>

                <p class="text-slate-400 mt-4">
                    Multi-category blogging platform with Admin Panel.
                </p>

                <a href="{{ url('/projects') }}"
                    class="inline-flex mt-6 text-blue-400 font-semibold hover:text-white">

                    View Project →

                </a>

            </div>

        </div>

        <!-- Project -->

        <div class="group overflow-hidden rounded-3xl bg-[#111827] border border-slate-700 hover:border-blue-500 transition duration-500">

            <div class="overflow-hidden">

                <img src="{{ asset('images/projects/weather.jpg') }}"
                    class="h-60 w-full object-cover group-hover:scale-110 duration-500">

            </div>

            <div class="p-7">

                <span class="text-blue-400 text-sm">
                    Weather API
                </span>

                <h3 class="text-2xl font-bold text-white mt-3">
                    Weather Forecast App
                </h3>

                <p class="text-slate-400 mt-4">
                    Real-time weather application using REST API.
                </p>

                <a href="{{ url('/projects') }}"
                    class="inline-flex mt-6 text-blue-400 font-semibold hover:text-white">

                    View Project →

                </a>

            </div>

        </div>

    </div>

</section>


@endsection