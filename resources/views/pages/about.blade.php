@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- ========================= -->
<!-- HERO SECTION -->
<!-- ========================= -->

<section class="py-16 lg:py-20">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-6 items-center">

        <!-- Left Content -->
        <div data-aos="fade-right">

            <span class="inline-flex items-center px-5 py-2 rounded-full bg-blue-600/20 border border-blue-500 text-blue-300 text-sm font-medium">
                👋 Welcome To My Portfolio
            </span>

            <h1 class="mt-6 text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight">

                Hi, I'm

                <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-blue-500 via-cyan-400 to-indigo-500">

                    Hassan Shair

                </span>

            </h1>

            <h2 class="mt-5 text-xl sm:text-2xl text-slate-300 font-semibold">

                Full Stack Web Developer

            </h2>

            <p class="mt-6 text-slate-400 leading-8 max-w-lg">

                I specialize in building modern, fast and responsive web
                applications using Laravel, PHP, MySQL, JavaScript,
                Tailwind CSS and modern web technologies.

            </p>

            <div class="mt-10 flex flex-wrap gap-4">

                <a href="{{ url('/contact') }}"
                    class="px-8 py-4 rounded-2xl bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-semibold shadow-lg hover:scale-105 transition duration-300">

                    Hire Me

                </a>

                <a href="{{ url('/projects') }}"
                    class="px-8 py-4 rounded-2xl border border-blue-500 text-blue-400 font-semibold hover:bg-blue-600 hover:text-white transition duration-300">

                    View Projects

                </a>

            </div>

        </div>

        <!-- Right Image -->

        <div class="flex justify-center lg:justify-start lg:-ml-16" data-aos="zoom-in">

            <div class="relative">

                <!-- Glow -->
                <div class="absolute inset-0 bg-blue-500/20 blur-[120px] rounded-full"></div>

                <!-- Image -->
                <div class="relative p-[4px] rounded-full bg-gradient-to-r from-blue-500 via-cyan-400 to-indigo-500 shadow-2xl">

                    <img
                        src="{{ asset('images/profile.png') }}"
                        alt="Profile"
                        class="w-72 h-72 sm:w-80 sm:h-80 lg:w-[380px] lg:h-[380px] rounded-full object-cover bg-[#0F172A]">

                </div>

                <!-- Experience Card -->

                <div class="absolute -bottom-5 -left-5 bg-[#111827] border border-slate-700 rounded-2xl px-5 py-4 shadow-2xl">

                    <h3 class="text-3xl font-bold text-blue-400">

                        2+

                    </h3>

                    <p class="text-sm text-slate-400">

                        Years Experience

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- MISSION & VISION -->
<section class="py-16 relative">

    <div class="relative max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">

        <div class="absolute inset-0 flex justify-center">
            <div class="w-[600px] h-[600px] bg-gradient-to-r from-blue-600/10 to-cyan-500/10 blur-[160px] rounded-full"></div>
        </div>

        <!-- MISSION -->
        <div data-aos="fade-up"
            class="relative bg-[#111827] border border-slate-700 rounded-3xl shadow-xl p-8 sm:p-12 hover:-translate-y-2 transition">

            <div class="w-20 h-20 rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 flex items-center justify-center mx-auto shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-2.2 0-4 1.8-4 4s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4z"/>
                </svg>
            </div>

            <h2 class="text-3xl font-bold text-white text-center mt-6">
                My Mission
            </h2>

            <p class="mt-5 text-slate-400 text-center">
                Build modern, fast and scalable web applications with clean code and best user experience.
            </p>

        </div>

        <!-- VISION -->
        <div data-aos="fade-up"
            class="relative bg-[#111827] border border-slate-700 rounded-3xl shadow-xl p-8 sm:p-12 hover:-translate-y-2 transition">

            <div class="w-20 h-20 rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 flex items-center justify-center mx-auto shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>

            <h2 class="text-3xl font-bold text-white text-center mt-6">
                My Vision
            </h2>

            <p class="mt-5 text-slate-400 text-center">
                Become a top Full Stack Developer and build impactful digital products for global businesses.
            </p>

        </div>

    </div>

