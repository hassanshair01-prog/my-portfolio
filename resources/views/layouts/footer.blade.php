<footer class="relative mt-24 border-t border-slate-800 bg-[#0B1120] overflow-hidden">

    <!-- Background Glow -->
    <div class="absolute -top-24 left-0 w-72 h-72 bg-blue-600/10 blur-[120px] rounded-full"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-cyan-500/10 blur-[140px] rounded-full"></div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-10 py-20">

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-12">

            <!-- About -->
            <div>

                <a href="{{ url('/') }}"
                    class="text-3xl font-extrabold text-white">

                    Hassan<span class="text-blue-500">.</span>

                </a>

                <p class="mt-6 text-slate-400 leading-8">

                    I build modern, scalable and high-performance web
                    applications using Laravel, PHP, MySQL, JavaScript
                    and modern web technologies.

                </p>

                <div class="flex gap-4 mt-8">

                    <a href="#"
                        class="w-11 h-11 rounded-xl bg-slate-800 hover:bg-blue-600 duration-300 flex items-center justify-center">

                        🌐

                    </a>

                    <a href="#"
                        class="w-11 h-11 rounded-xl bg-slate-800 hover:bg-blue-600 duration-300 flex items-center justify-center">

                        💼

                    </a>

                    <a href="#"
                        class="w-11 h-11 rounded-xl bg-slate-800 hover:bg-blue-600 duration-300 flex items-center justify-center">

                        📧

                    </a>

                </div>

            </div>

            <!-- Quick Links -->
            <div>

                <h3 class="text-xl font-bold text-white mb-6">
                    Quick Links
                </h3>

                <ul class="space-y-4">

                    <li>
                        <a href="{{ url('/') }}" class="text-slate-400 hover:text-blue-400 duration-300">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/about') }}" class="text-slate-400 hover:text-blue-400 duration-300">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/skills') }}" class="text-slate-400 hover:text-blue-400 duration-300">
                            Skills
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/projects') }}" class="text-slate-400 hover:text-blue-400 duration-300">
                            Projects
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/contact') }}" class="text-slate-400 hover:text-blue-400 duration-300">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Services -->
            <div>

                <h3 class="text-xl font-bold text-white mb-6">
                    Services
                </h3>

                <ul class="space-y-4 text-slate-400">

                    <li>Laravel Development</li>

                    <li>PHP Development</li>

                    <li>REST API Development</li>

                    <li>Database Design</li>

                    <li>Responsive Websites</li>

                </ul>

            </div>

            <!-- Contact -->
            <div>

                <h3 class="text-xl font-bold text-white mb-6">
                    Contact Info
                </h3>

                <div class="space-y-5 text-slate-400">

                    <p>
                        📧 hassanshairgorya01@gmail.com
                    </p>

                    <p>
                        📱 +92 323 2151512
                    </p>

                    <p>
                        📍 Punjab, Pakistan
                    </p>

                    <p>
                        
                    </p>

                </div>

            </div>

        </div>

        <!-- Bottom -->

        <div class="mt-16 pt-8 border-t border-slate-800">

            <div class="flex flex-col lg:flex-row items-center justify-between gap-5">

                <p class="text-slate-500 text-center lg:text-left">

                    © {{ date('Y') }} Hassan Shair. All Rights Reserved.

                </p>

                <p class="text-slate-500 text-center">

                    Designed & Developed with ❤️ using Laravel & Tailwind CSS

                </p>

            </div>

        </div>

    </div>

</footer>