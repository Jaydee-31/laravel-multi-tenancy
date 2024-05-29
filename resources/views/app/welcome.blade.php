<x-tenant-guest-layout>
    <!-- component -->
        <header>
            <nav class="bg-white border-gray-200 px-4 lg:px-6px-2 sm:px-4 py-2.5 dark:bg-gray-800 fixed w-full z-20 top-0 left-0">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                    <a href="#" class="flex items-center">
                        <img src="assets/image/logo-br.png" class="h-6 mr-3 sm:h-9" alt="BlogRealm Logo">
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">BlogRealm</span>
                    </a>
                    <div class="flex items-center lg:order-2">
                        @if (Route::has('login'))
                            <div class="inline-flex items-center p-2 ml-1 rounded-lg">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-sky-500 dark:text-white hover:text-sky-900 dark:hover:text-sky-400">Log in</a>

                                @if (Route::has('register'))
                                    <x-button-link href="{{ route('register') }}" class="ml-4 font-semibold capitalize">
                                        {{ __('Register') }}
                                    </x-button-link>
                                @endif
                                @endauth
                            </div>
                        @endif
                            {{-- @auth
                                <a href="{{ url('/homepage') }}" class="font-semibold text-sky-500 dark:text-white hover:text-sky-900 dark:hover:text-sky-400 mr-2">{{auth()->user()->name}}</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-sky-500 dark:text-white hover:text-sky-900 dark:hover:text-sky-400">Log in</a>

                                @if (Route::has('register'))
                                    <x-button-link href="{{ route('register') }}" class="ml-4 font-semibold capitalize">
                                        {{ __('Register') }}
                                    </x-button-link>
                                @endif
                            @endauth --}}
                        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="#home" class="nav-link active">Home</a>
                            </li>

                            <li>
                                <a href="#features" class="nav-link">Features</a>
                            </li>
                            
                            <li>
                                <a href="#about-us" class="nav-link">About</a>
                            </li>
                            <li>
                                <a href="#team" class="nav-link">Team</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        {{-- Home --}}

        <section id="home"class="snap-start bg-pattern py-20">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 ">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-4 text-5xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">Uniting Voices, Empowering Ideas</h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Welcome to BlogRealm, a multi-user blogging website where your words reign supreme. Our platform provides a space for writers from all walks of life to share their ideas, stories, and opinions with the world.</p>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-3 py-2 mr-3 text-base font-medium text-center text-white rounded-lg bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:ring-sky-300 dark:focus:ring-sky-900">
                        Get started
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="\assets\image\hero.png" alt="mockup">
                </div>                
            </div>
        </section>

        {{-- Features Section --}}

        <section id="features" class="snap-start bg-gray-50 dark:bg-gray-800 py-20">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Designed for creative mind like yours</h2>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Here BlogRealm, we offer a range of features designed to make it easy for writers to share their ideas and connect with others. Here are some of the features that make our platform unique:</p>
                </div>
                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                    <div>
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-sky-100 lg:h-12 lg:w-12 dark:bg-sky-900">
                            <svg class="w-5 h-5 text-sky-600 lg:w-6 lg:h-6 dark:text-sky-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">User-Friendly Interface</h3>
                        <p class="text-gray-500 dark:text-gray-400">Our platform offers a user-friendly interface that makes it easy to create and publish blog posts. You don't need any coding experience to get started - simply sign up, and start writing.</p>
                    </div>
                    <div>
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-sky-100 lg:h-12 lg:w-12 dark:bg-sky-900">
                            <svg class="w-5 h-5 text-sky-600 lg:w-6 lg:h-6 dark:text-sky-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">Mobile Responsiveness</h3>
                        <p class="text-gray-500 dark:text-gray-400">Our platform is designed to be mobile-responsive, so readers can easily access and read your blog on their smartphones and tablets.

                        </p>
                    </div>
                    <div>
                            <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-sky-100 lg:h-12 lg:w-12 dark:bg-sky-900">
                                <svg class="w-5 h-5 text-sky-600 lg:w-6 lg:h-6 dark:text-sky-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <h3 class="mb-2 text-xl font-bold dark:text-white">Moderation Tools</h3>
                            <p class="text-gray-500 dark:text-gray-400">As a blog owner, you have access to moderation tools, allowing you to manage comments, block spam, and control who can contribute to your blog.</p>
                        </div>
                </div>
            </div>
        </section>

    
        {{-- About Us --}}

        <section id="about-us" class="snap-start bg-gray-50 dark:bg-gray-800">
            <div class="gap-16 items-center py-8 px-4 mx-auto lg:h-screen max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Your Words Reign Supreme</h2>
                    <p class="mb-4 text-justify">At BlogRealm, we believe that everyone has a unique perspective to share, and we strive to empower voices that are often marginalized or underrepresented. We offer a user-friendly interface that makes it easy to create and publish blog posts, as well as interact with other writers through comments and social media sharing.
                        <br><br>
                        Whether you're a seasoned writer or just starting out, BlogRealm welcomes you to join its community of like-minded individuals who are passionate about the written word. Our mission is to connect people through storytelling and inspire change.
                    </p>
                    
                </div>
                <div class="grid grid-cols-2 overflow-hidden gap-4 items-center mt-8 mb-8">
                    <img class="w-full rounded-lg motion-safe:hover:scale-[1.03] transition-all duration-400" src="assets\image\team\docu-1.jpg" alt="office content 1">
                    <img class="w-full rounded-lg motion-safe:hover:scale-[1.03] hover:rounded-none transition-all duration-400" src="\assets\image\team\docu-2.jpg" alt="office content 2">
                </div>
            </div>
        </section>

        {{-- Team Section --}}

        <section id="team" class="snap-start bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl md:py-16 md:px-6 ">
                <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Our Team</h2>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Meet the BlogRealm team! We're a group of passionate individuals who believe in the power of storytelling to connect people and inspire change.</p>
                </div> 

                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 md:grid-cols-1 gap-8">  
                        <div class="w-full max-w-md mx-auto overflow-hidden md:max-w-2xl dark:bg-gray-800 dark:border-gray-700 scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-xl shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.03] transition-all duration-400">
                            <div class="md:flex">
                                <div class="md:shrink-0 w-62 max:h-32">
                                    <img class="h-full w-full object-cover md:h-full md:w-48" src="\assets\image\team\gamo.png" alt="Gamo">
                                </div>
                        
                                <div class="p-8">
                                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        <a href="#">John Dexter Gamo</a>
                                    </h3>
                                    <span class="text-gray-500 dark:text-gray-400">CEO | Full Stack Developer</span>
                                    <p class="mt-3 mb-4 font-light text-sm text-gray-500 dark:text-gray-400">John Dexter is the CEO and Full Stack Developer of BlogRealm. With a passion for writing and years of experience in web development, John founded BlogRealm to provide a platform for writers to share their voices. As the CEO, he leads the platform's strategy and oversees technical development. As a full stack developer, he ensures that BlogRealm is user-friendly, secure, and optimized for performance.</p>
                                    <ul class="flex space-x-4 sm:mt-0">
                                        <li>
                                            <a href="https://www.facebook.com/gamo.johndexter/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>   
                        </div>

                        <div class="w-full max-w-md mx-auto overflow-hidden md:max-w-2xl dark:bg-gray-800 dark:border-gray-700 scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-xl shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.03] transition-all duration-400">
                            <div class="md:flex">
                                <div class="md:shrink-0 w-62 max:h-32">
                                    <img class="h-full w-full object-cover md:h-full md:w-48" src="\assets\image\team\lesmoras.png" alt="Lesmoras">
                                </div>
                        
                                <div class="p-8">
                                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        <a href="#">Kent Ian Jim Lesmoras</a>
                                    </h3>
                                    <span class="text-gray-500 dark:text-gray-400">CTO</span>
                                    <p class="mt-3 mb-4 font-light text-sm text-gray-500 dark:text-gray-400">As the CTO of BlogRealm, Kent is responsible for managing the platform's technical architecture, ensuring that it is reliable, scalable, and secure. He leads the development team in implementing new features, and optimizing performance. With his expertise and leadership, Kent is committed to delivering a cutting-edge blogging platform that meets the needs of writers and readers alike.
                                    </p>
                                    <ul class="flex space-x-4 sm:mt-0">
                                        <li>
                                            <a href="https://www.facebook.com/gamo.johndexter/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>   
                        </div>

                        <div class="w-full max-w-md mx-auto overflow-hidden md:max-w-2xl dark:bg-gray-800 dark:border-gray-700 scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-xl shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.03] transition-all duration-400">
                            <div class="md:flex">
                                <div class="md:shrink-0 w-62 max:h-32">
                                    <img class="h-full w-full object-cover md:h-full md:w-48" src="\assets\image\team\keth.png" alt="Keth">
                                </div>
                        
                                <div class="p-8">
                                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        <a href="#">Keth Lacaden-Alforque</a>
                                    </h3>
                                    <span class="text-gray-500 dark:text-gray-400">Marketing Expert</span>
                                    <p class="mt-3 mb-4 font-light text-sm text-gray-500 dark:text-gray-400">As the Marketing Expert of BlogRealm, Keth is responsible for creating and implementing marketing campaigns that will drive traffic to the platform and increase engagement among readers and writers. He works closely with the team to identify opportunities for growth, build brand awareness, and establish partnerships with relevant organizations. With her expertise and innovative approach, Keth is committed to making BlogRealm the go-to platform for writers and readers around the world.</p>
                                    <ul class="flex space-x-4 sm:mt-0">
                                        <li>
                                            <a href="https://www.facebook.com/gamo.johndexter/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>   
                        </div>
                    </div>  
                </div>
            </div>
        </section>



        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Powering <span class="font-extrabold text-sky-400">200,000+</span> writers to share their voices</h2>
                    <p class="mb-4 font-light text-justify">BlogRealm was founded by John Dexter Gamo with the mission of providing a platform for writers to share their voices with the world. Our team is made up of individuals who are passionate about storytelling and empowering others to share their perspectives.

                        We believe that everyone has a story to tell, and we strive to create a space where diverse voices can be heard. Our platform offers a user-friendly interface that makes it easy to create and publish blog posts, as well as interact with other writers through comments and social media sharing.
                        
                        At BlogRealm, we value creativity, diversity, and collaboration. We believe that by connecting people through storytelling, we can inspire change and create a better world.
                        
                        Join us today and become part of a community that is committed to amplifying voices and expanding horizons.</p>
                    <a href="#" class="inline-flex items-center font-medium text-sky-600 hover:text-sky-800 dark:text-sky-500 dark:hover:text-sky-700">
                        Learn more
                        <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center">
                    <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">Join us today</h2>
                    <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Sign up for BlogRealm for free. Without extra charges.</p>
                    <a href="{{ route('register') }}" class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-sky-600 dark:hover:bg-sky-700 focus:outline-none dark:focus:ring-sky-800">Sign for BlogRealm </a>
                </div>
            </div>
        </section>

    <x-footer/>
    
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

</x-tenant-guest-layout>