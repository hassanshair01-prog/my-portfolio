<nav
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.pageYOffset > 20"
    class="fixed top-4 left-1/2 -translate-x-1/2 w-[95%] max-w-7xl z-50">

    <div
        :class="scrolled
            ? 'bg-[#111827]/95 border-slate-700 shadow-2xl'
            : 'bg-[#111827]/80 border-slate-700 shadow-xl'"
        class="backdrop-blur-2xl border border-slate-700 rounded-3xl transition-all duration-300">

        <div class="h-20 px-5 lg:px-8 flex items-center justify-between">

            <!-- Logo -->
            <a href="{{ url('/') }}"
                class="text-3xl font-extrabold tracking-wide flex items-center">

                <span class="text-white">Hassan</span>
                <span class="text-blue-500">.</span>

            </a>

            <!-- Desktop Menu -->
            <ul class="hidden lg:flex items-center gap-8 xl:gap-10 font-medium">

                <li>
                    <a href="{{ url('/home') }}"
                        class="{{ request()->is('/') || request()->is('home') ? 'text-blue-400' : 'text-white' }} hover:text-blue-400 transition">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ url('/about') }}"
                        class="{{ request()->is('about') ? 'text-blue-400' : 'text-white' }} hover:text-blue-400 transition">
                        About
                    </a>
                </li>

                <li>
                    <a href="{{ url('/skills') }}"
                        class="{{ request()->is('skills') ? 'text-blue-400' : 'text-white' }} hover:text-blue-400 transition">
                        Skills
                    </a>
                </li>

                <li>
                    <a href="{{ url('/projects') }}"
                        class="{{ request()->is('projects') || request()->is('projects/*') ? 'text-blue-400' : 'text-white' }} hover:text-blue-400 transition">
                        Projects
                    </a>
                </li>

                <li>
                    <a href="{{ url('/contact') }}"
                        class="{{ request()->is('contact') ? 'text-blue-400' : 'text-white' }} hover:text-blue-400 transition">
                        Contact
                    </a>
                </li>

            </ul>

            <!-- Desktop Button -->
            <a href="{{ route('login') }}"
                class="hidden lg:flex items-center gap-3 px-6 py-3 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold shadow-lg hover:scale-105 hover:shadow-blue-500/40 transition">

                <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5.121 17.804A9 9 0 1118.88 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0"/>

                    </svg>

                </div>

                <span>My Account</span>

            </a>

            <!-- Mobile Button -->
            <button
                @click="open=!open"
                class="lg:hidden p-2 rounded-xl text-white hover:bg-slate-700 transition">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

            </button>

        </div>

        <!-- Mobile Menu -->
        <div
            x-show="open"
            x-transition
            @click.away="open=false"
            class="lg:hidden border-t border-slate-700 bg-[#111827] rounded-b-3xl">

            <div class="flex flex-col gap-5 p-6">

                <a href="{{ url('/home') }}"
                    class="{{ request()->is('/') || request()->is('home') ? 'text-blue-400 font-semibold' : 'text-white' }}">
                    Home
                </a>

                <a href="{{ url('/about') }}"
                    class="{{ request()->is('about') ? 'text-blue-400 font-semibold' : 'text-white' }}">
                    About
                </a>

                <a href="{{ url('/skills') }}"
                    class="{{ request()->is('skills') ? 'text-blue-400 font-semibold' : 'text-white' }}">
                    Skills
                </a>

                <a href="{{ url('/projects') }}"
                    class="{{ request()->is('projects') || request()->is('projects/*') ? 'text-blue-400 font-semibold' : 'text-white' }}">
                    Projects
                </a>

                <a href="{{ url('/contact') }}"
                    class="{{ request()->is('contact') ? 'text-blue-400 font-semibold' : 'text-white' }}">
                    Contact
                </a>

                <a href="{{ route('login') }}"
                    class="mt-3 flex items-center justify-center gap-3 py-3 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5.121 17.804A9 9 0 1118.88 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0"/>

                    </svg>

                    My Account

                </a>

            </div>

        </div>

    </div>

</nav>