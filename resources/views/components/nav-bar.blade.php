<nav class="flex flex-row items-center justify-between px-16 pt-10 fixed top-0 left-0 w-full z-[100]">
    <div class="flex flex-row justify-start gap-x-3 items-center">
        <a href="/">
            <img src="{{ asset('assets/AceLogo.png') }}" alt="Ace Web Design Logo" class="w-16">
        </a>
        <a href="/" class="text-2xl filter invert bg-white text-black hover:bg-brand-black hover:text-white transition-colors duration-1000 group">
            <span><</span><span class="font-bold jura-700 group-hover:font-normal transition-all duration-700">AceWeb</span><span class="jura-300 group-hover:text-brand-orange transition-all duration-700 group-hover:font-bold">_Design</span><span>/></span>
        </a>
    </div>
    <div>
        <button id="menuButton"
            class=" overflow-hidden flex flex-row items-center gap-x-2 bg-[#f4f4f4] text-black px-4 py-2 rounded-full hover:bg-brand-blue transition-colors duration-300 shadow-[0_4px_4px_rgba(0,0,0,0.25)]"
            onclick="document.getElementById('navMenu').classList.toggle('-right-96'); document.getElementById('navMenu').classList.toggle('right-0'); document.getElementById('navDot').classList.toggle('translate-y-96'); document.getElementById('navDot').classList.toggle('translate-x-0'); document.getElementById('navMenu').classList.toggle('bg-white'); document.getElementById('navMenu').classList.toggle('bg-brand-orange');">
            <p class="jura-500 text-black">Menu</p>
            <div id="navDot" class="w-4 h-4 bg-brand-orange rounded-full translate-y-0 transition-all duration-300 delay-150"></div>

        </button>
        <div id="navMenu"
            class="absolute -right-96 mt-4 mr-16 pr-6 pl-16 py-2 rounded-md delay-300 bg-white overflow-hidden h-fit transition-all duration-300 ease-in-out shadow-md ">
            <div class="flex flex-col items-end justify-end h-full">
                <a href="/"
                    class="text-white text-xl mb-4 hover:text-gray-300 hover:mr-3 transition-all duration-300 w-full text-right">Home</a>
                <a href="/about"
                    class="text-white text-xl mb-4 hover:text-gray-300 hover:mr-3 transition-all duration-300">About</a>
                <a href="/services"
                    class="text-white text-xl mb-4 hover:text-gray-300 hover:mr-3 transition-all duration-300">Services</a>
                <a href="/contact"
                    class="text-white text-xl hover:text-gray-300 hover:mr-3 transition-all duration-300">Contact</a>
            </div>
            {{-- <button class="absolute top-4 right-4 text-white text-2xl" onclick="document.getElementById('navMenu').classList.add('hidden')">
        &times;
    </button> --}}

        </div>
    </div>
</nav>
<script>
// mouse click away event to hide the menu
document.addEventListener('click', function(event) {
    const menuButton = document.getElementById('menuButton');
    const navMenu = document.getElementById('navMenu');
    if (!menuButton.contains(event.target) && !navMenu.contains(event.target)) {
        navMenu.classList.add('-right-96');
        navMenu.classList.remove('right-0');
    }
});
// close the menu when the escape key is pressed
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const navMenu = document.getElementById('navMenu');
        navMenu.classList.add('-right-96');
        navMenu.classList.remove('right-0');
    }
});
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
