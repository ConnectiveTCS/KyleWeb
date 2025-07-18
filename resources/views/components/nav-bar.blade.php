<nav class="flex flex-row items-center justify-between px-16 pt-10 sticky top-0">
    <div class="flex flex-row justify-start gap-x-3 items-center">
        <a href="/">
            <img src="{{ asset('assets/AceLogo.png') }}" alt="Ace Web Design Logo" class="w-16">
        </a>
        <a href="/" class="text-2xl">
            <span class="font-bold jura-700">AceWeb</span><span class="jura-300">_Design</span>
        </a>
    </div>
    <div>
        <button
            class="flex flex-row items-center gap-x-2 bg-[#f4f4f4] text-black px-4 py-2 rounded-full hover:bg-brand-blue transition-colors duration-300 shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
            onclick="document.getElementById('navMenu').classList.toggle('-right-96'); document.getElementById('navMenu').classList.toggle('right-0')">
            <p class="jura-500 text-black">Menu</p>
            <div class="w-4 h-4 bg-brand-orange rounded-full"></div>

        </button>
        <div id="navMenu"
            class="absolute -right-96 mt-4 mr-16 pr-6 pl-16 py-2 rounded-md bg-white overflow-hidden h-fit transition-all duration-300 ease-in-out ">
            <div class="flex flex-col items-end justify-end h-full">
                <a href="/"
                    class="text-black text-xl mb-4 hover:text-brand-orange hover:mr-3 transition-all duration-300">Home</a>
                <a href="/about"
                    class="text-black text-xl mb-4 hover:text-brand-orange hover:mr-3 transition-all duration-300">About</a>
                <a href="/services"
                    class="text-black text-xl mb-4 hover:text-brand-orange hover:mr-3 transition-all duration-300">Services</a>
                <a href="/contact"
                    class="text-black text-xl hover:text-brand-orange hover:mr-3 transition-all duration-300">Contact</a>
            </div>
            {{-- <button class="absolute top-4 right-4 text-white text-2xl" onclick="document.getElementById('navMenu').classList.add('hidden')">
        &times;
    </button> --}}

        </div>
    </div>
</nav>
