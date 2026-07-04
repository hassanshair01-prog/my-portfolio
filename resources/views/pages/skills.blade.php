@extends('layouts.app')

@section('title','Skills')

@section('content')

<!-- Hero -->
<section class="py-16">

    <div class="text-center max-w-3xl mx-auto">

        <span
            class="px-5 py-2 rounded-full bg-blue-600/20 border border-blue-500 text-blue-300">

            🚀 My Skills

        </span>

        <h1
            class="mt-6 text-4xl md:text-5xl lg:text-6xl font-extrabold text-white">

            Technologies I Work With

        </h1>

        <p class="mt-6 text-slate-400 leading-8">

            I specialize in developing modern, responsive and scalable web
            applications using Laravel, PHP, MySQL and JavaScript.

        </p>

    </div>

</section>

<!-- Skills -->
<section class="py-10">

<div class="grid lg:grid-cols-2 gap-16 items-center">

<div>

<h2 class="text-4xl font-bold text-white">

Professional Skills

</h2>

<p class="mt-6 text-slate-400 leading-8">

As a Full Stack Laravel Developer I focus on creating secure,
fast and user-friendly web applications with modern UI.

</p>

<div class="mt-8">

<a href="{{ url('/contact') }}"
class="px-8 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-semibold hover:scale-105 duration-300">

Hire Me

</a>

</div>

</div>

<div class="space-y-8">

<!-- Laravel -->

<div>

<div class="flex justify-between mb-2">

<span class="text-white font-semibold">
Laravel
</span>

<span class="text-blue-400">
95%
</span>

</div>

<div class="w-full h-3 bg-slate-700 rounded-full">

<div class="h-3 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 w-[95%]">

</div>

</div>

</div>

<!-- PHP -->

<div>

<div class="flex justify-between mb-2">

<span class="text-white font-semibold">
PHP
</span>

<span class="text-blue-400">
90%
</span>

</div>

<div class="w-full h-3 bg-slate-700 rounded-full">

<div class="h-3 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 w-[90%]">

</div>

</div>

</div>

<!-- JavaScript -->

<div>

<div class="flex justify-between mb-2">

<span class="text-white font-semibold">
JavaScript
</span>

<span class="text-blue-400">
85%
</span>

</div>

<div class="w-full h-3 bg-slate-700 rounded-full">

<div class="h-3 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 w-[85%]">

</div>

</div>

</div>

<!-- MySQL -->

<div>

<div class="flex justify-between mb-2">

<span class="text-white font-semibold">
MySQL
</span>

<span class="text-blue-400">
90%
</span>

</div>

<div class="w-full h-3 bg-slate-700 rounded-full">

<div class="h-3 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 w-[90%]">

</div>

</div>

</div>

<!-- Tailwind -->

<div>

<div class="flex justify-between mb-2">

<span class="text-white font-semibold">
Tailwind CSS
</span>

<span class="text-blue-400">
95%
</span>

</div>

<div class="w-full h-3 bg-slate-700 rounded-full">

<div class="h-3 rounded-full bg-gradient-to-r from-blue-600 to-cyan-400 w-[95%]">

</div>

</div>

</div>

</div>

</div>

</section>

<!-- Tech Stack -->

<section class="py-20">

<h2
class="text-center text-4xl font-bold text-white mb-12">

Tech Stack

</h2>

<div
class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

@foreach([
'Laravel',
'PHP',
'JavaScript',
'MySQL',
'Tailwind CSS',
'Bootstrap',
'HTML5',
'CSS3',
'Git',
'GitHub'
] as $skill)

<div
class="bg-[#111827] border border-slate-700 rounded-2xl p-8 text-center hover:border-blue-500 hover:-translate-y-2 duration-300">

<h3
class="text-white font-bold">

{{ $skill }}

</h3>

</div>

@endforeach

</div>

</section>

<!-- Services -->

<section class="py-10">

<h2
class="text-center text-4xl font-bold text-white mb-12">

What I Can Do

</h2>

<div
class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

@foreach([

'Laravel Development',

'REST API Development',

'Responsive Websites',

'Admin Dashboard',

'Database Design',

'Performance Optimization'

] as $service)

<div
class="bg-[#111827] border border-slate-700 rounded-3xl p-8 hover:border-blue-500 hover:-translate-y-2 duration-300">

<h3
class="text-xl font-bold text-white">

{{ $service }}

</h3>

</div>

@endforeach

</div>

</section>

@endsection