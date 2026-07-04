@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<!-- Hero Section -->
<section class="py-12 sm:py-16 lg:py-20">

    <div class="max-w-4xl mx-auto text-center px-4">

        <span class="inline-block px-5 py-2 rounded-full bg-blue-600/20 border border-blue-500 text-blue-400 text-sm">
            🚀 My Portfolio
        </span>

        <h1 class="mt-6 text-4xl sm:text-5xl lg:text-7xl font-extrabold text-white">
            My
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">
                Projects
            </span>
        </h1>

        <p class="mt-6 text-base sm:text-lg text-slate-400 leading-8">
            Here are some of my featured Laravel projects that showcase my
            skills in full-stack web development.
        </p>

    </div>

</section>

<!-- Projects -->
<section class="pb-20">

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

        <!-- ================= Ecommerce ================= -->

        <div class="flex flex-col bg-[#111827] rounded-3xl overflow-hidden border border-slate-700 hover:border-blue-500 hover:-translate-y-2 duration-500">

            <div class="overflow-hidden">

                <img src="{{ asset('images/projects/ecommerce.jpg') }}"
                    class="w-full h-56 sm:h-64 object-cover hover:scale-110 duration-700">

            </div>

            <div class="flex flex-col flex-1 p-6">

                <span class="text-blue-400 text-sm">
                    Laravel • PHP • MySQL
                </span>

                <h2 class="text-2xl font-bold text-white mt-3">
                    Ecommerce Website
                </h2>

                <p class="text-slate-400 leading-7 mt-4 flex-1">
                    Complete Ecommerce Website with Admin Dashboard,
                    Product Management, Categories, Orders,
                    Authentication and Responsive Design.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 mt-8">

                    <a href="{{ route('project.details','ecommerce') }}"
                        class="flex-1 py-3 bg-blue-600 rounded-xl text-white text-center hover:bg-blue-700 transition">

                        View Details

                    </a>

                    <a href="#"
                        class="flex-1 py-3 border border-blue-500 rounded-xl text-blue-400 text-center hover:bg-blue-600 hover:text-white transition">

                        Live Demo

                    </a>

                </div>

            </div>

        </div>

        <!-- ================= Blog ================= -->

        <div class="flex flex-col bg-[#111827] rounded-3xl overflow-hidden border border-slate-700 hover:border-blue-500 hover:-translate-y-2 duration-500">

            <div class="overflow-hidden">

                <img src="{{ asset('images/projects/blog.jpg') }}"
                    class="w-full h-56 sm:h-64 object-cover hover:scale-110 duration-700">

            </div>

            <div class="flex flex-col flex-1 p-6">

                <span class="text-blue-400 text-sm">
                    Laravel • Blog CMS
                </span>

                <h2 class="text-2xl font-bold text-white mt-3">
                    Blog Management System
                </h2>

                <p class="text-slate-400 leading-7 mt-4 flex-1">
                    Modern Blog CMS with Posts, Categories,
                    Authentication, Admin Dashboard
                    and Responsive Design.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 mt-8">

                    <a href="{{ route('project.details','blog') }}"
                        class="flex-1 py-3 bg-blue-600 rounded-xl text-white text-center hover:bg-blue-700 transition">

                        View Details

                    </a>

                    <a href="#"
                        class="flex-1 py-3 border border-blue-500 rounded-xl text-blue-400 text-center hover:bg-blue-600 hover:text-white transition">

                        Live Demo

                    </a>

                </div>

            </div>

        </div>

        <!-- ================= Weather ================= -->

        <div class="flex flex-col bg-[#111827] rounded-3xl overflow-hidden border border-slate-700 hover:border-blue-500 hover:-translate-y-2 duration-500">

            <div class="overflow-hidden">

                <img src="{{ asset('images/projects/weather.jpg') }}"
                    class="w-full h-56 sm:h-64 object-cover hover:scale-110 duration-700">

            </div>

            <div class="flex flex-col flex-1 p-6">

                <span class="text-blue-400 text-sm">
                    Laravel • API • JavaScript
                </span>

                <h2 class="text-2xl font-bold text-white mt-3">
                    Weather App
                </h2>

                <p class="text-slate-400 leading-7 mt-4 flex-1">
                    Weather Application using Weather API with
                    Live Forecast, City Search,
                    Favorite Cities and Responsive UI.
                </p>

                <div class="flex flex-col sm:flex-row gap-3 mt-8">

                    <a href="{{ route('project.details','weather') }}"
                        class="flex-1 py-3 bg-blue-600 rounded-xl text-white text-center hover:bg-blue-700 transition">

                        View Details

                    </a>

                    <a href="#"
                        class="flex-1 py-3 border border-blue-500 rounded-xl text-blue-400 text-center hover:bg-blue-600 hover:text-white transition">

                        Live Demo

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection