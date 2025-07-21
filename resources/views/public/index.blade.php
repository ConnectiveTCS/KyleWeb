<x-public-layout>
    <section class="h-screen p-6 mt-28">
        <div class="bg-slate-100 h-full rounded-3xl backdrop:blur-xl bg shadow-inner shadow-black z-50 relative">
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
            <div
                class=" text-lg absolute bottom-6 left-1/2 transform -translate-x-1/2 text-center flex flex-col items-center text-gray-400 hover:text-brand-orange transi duration-1000 group">
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
    <div id="ratings"
        class="relative h-80 p-8 overflow-hidden items-center flex bg-white w-4/5 justify-self-center z-40 rounded-xl shadow-md group cursor-grab">
        {{-- overlay ontop of ratings div --}}
        <style>
            .gradient-overlay {
                position: absolute;
                inset: 0;
                z-index: 10;
                /* white - transparent - white gradient */
                background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0), rgba(255, 255, 255, 0), rgba(255, 255, 255, 1));
                /* make it cover the entire div */
                background-size: contain;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }
        </style>
        <div class="absolute inset-0 z-10 gradient-overlay">

        </div>
        <div id="ticker-track" class="flex gap-8 animate-ticker group-hover:pause select-none">
            @foreach ($ratings as $rating)
                <div class="flex gap-2 flex-1 min-w-96 h-full awe">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('storage/' . $rating->client_photo) }}" alt=""
                                class="w-14 h-14 aspect-square rounded-full shadow-lg object-scale-down">
                            <p>{{ $rating->client_name }} <span class="text-gray-500">|
                                    {{ $rating->business_name }}</span></p>
                        </div>
                        <p class="">
                            {{ $rating->comment }}
                        </p>
                        <div class="w-full py-2 px-32 rounded-full bg-gray-100 mt-2 items-center flex justify-between">
                            {{-- stars - generate correct number of stars based on integer rating --}}
                            @for ($i = 1; $i <= $rating->rating; $i++)
                                <span class="material-icons text-yellow-500 text-sm">star</span>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- duplicate for seamless animation --}}
            @foreach ($ratings as $rating)
                <div class="flex gap-2 flex-1 min-w-96 h-full">
                    <div class="w-full flex flex-col justify-between">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('storage/' . $rating->client_photo) }}" alt=""
                                class="w-14 h-14 aspect-square rounded-full shadow-lg object-scale-down">
                            <p>{{ $rating->client_name }} <span class="text-gray-500">|
                                    {{ $rating->business_name }}</span></p>
                        </div>
                        <p class="">
                            {{ $rating->comment }}
                        </p>
                        <div class="w-full py-2 px-32 rounded-full bg-gray-100 mt-2 items-center flex justify-between">
                            {{-- stars - generate correct number of stars based on integer rating --}}
                            @for ($i = 1; $i <= $rating->rating; $i++)
                                <span class="material-icons text-yellow-500 text-sm">star</span>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <section id="about" class=" px-16 grid grid-cols-7 mt-16 z-10">
        <div class="col-span-4 col-start-1 rounded-3xl p-8 h-fit text-white sticky top-32">
            <h2 class="text-4xl text-left font-sans mt-10  drop-shadow-[0_2px_4px_rgba(0,0,0,0.3)]">Welcome to Ace Web
                Design</h2>
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
                            onclick="document.getElementById('webDesignGrid').classList.remove('hidden'); document.getElementById('developmentGrid').classList.add('hidden'); document.getElementById('brandingGrid').classList.add('hidden'); document.getElementById('seoGrid').classList.add('hidden');">
                            WEBDESIGN
                        </button>
                    </li>
                    <li>
                        <button class="hover:text-brand-blue hover:font-bold transition-all duration-300"
                            onclick="document.getElementById('developmentGrid').classList.remove('hidden'); document.getElementById('webDesignGrid').classList.add('hidden'); document.getElementById('brandingGrid').classList.add('hidden'); document.getElementById('seoGrid').classList.add('hidden');">
                            DEVELOPMENT
                        </button>

                    </li>
                    <li>
                        <button class="hover:text-brand-blue hover:font-bold transition-all duration-300"
                            onclick="document.getElementById('brandingGrid').classList.remove('hidden'); document.getElementById('webDesignGrid').classList.add('hidden'); document.getElementById('developmentGrid').classList.add('hidden'); document.getElementById('seoGrid').classList.add('hidden');">
                            BRANDING
                        </button>

                    </li>
                    <li>
                        <button class="hover:text-brand-blue hover:font-bold transition-all duration-300"
                            onclick="document.getElementById('seoGrid').classList.remove('hidden'); document.getElementById('webDesignGrid').classList.add('hidden'); document.getElementById('developmentGrid').classList.add('hidden'); document.getElementById('brandingGrid').classList.add('hidden');">
                            SEO
                        </button>

                    </li>
                </ul>
            </div>
            <div id="webDesignGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 mt-8">
                @foreach ($projects as $project)
                    @if ($project->project_type === 'Web Design')
                        <a href="{{ route('public.projects.show', $project) }}">
                            <div
                                class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                                <img src="{{ asset('storage/' . $project->project_photos[1]) }}" alt="Portfolio Item 1"
                                    class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                                <div class="grid grid-cols-3 items-center gap-4">
                                    <div class="col-span-1 col-start-2">
                                        <h3 class="text-xl font-bold jura-500">{{ $project->client_name }}</h3>
                                        <p class="text-gray-600">{{ $project->description }}</p>
                                    </div>
                                    <span
                                        class="material-icons text-black col-span-1 col-start-3 place-self-end">open_in_new</span>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>
            <div id="developmentGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 mt-8 hidden">
                @foreach ($projects as $project)
                    @if ($project->project_type === 'Web App Development')
                        <div
                            class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                            <img src="{{ asset('assets/1.jpg') }}" alt="Portfolio Item 1"
                                class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                            <h3 class="text-xl font-bold jura-500">{{ $project->client_name }}</h3>
                            <p class="text-gray-600">{{ $project->description }}</p>

                        </div>
                    @endif
                @endforeach
            </div>
            <div id="brandingGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 mt-8 hidden">
                @foreach ($projects as $project)
                    @if ($project->project_type === 'Branding')
                        <div
                            class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                            <img src="{{ asset('assets/1.jpg') }}" alt="Portfolio Item 1"
                                class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                            <h3 class="text-xl font-bold jura-500">{{ $project->client_name }}</h3>
                            <p class="text-gray-600">{{ $project->description }}</p>

                        </div>
                    @endif
                @endforeach
            </div>
            <div id="seoGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1 mt-8 hidden">
                @foreach ($projects as $project)
                    @if ($project->project_type === 'SEO')
                        <div
                            class="bg-white p-4 hover:shadow-lg hover:rounded-xl transition-all duration-[1000ms] shadow-black hover:scale-105 hover:border">
                            <img src="{{ asset('assets/1.jpg') }}" alt="Portfolio Item 1"
                                class="w-full h-60 rounded-lg mb-4 object-cover object-top hover:object-bottom transition-all duration-[1500ms]">
                            <h3 class="text-xl font-bold jura-500">{{ $project->client_name }}</h3>
                            <p class="text-gray-600">{{ $project->description }}</p>

                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('ratings');
            const track = document.getElementById('ticker-track');
            let isDown = false;
            let startX;
            let scrollLeft;

            slider.addEventListener('mousedown', (e) => {
                isDown = true;
                slider.classList.add('cursor-grabbing');
                slider.classList.remove('cursor-grab');
                track.style.animationPlayState = 'paused';
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
            });

            slider.addEventListener('mouseleave', () => {
                if (!isDown) return;
                isDown = false;
                slider.classList.remove('cursor-grabbing');
                slider.classList.add('cursor-grab');
                track.style.animationPlayState = 'running';
            });

            slider.addEventListener('mouseup', () => {
                isDown = false;
                slider.classList.remove('cursor-grabbing');
                slider.classList.add('cursor-grab');
                track.style.animationPlayState = 'running';
            });

            slider.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - slider.offsetLeft;
                const walk = (x - startX) * 2; //scroll-fast
                slider.scrollLeft = scrollLeft - walk;
            });
        });
    </script>

    <style>
        @keyframes ticker {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-ticker {
            animation: ticker 60s linear infinite;
        }

        .group:hover .group-hover\:pause {
            animation-play-state: paused;
        }
    </style>
</x-public-layout>
