<footer id="footer" class=" bg-white text-black mt-8 px-16 pt-4 ">
    <div class=" flex justify-start bg-brand-blue py-2 px-4 rounded-md mb-4">
        <div class="flex flex-row justify-start gap-x-3 items-center flex-none">
            <a href="/">
                <img src="{{ asset('assets/AceLogo.png') }}" alt="Ace Web Design Logo" class="w-16">
            </a>
        <a href="/" class="text-2xl filter invert bg-white text-black hover:bg-brand-black hover:text-white transition-colors duration-1000 group">
            <span><</span><span class="font-bold jura-700 group-hover:font-normal transition-all duration-700">AceWeb</span><span class="jura-300 group-hover:text-brand-orange transition-all duration-700 group-hover:font-bold">_Design</span><span>/></span>
        </a>
        </div>
        <div class="flex-1 items-center justify-center content-center">
            <ul class="flex flex-row gap-x-6 text-lg flex-1 justify-end">
                <li>
                    <a href="/" class="text-black hover:text-brand-orange transition-all duration-300 {{ request()->is('/') ? 'font-bold text-brand-orange' : '' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/about" class="text-black hover:text-brand-orange transition-all duration-300 {{ request()->is('about') ? 'font-bold text-brand-orange' : '' }}">About</a>
                </li>
                <li>
                    <a href="/services"
                        class="text-black hover:text-brand-orange transition-all duration-300 {{ request()->is('services') ? 'font-bold text-brand-orange' : '' }}">Services</a>
                </li>
                <li>
                    <a href="/contact"
                        class="text-black hover:text-brand-orange transition-all duration-300 {{ request()->is('contact') ? 'font-bold text-brand-orange' : '' }}">Contact</a>
                </li>
                <li>
                    <a href="/privacy-policy"
                        class="text-black hover:text-brand-orange transition-all duration-300">Privacy Policy</a>
                </li>
                <li>
                    <a href="/terms-of-service"
                        class="text-black hover:text-brand-orange transition-all duration-300">Terms of Service</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-2">
        <div class="bg-gray-100 mt-4 p-4 rounded-md">
            <div class="flex flex-col">
                <p class="font-bold text-lg mb-2">Contact Us:</p>
                <p class="font-semibold">
                    Email:
                </p>
                <a href="mailto:sales@acewebdesign.co.za"
                    class="text-black hover:text-brand-orange transition-all duration-300 mb-1">
                    Sales@AceWebDesign.co.za
                </a>
                <p class="font-semibold">
                    Phone:
                </p>
                <a href="tel:+27712345678" class="text-black hover:text-brand-orange transition-all duration-300">
                    +27 71 234 5678
                </a>
                </p>
                <p class="font-semibold">
                Socials:
            </p>
            <div class="flex flex-row gap-x-4 mt-2">
                <a href="https://www.facebook.com/acewebdesign" target="_blank" rel="noopener noreferrer"
                    class="text-black hover:text-brand-orange transition-all duration-300">
                    <i class="fa fa-facebook-official fa-lg"></i>
                </a>
                <a href="https://www.instagram.com/acewebdesign" target="_blank" rel="noopener noreferrer"
                    class="text-black hover:text-brand-orange transition-all duration-300">
                    <i class="fa fa-instagram fa-lg"></i>
                </a>
                <a href="https://www.twitter.com/acewebdesign" target="_blank" rel="noopener noreferrer"
                    class="text-black hover:text-brand-orange transition-all duration-300">
                    <i class="fa fa-twitter fa-lg"></i>
                </a>
                <a href="https://www.linkedin.com/company/acewebdesign" target="_blank" rel="noopener noreferrer"
                    class="text-black hover:text-brand-orange transition-all duration-300">
                    <i class="fa fa-linkedin fa-lg"></i>
                </a>
                <a href="https://www.behance.net/acewebdesign" target="_blank" rel="noopener noreferrer" aria-haspopup=""
                    class="text-black hover:text-brand-orange transition-all duration-300">
                    <i class="fa fa-behance fa-lg"></i>
                </a>
        </div>
            </div>
        </div>
        <div class="mt-4 p-4 rounded-md grid grid-cols-6 gap-2">
            <p class="font-bold text-lg mb-2 col-span-6">
                Tools and Technologies Used:
            </p>
            <img src="{{ asset('assets/logos/laravel-brands.svg') }}" alt="Laravel Logo"
                class=" h-10 col-span-1 hover:bg-brand-blue p-1 rounded-md transition-all duration-700" title="Laravel">
            <img src="{{ asset('assets/logos/android-brands.svg') }}" alt="Laravel Logo"
                class=" h-10 col-span-1 hover:bg-brand-blue p-1 rounded-md transition-all duration-700" title="Android">
            <img src="{{ asset('assets/logos/behance-brands.svg') }}" alt="Laravel Logo"
                class=" h-10 col-span-1 hover:bg-brand-blue p-1 rounded-md transition-all duration-700" title="Behance">
            <img src="{{ asset('assets/logos/figma-brands.svg') }}" alt="Laravel Logo"
                class=" h-10 col-span-1 hover:bg-brand-blue p-1 rounded-md transition-all duration-700" title="Figma">
            <img src="{{ asset('assets/logos/wordpress-brands.svg') }}" alt="Laravel Logo"
                class=" h-10 col-span-1 hover:bg-brand-blue p-1 rounded-md transition-all duration-700"
                title="WordPress">
            <img src="{{ asset('assets/logos/github-brands.svg') }}" alt="Laravel Logo"
                class=" h-10 col-span-1 hover:bg-brand-blue p-1 rounded-md transition-all duration-700" title="GitHub">
            <img src="{{ asset('assets/logos/google-brands.svg') }}" alt="Laravel Logo"
                class=" h-10 col-span-1 hover:bg-brand-blue p-1 rounded-md transition-all duration-700" title="Google">
            <img src="{{ asset('assets/logos/trello-brands.svg') }}" alt="Laravel Logo"
                class=" h-10 col-span-1 hover:bg-brand-blue p-1 rounded-md transition-all duration-700" title="Trello">

        </div>

    </div>
    <div class="w-full text-center mt-4 text-black p-4 rounded-md">
        <p class="text-sm">
            &copy; {{ date('Y') }} Ace Web Design. All rights reserved.
        </p>
        <p class="text-sm">
            Built with <span class="text-red-500">Laravel 12</span>
        </p>
    </div>
</footer>
