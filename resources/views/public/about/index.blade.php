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
    <section>
    </section>
</x-public-layout>