</section>

<!-- COUNTERS -->
<section class="py-16">

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-center">

        <div class="bg-[#111827] p-8 rounded-2xl border border-slate-700" data-aos="fade-up">
            <h2 id="projects" class="text-5xl font-bold text-blue-500">0</h2>
            <p class="text-slate-400 mt-2">Projects</p>
        </div>

        <div class="bg-[#111827] p-8 rounded-2xl border border-slate-700" data-aos="fade-up" data-aos-delay="150">
            <h2 id="clients" class="text-5xl font-bold text-blue-500">0</h2>
            <p class="text-slate-400 mt-2">Clients</p>
        </div>

        <div class="bg-[#111827] p-8 rounded-2xl border border-slate-700" data-aos="fade-up" data-aos-delay="300">
            <h2 id="years" class="text-5xl font-bold text-blue-500">0</h2>
            <p class="text-slate-400 mt-2">Years Experience</p>
        </div>

    </div>

</section>

<!-- SKILLS -->
<section class="py-16">

    <h2 class="text-3xl font-bold text-center mb-10 text-white" data-aos="fade-up">
        My Skills
    </h2>

    <div class="max-w-3xl mx-auto space-y-6">

        <div data-aos="fade-right">
            <p class="text-slate-300 mb-2">Laravel</p>
            <div class="w-full bg-slate-700 h-3 rounded-full">
                <div class="bg-blue-600 h-3 rounded-full w-[90%]"></div>
            </div>
        </div>

        <div data-aos="fade-right" data-aos-delay="100">
            <p class="text-slate-300 mb-2">PHP</p>
            <div class="w-full bg-slate-700 h-3 rounded-full">
                <div class="bg-blue-600 h-3 rounded-full w-[85%]"></div>
            </div>
        </div>

        <div data-aos="fade-right" data-aos-delay="200">
            <p class="text-slate-300 mb-2">JavaScript</p>
            <div class="w-full bg-slate-700 h-3 rounded-full">
                <div class="bg-blue-600 h-3 rounded-full w-[80%]"></div>
            </div>
        </div>

    </div>

</section>
<!-- ========================= -->
<!-- READY TO WORK CTA SECTION -->
<!-- ========================= -->
<section class="py-20">

    <div
        class="relative overflow-hidden rounded-[35px] border border-slate-700 bg-gradient-to-r from-[#111827] via-[#1E293B] to-[#0F172A] px-8 py-16 sm:px-12 lg:px-20">

        <!-- Background Glow -->
        <div class="absolute -top-20 -left-20 w-72 h-72 bg-blue-600/20 rounded-full blur-[120px]"></div>
        <div class="absolute -bottom-20 -right-20 w-72 h-72 bg-cyan-500/20 rounded-full blur-[120px]"></div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">

            <!-- Small Heading -->
            <span
                class="inline-flex items-center px-5 py-2 rounded-full bg-blue-600/20 border border-blue-500 text-blue-300 font-medium">
                🚀 Ready to Work Together?
            </span>

            <!-- Main Heading -->
            <h2
                class="mt-6 text-4xl md:text-5xl font-extrabold leading-tight text-white">

                Let's Build
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-400">
                    Something Amazing
                </span>

            </h2>

            <!-- Description -->
            <p
                class="mt-6 text-lg leading-8 text-slate-400 max-w-3xl mx-auto">

                Ready to transform your digital vision into reality?
                Let's discuss your project and create modern, scalable
                and high-quality web solutions that help your business grow.

            </p>

            <!-- Buttons -->
            <div
                class="mt-10 flex flex-col sm:flex-row justify-center items-center gap-5">

                <a href="{{ url('/contact') }}"
                    class="px-8 py-4 rounded-2xl bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-semibold shadow-lg hover:scale-105 duration-300">

                    Start Your Project

                </a>

                <a href="{{ url('/contact') }}"
                    class="px-8 py-4 rounded-2xl border border-blue-500 text-blue-400 font-semibold hover:bg-blue-600 hover:text-white duration-300">

                    Contact

                </a>

            </div>

        </div>

    </div>

</section>

@endsection