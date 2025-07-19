<x-public-layout>
    <section class="h-screen p-6 mt-28">
        <div id="bgChange"
            class=" opacity-80 bg-slate-100 h-full rounded-3xl backdrop:blur-xl bg shadow-inner shadow-black transition-all duration-[1500ms]">
            <div class="flex justify-center place-items-center h-full py-4 px-16">
                <div class="col-span-4 text-left">
                    <h1 class=" text-8xl text-left mb-2 leading-[0.8] uppercase text-balance font-sans cursor-default">
                        About<span
                            class=" font-sans text-brand-orange font-black peer transition-colors duration-[1500ms]"
                            onmouseover="document.getElementById('bgChange').classList.remove('bg-slate-100'); document.getElementById('bgChange').classList.add('bg-brand-orange',); this.classList.remove('text-brand-orange'); this.classList.add('text-white');"
                            onmouseout="document.getElementById('bgChange').classList.remove('bg-brand-orange'); document.getElementById('bgChange').classList.add('bg-slate-100'); this.classList.add('text-brand-orange'); this.classList.remove('text-white');">_us
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class=" p-16 mt-8 bg-d">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="col-span-1 justify-items-center pt-8">
                <img src="{{ asset('assets/about.jpg') }}" alt="About Us Image"
                    class=" group w-4/5 object-cover object-center hover:object-top transition-all duration-1000 z-50 aspect-video will-change-scroll"
                    onmouseover="document.getElementById('bgThingy').classList.remove('rotate-12'); document.getElementById('bgThingy').classList.add('rotate-0');"
                    onmouseout="document.getElementById('bgThingy').classList.remove('rotate-0'); document.getElementById('bgThingy').classList.add('rotate-12');">
                <div id="bgThingy"
                    class="h-16 bg-brand-orange w-full group-hover:h-32 transition-all duration-300 -z-10 relative bottom-2 -top-[10rem] rotate-12">
                </div>
            </div>
            <div class="col-span-1">
                <p class="text-lg text-white leading-relaxed text-justify">
                    Ace Web Design started as a dream and became a reality in 2023. Founded by me (Kyle), a passionate
                    web developer with a love for creating stunning and functional websites. With a background in
                    computer science and a keen eye for design, I set out to help businesses and individuals establish
                    their online presence through innovative web solutions.<br><br>

                    I work with a variety of other talented individuals, outsourcing various tasks to what each one
                    specialise in
                    to ensure that every project is executed with the highest quality and attention to detail. My goal
                    is
                    to provide clients with a seamless experience, from the initial consultation to the final launch of
                    their website. I believe in the power of collaboration and strive to build long-lasting
                    relationships
                    with my clients, understanding their unique needs and delivering tailored solutions that exceed
                    their
                    expectations.
                </p>
            </div>
        </div>
    </section>
    <section class="px-16 mb-16 grid grid-cols-2 grid-rows-2 gap-4 ">
        <div class="cols-span-1 row-start-1">
            <h3 class="text-3xl font-sans text-brand-blue transition-all duration-700"
            onmouseover="this.textContent = 'theMission'; this.classList.add('text-brand-orange'); this.classList.add('font-bold');"
            onmouseout="this.textContent = 'The_Mission'; this.classList.remove('text-brand-orange'); this.classList.remove('font-bold');">The_Mission</h3>
            <p class="text-lg text-white leading-relaxed text-justify">
                At Ace Web Design, my mission is to empower businesses and individuals by providing them with
                high-quality,
                user-friendly, and visually appealing websites that drive results. I am committed to staying at the
                forefront
                of web design trends and technologies, ensuring that my clients receive cutting-edge solutions that set
                them
                apart in the digital landscape.
            </p>
        </div>
        <div class="cols-span-1 col-start-2 row-start-2">
            <h3 class="text-3xl font-sans text-brand-blue"
            onmouseover="this.textContent = 'theVision'; this.classList.add('text-brand-orange'); this.classList.add('font-bold');"
            onmouseout="this.textContent = 'The_Vision'; this.classList.remove('text-brand-orange'); this.classList.remove('font-bold');">
            The_Vision
        </h3>
            <p class="text-lg text-white leading-relaxed text-justify">
                My vision is to be a leading web design agency known for its creativity, innovation, and exceptional
                customer
                service. I aim to create a positive impact in the digital world by helping businesses thrive online and
                fostering a community of satisfied clients who trust Ace Web Design for their web development needs.
            </p>
        </div>
    </section>
</x-public-layout>
