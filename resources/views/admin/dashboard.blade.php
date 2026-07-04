@extends('admin.layout')

@section('title','Dashboard')

@section('content')

@if(session('success'))
<div class="mb-6 rounded-xl bg-green-600/20 border border-green-500 text-green-300 p-4">
    {{ session('success') }}
</div>
@endif

<!-- Header -->
<div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-10">

    <div>
        <h1 class="text-4xl font-bold text-white">
            Dashboard
        </h1>

        <p class="text-slate-400 mt-2">
            Welcome back Hassan 👋
        </p>
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button
            type="submit"
            class="px-6 py-3 rounded-xl bg-red-600 hover:bg-red-700 transition text-white font-semibold">
            Logout
        </button>

    </form>

</div>

<!-- Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">

    <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8">
        <h3 class="text-slate-400">Projects</h3>
        <h2 class="text-5xl font-bold text-blue-400 mt-3">3</h2>
    </div>

    <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8">
        <h3 class="text-slate-400">Skills</h3>
        <h2 class="text-5xl font-bold text-green-400 mt-3">10</h2>
    </div>

    <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8">
        <h3 class="text-slate-400">Messages</h3>
        <h2 class="text-5xl font-bold text-yellow-400 mt-3">
            {{ \App\Models\ContactMessage::count() }}
        </h2>
    </div>

    <div class="bg-[#111827] border border-slate-700 rounded-3xl p-8">
        <h3 class="text-slate-400">Status</h3>
        <h2 class="text-3xl font-bold text-red-400 mt-3">
            Online
        </h2>
    </div>

</div>

<!-- Messages -->
<div class="mt-12 bg-[#111827] border border-slate-700 rounded-3xl overflow-hidden">

    <div class="p-6 border-b border-slate-700">
        <h2 class="text-2xl font-bold text-white">
            Contact Messages
        </h2>
    </div>

    <div class="overflow-x-auto">

        <table class="w-full min-w-[850px]">

            <thead>

                <tr class="border-b border-slate-700">

                    <th class="p-5 text-left text-slate-300">Name</th>

                    <th class="p-5 text-left text-slate-300">Email</th>

                    <th class="p-5 text-left text-slate-300">Subject</th>

                    <th class="p-5 text-left text-slate-300">Message</th>

                    <th class="p-5 text-left text-slate-300">Date</th>

                    <th class="p-5 text-center text-slate-300">Action</th>

                </tr>

            </thead>

            <tbody>

                @forelse(\App\Models\ContactMessage::latest()->get() as $message)

                <tr class="border-b border-slate-800 hover:bg-slate-800/30">

                    <td class="p-5 text-white">
                        {{ $message->name }}
                    </td>

                    <td class="p-5 text-slate-400">
                        {{ $message->email }}
                    </td>

                    <td class="p-5 text-slate-400">
                        {{ $message->subject }}
                    </td>

                    <td class="p-5 text-slate-400 max-w-xs">
                        {{ Str::limit($message->message,60) }}
                    </td>

                    <td class="p-5 text-slate-400">
                        {{ $message->created_at->format('d M Y') }}
                    </td>

                    <td class="p-5 text-center">

                        <form action="{{ route('messages.destroy',$message->id) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Delete this message?')"
                                class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white">

                                Delete

                            </button>

                        </form>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6" class="text-center text-slate-400 p-8">

                        No messages found.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection