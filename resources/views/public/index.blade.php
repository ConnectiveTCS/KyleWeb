<x-public-layout>
    <section class="h-screen p-6 mt-28">
        <div class="bg-slate-100 h-full rounded-3xl backdrop:blur-xl bg shadow-inner shadow-black">
            <div class=" grid grid-cols-2 place-items-center h-full py-4 px-16">
                <div class="col-span-1 text-left">
                    <h1 class=" text-8xl text-left mb-2 leading-[0.8] uppercase text-balance font-sans cursor-default">
                        Web
                        <br>
                        <span class=" font-sans text-brand-orange font-black">
                            Design
                        </span>
                        and
                        <span class=" font-sans text-brand-orange font-black">
                            Development
                        </span>
                    </h1>
                    <p class="text-2xl jura-500">
                        We specialize in creating stunning, user-friendly websites that help your business stand out
                        online.
                    </p>
                    <p class="text-2xl jura-500 mt-4">
                        Explore our services and see how we can help you achieve your online goals.
                    </p>
                    <a href="/services"
                        class="mt-6 inline-block bg-brand-blue text-white px-6 py-3 rounded-full hover:bg-brand-orange transition-colors duration-300 jura-500">
                        View Services
                    </a>
                </div>
                <div class="col-span-1">
                    <img src="{{ asset('assets/AceLogo.png') }}" alt="Hero Image"
                        class="w-full h-auto max-w-md rounded-lg">
                </div>
            </div>
            <div class=" text-lg absolute -bottom-12 left-1/2 transform -translate-x-1/2 text-center flex flex-col items-center text-gray-400 hover:text-brand-orange transi duration-1000 group">
                <a href="/#portfolio" behavior="smooth">
                    Skip to Portfolio
                    </a>
                    <a href="/#portfolio">
                <span class="material-icons text-3xl -mt-2 group-hover:motion-reduce:animate-bounce duration-700">
                    keyboard_arrow_down
                </span>
                </a>
            </div>
        </div>
    </section>
    <section id="about" class=" px-16 grid grid-cols-7 mt-16">
        <div class="col-span-4 col-start-1 rounded-3xl p-8 h-fit text-white sticky top-32">
            <h2 class="text-4xl text-left font-sans mt-10  drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]">Welcome to Ace Web Design</h2>
            <p class="text-xl jura-500 mt-4 text-justify drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]">
                Founded in 2015 by a team of passionate digital craftsmen, Ace Web Design began with a simple vision: to
                transform how businesses connect with their audiences online. What started as a small studio in a
                converted garage has grown into a dynamic agency trusted by clients across industries. Our journey has
                been fueled by curiosity, creativity, and an unwavering commitment to excellence. We believe that every
                pixel matters and every line of code tells a story. When you work with us, you're not just getting a
                website—you're gaining a digital partner who understands that your online presence is the heartbeat of
                your brand in today's connected world.
            </p>
            <div class="flex justify-start mt-6">
                <a href="/about"
                    class="bg-brand-blue text-white px-6 py-3 rounded-full hover:bg-brand-orange transition-colors duration-300 jura-500">
                    Learn More About Us
                </a>
            </div>
        </div>
        <div class="col-start-5 col-span-3">
            <img src="{{ asset('assets/kyle1.jpg') }}" alt="About Us Image"
                class="w-full h-auto rounded-lg col-start-5 col-span-3 shadow-lg will-change-scroll">
        </div>
    </section>
    {{-- portfolio section --}}
    <section id="portfolio" class="px-16 flex flex-col mt-16">
        <h1 class="text-[10rem] text-white">PORTFOLIO</h1>
        <div class="w-full text-center mt-0">
            <div class="w-full bg-brand-orange">
                <ul class="flex flex-row justify-center items-center gap-x-8 text-2xl jura-500 text-white py-4">
                    <li>
                        <button class="hover:text-brand-blue hover:font-bold transition-all duration-300"
                        onmouseover="document.getElementById('webDesignGrid').classList.remove('hidden'); document.getElementById('developmentGrid').classList.add('hidden'); document.getElementById('brandingGrid').classList.add('hidden'); document.getElementById('seoGrid').classList.add('hidden');">
                            WEBDESIGN
                        </button>
                    </li>
                    <li>
                        <button class="hover:text-brand-blue hover:font-bold transition-all duration-300"
                        onmouseover="document.getElementById('developmentGrid').classList.remove('hidden'); document.getElementById('webDesignGrid').classList.add('hidden'); document.getElementById('brandingGrid').classList.add('hidden'); document.getElementById('seoGrid').classList.add('hidden');">
                            DEVELOPMENT
                        </button>

                    </li>
                    <li>
                        <button class="hover:text-brand-blue hover:font-bold transition-all duration-300"
                        onmouseover="document.getElementById('brandingGrid').classList.remove('hidden'); document.getElementById('webDesignGrid').classList.add('hidden'); document.getElementById('developmentGrid').classList.add('hidden'); document.getElementById('seoGrid').classList.add('hidden');">
                            BRANDING
                        </button>

                    </li>
                    <li>
                        <button class="hover:text-brand-blue hover:font-bold transition-all duration-300"
                        onmouseover="document.getElementById('seoGrid').classList.remove('hidden'); document.getElementById('webDesignGrid').classList.add('hidden'); document.getElementById('developmentGrid').classList.add('hidden'); document.getElementById('brandingGrid').classList.add('hidden');">
                            SEO
                        </button>

                    </li>
                </ul>
            </div>
            <div id="webDesignGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 mt-8">
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/1.jpg') }}" alt="Portfolio Item 1"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 1</h3>
                    <p class="text-gray-600">Brief description of the project.</p>

                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/4.jpg') }}" alt="Portfolio Item 2"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 2</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/2.jpg') }}" alt="Portfolio Item 3"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 3</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border-black">
                    <img src="{{ asset('assets/3.jpg') }}" alt="Portfolio Item 4"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 4</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
            </div>
            <div id="developmentGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 mt-8 hidden">
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/1.jpg') }}" alt="Portfolio Item 1"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 1</h3>
                    <p class="text-gray-600">Brief description of the project.</p>

                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/4.jpg') }}" alt="Portfolio Item 2"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 2</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/2.jpg') }}" alt="Portfolio Item 3"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 3</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border-black">
                    <img src="{{ asset('assets/3.jpg') }}" alt="Portfolio Item 4"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 4</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
            </div>
            <div id="brandingGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 mt-8 hidden">
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/1.jpg') }}" alt="Portfolio Item 1"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 1</h3>
                    <p class="text-gray-600">Brief description of the project.</p>

                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/4.jpg') }}" alt="Portfolio Item 2"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 2</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/2.jpg') }}" alt="Portfolio Item 3"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 3</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border-black">
                    <img src="{{ asset('assets/3.jpg') }}" alt="Portfolio Item 4"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 4</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
            </div>
            <div id="seoGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 mt-8 hidden">
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/1.jpg') }}" alt="Portfolio Item 1"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 1</h3>
                    <p class="text-gray-600">Brief description of the project.</p>

                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/4.jpg') }}" alt="Portfolio Item 2"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 2</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                    <img src="{{ asset('assets/2.jpg') }}" alt="Portfolio Item 3"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 3</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
                <div
                    class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border-black">
                    <img src="{{ asset('assets/3.jpg') }}" alt="Portfolio Item 4"
                        class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                    <h3 class="text-xl font-bold jura-500">Project Title 4</h3>
                    <p class="text-gray-600">Brief description of the project.</p>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
