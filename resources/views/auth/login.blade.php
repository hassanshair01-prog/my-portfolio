@extends('layouts.app')

@section('title','Admin Login')

@section('content')

<section class="min-h-screen flex items-center justify-center py-16">

    <div class="w-full max-w-md">

        <!-- Login Card -->
        <div class="bg-[#111827] border border-slate-700 rounded-3xl shadow-2xl overflow-hidden">

            <!-- Header -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-8 py-10 text-center">

                <div class="w-20 h-20 rounded-full bg-white/20 mx-auto flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-10 h-10 text-white"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5.121 17.804A9 9 0 1118.88 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0"/>

                    </svg>

                </div>

                <h1 class="text-3xl font-bold text-white mt-5">

                    Admin Login

                </h1>

                <p class="text-blue-100 mt-2">

                    Sign in to manage your portfolio

                </p>

            </div>

            <!-- Body -->
            <div class="p-8">

                @if ($errors->any())

                    <div class="mb-6 rounded-xl bg-red-500/20 border border-red-500 p-4 text-red-300">

                        {{ $errors->first() }}

                    </div>

                @endif

                <form action="{{ route('login.submit') }}" method="POST">

                    @csrf

                    <!-- Email -->
                    <div class="mb-6">

                        <label class="block text-slate-300 mb-2">

                            Email Address

                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            class="w-full rounded-xl bg-slate-900 border border-slate-700 px-5 py-4 text-white focus:border-blue-500 focus:outline-none">

                    </div>

                    <!-- Password -->
                    <div class="mb-6">

                        <label class="block text-slate-300 mb-2">

                            Password

                        </label>

                        <input
                            type="password"
                            name="password"
                            required
                            class="w-full rounded-xl bg-slate-900 border border-slate-700 px-5 py-4 text-white focus:border-blue-500 focus:outline-none">

                    </div>

                    <!-- Remember -->
                    <div class="flex items-center justify-between mb-8">

                        <label class="flex items-center gap-2 text-slate-400">

                            <input type="checkbox" class="rounded">

                            Remember Me

                        </label>

                    </div>

                    <!-- Login Button -->
                    <button
                        class="w-full py-4 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold hover:scale-[1.02] duration-300 shadow-lg">

                        Login

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection