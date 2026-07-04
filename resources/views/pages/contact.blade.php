@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<!-- Hero -->
<section class="py-16 lg:py-20">

    <div class="text-center max-w-4xl mx-auto">

        <span class="inline-block px-5 py-2 rounded-full bg-blue-600/20 border border-blue-500 text-blue-400">
            📩 Contact Me
        </span>

        <h1 class="mt-6 text-5xl lg:text-7xl font-extrabold text-white">

            Let's Work

            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-cyan-400">
                Together
            </span>

        </h1>

        <p class="mt-6 text-slate-400 text-lg leading-8">

            Have a project in mind? Send me a message and I'll get back to you as soon as possible.

        </p>

    </div>

</section>

@if(session('success'))

<div class="max-w-7xl mx-auto mb-8">

    <div class="bg-green-600/20 border border-green-500 text-green-300 rounded-2xl p-5">

        {{ session('success') }}

    </div>

</div>

@endif

<!-- Contact Section -->
<section class="pb-24">

    <div class="grid lg:grid-cols-3 gap-10">

        <!-- Contact Info -->

        <div class="space-y-6">

            <div class="bg-[#111827] rounded-3xl border border-slate-700 p-8">

                <div class="w-16 h-16 rounded-2xl bg-blue-600 flex items-center justify-center text-3xl">

                    📧

                </div>

                <h3 class="text-white text-2xl font-bold mt-6">

                    Email

                </h3>

                <p class="text-slate-400 mt-3">

                    hassanshairgorya01@gmail.com

                </p>

            </div>

            <div class="bg-[#111827] rounded-3xl border border-slate-700 p-8">

                <div class="w-16 h-16 rounded-2xl bg-blue-600 flex items-center justify-center text-3xl">

                    📱

                </div>

                <h3 class="text-white text-2xl font-bold mt-6">

                    Phone

                </h3>

                <p class="text-slate-400 mt-3">

                    +92 323 2151512

                </p>

            </div>

            <div class="bg-[#111827] rounded-3xl border border-slate-700 p-8">

                <div class="w-16 h-16 rounded-2xl bg-blue-600 flex items-center justify-center text-3xl">

                    📍

                </div>

                <h3 class="text-white text-2xl font-bold mt-6">

                    Location

                </h3>

                <p class="text-slate-400 mt-3">

                    Punjab, Pakistan

                </p>

            </div>

        </div>

        <!-- Contact Form -->

        <div class="lg:col-span-2">

            <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8 lg:p-10">

                <h2 class="text-3xl font-bold text-white mb-8">

                    Send Message

                </h2>

                <form action="{{ route('contact.store') }}" method="POST">

                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">

                        <div>

                            <label class="block text-slate-300 mb-2">

                                Full Name

                            </label>

                            <input
                                type="text"
                                name="name"
                                required
                                class="w-full bg-slate-900 border border-slate-700 rounded-xl px-5 py-4 text-white focus:border-blue-500 outline-none">

                        </div>

                        <div>

                            <label class="block text-slate-300 mb-2">

                                Email Address

                            </label>

                            <input
                                type="email"
                                name="email"
                                required
                                class="w-full bg-slate-900 border border-slate-700 rounded-xl px-5 py-4 text-white focus:border-blue-500 outline-none">

                        </div>

                    </div>

                    <div class="grid md:grid-cols-2 gap-6 mt-6">

                        <div>

                            <label class="block text-slate-300 mb-2">

                                Phone

                            </label>

                            <input
                                type="text"
                                name="phone"
                                class="w-full bg-slate-900 border border-slate-700 rounded-xl px-5 py-4 text-white focus:border-blue-500 outline-none">

                        </div>

                        <div>

                            <label class="block text-slate-300 mb-2">

                                Subject

                            </label>

                            <input
                                type="text"
                                name="subject"
                                class="w-full bg-slate-900 border border-slate-700 rounded-xl px-5 py-4 text-white focus:border-blue-500 outline-none">

                        </div>

                    </div>

                    <div class="mt-6">

                        <label class="block text-slate-300 mb-2">

                            Message

                        </label>

                        <textarea
                            rows="7"
                            name="message"
                            required
                            class="w-full bg-slate-900 border border-slate-700 rounded-xl px-5 py-4 text-white focus:border-blue-500 outline-none resize-none"></textarea>

                    </div>

                    <button
                        class="mt-8 w-full py-4 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold hover:scale-[1.02] transition duration-300">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection