<x-public-layout>
    <section class="grid grid-cols-2 items-center justify-center min-h-screen">
        <div class="pl-16">
            <h1 class="text-black text-8xl text-left mb-10 jura-700 backdrop:drop-shadow-md">
                Welcome to Ace Web Design
            </h1>
            <button
                class=" justify-end w-3/4 flex flex-row items-center gap-x-2 bg-[#f4f4f4] text-black px-4 py-2 rounded-full hover:bg-brand-blue transition-colors duration-300 shadow-[0_4px_4px_rgba(0,0,0,0.25)]">
                <p class="jura-500 text-black">Contact Us</p>
                <div class="w-4 h-4 bg-brand-orange rounded-full"></div>

            </button>
        </div>
        <div class="mx-auto rounded-l-full w-full h-80 mb-10 bg-black overflow-hidden">
            {{-- <img src="{{ asset('assets/Kyle.png') }}" alt="Kyle's photo" class="object-cover h-full w-[200rem]">
            <img src="{{ asset('assets/Kyle.png') }}" alt="Kyle's photo" class="object-cover h-full w-[200rem]"> --}}
        </div>
    </section>
    <section class="grid grid-flow-col items-center justify-center gap-16 px-16 py-10">
        <div class="border-r-2 border-black pr-10">
            <h4>USER-CENTERED DESIGN</h4>
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </P>
        </div>
        <div class="border-r-2 border-black pr-10">
            <h4>USER-CENTERED DESIGN</h4>
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </P>
        </div>
        <div class="border-r-2 border-black pr-10">
            <h4>USER-CENTERED DESIGN</h4>
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </P>
        </div>
        <div>
            <h4>USER-CENTERED DESIGN</h4>
            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </P>
        </div>

    </section>
    <section id="overlappingGallery" class="flex flex-row px-16 gap-1 mt-48 mb-1">
        <div class="flex-[3] h-48 bg-gray-400 overflow-hidden"
            onmouseover="document.getElementById('project1').classList.remove('translate-x-[2000px]'); document.getElementById('project1Content').innerHTML = 'Furni';"
            onmouseout="document.getElementById('project1').classList.add('translate-x-[2000px]');"
            onclick="document.getElementById('lightboxOpen').classList.remove('hidden'); document.getElementById('lightboxImage').src = '{{ asset('assets/1.jpg') }}';">
            <img src="{{ asset('assets/1.jpg') }}" alt=""
                class="object-cover h-full w-full object-top hover:scale-110 hover:object-bottom transition-all duration-[2000ms]">
        </div>
        <div class=" flex-[2] h-48 bg-gray-400 overflow-hidden"
            onmouseover="document.getElementById('project1').classList.remove('translate-x-[2000px]'); document.getElementById('project1Content').innerHTML = 'C Mpatto';"
            onmouseout="document.getElementById('project1').classList.add('translate-x-[2000px]');">
            <img src="{{ asset('assets/2.jpg') }}" alt=""
                class="object-cover h-full w-full object-top hover:scale-110 hover:object-bottom transition-all duration-[2000ms]">
        </div>
        <div class=" flex-[1] h-48 bg-gray-400 overflow-hidden"
            onmouseover="document.getElementById('project1').classList.remove('translate-x-[2000px]'); document.getElementById('project1Content').innerHTML = 'Furni';"
            onmouseout="document.getElementById('project1').classList.add('translate-x-[2000px]');">
            <img src="{{ asset('assets/3.jpg') }}" alt=""
                class="object-cover h-full w-full object-top hover:scale-110 hover:object-bottom transition-all duration-[2000ms]">
        </div>
        <div class="flex-[2] h-48 bg-gray-400 overflow-hidden"
            onmouseover="document.getElementById('project1').classList.remove('translate-x-[2000px]'); document.getElementById('project1Content').innerHTML = 'Furni';"
            onmouseout="document.getElementById('project1').classList.add('translate-x-[2000px]');">
            <img src="{{ asset('assets/4.jpg') }}" alt=""
                class="object-cover h-full w-full object-top hover:scale-110 hover:object-bottom transition-all duration-[2000ms]">
        </div>
    </section>
    <section id="overlappingGallery" class="flex flex-row px-16 gap-1 mb-48">
        <div class="flex-[1] h-48 bg-gray-400 overflow-hidden"
            onmouseover="document.getElementById('project1').classList.remove('translate-x-[2000px]'); document.getElementById('project1Content').innerHTML = 'Furni';"
            onmouseout="document.getElementById('project1').classList.add('translate-x-[2000px]');">
            <img src="{{ asset('assets/1.jpg') }}" alt=""
                class="object-cover h-full w-full object-top hover:scale-110 hover:object-bottom transition-all duration-[2000ms]">
        </div>
        <div class=" flex-[3] h-48 bg-gray-400 overflow-hidden"
            onmouseover="document.getElementById('project1').classList.remove('translate-x-[2000px]'); document.getElementById('project1Content').innerHTML = 'Furni';"
            onmouseout="document.getElementById('project1').classList.add('translate-x-[2000px]');">
            <img src="{{ asset('assets/2.jpg') }}" alt=""
                class="object-cover h-full w-full object-top hover:scale-110 hover:object-bottom transition-all duration-[2000ms]">
        </div>
        <div class=" flex-[3] h-48 bg-gray-400 overflow-hidden"
            onmouseover="document.getElementById('project1').classList.remove('translate-x-[2000px]'); document.getElementById('project1Content').innerHTML = 'Furni';"
            onmouseout="document.getElementById('project1').classList.add('translate-x-[2000px]');">
            <img src="{{ asset('assets/3.jpg') }}" alt=""
                class="object-cover h-full w-full object-top hover:scale-110 hover:object-bottom transition-all duration-[2000ms]">
        </div>
        <div class="flex-[2] h-48 bg-gray-400 overflow-hidden"
            onmouseover="document.getElementById('project1').classList.remove('translate-x-[2000px]'); document.getElementById('project1Content').innerHTML = 'Furni';"
            onmouseout="document.getElementById('project1').classList.add('translate-x-[2000px]');">
            <img src="{{ asset('assets/4.jpg') }}" alt=""
                class="object-cover h-full w-full object-top hover:scale-110 hover:object-bottom transition-all duration-[2000ms]">
        </div>
    </section>
    <div id="project1"
        class="bottom-8 rounded-full min-full fixed right-0 left-0 flex gap-x-2 items-center justify-center bg-white shadow-lg w-fit p-1 m-auto bg-opacity-40 backdrop-blur-md  translate-x-[2000px] transition-all duration-300 ease-in-out">
        <div class="bg-white rounded-full items-center gap-x-2 bg-opacity-30 p-2 flex">
            <p id="project1Content">Furni</p>
            <div class="w-4 h-4 bg-brand-orange rounded-full"></div>
        </div>
    </div>
    {{-- lightbox overlay --}}
    <div id="lightboxOpen" class="hidden">
        <div id="overlay" class="fixed top-0 left-0 w-full h-full bg-white opacity-20 -z-10"></div>
        <button class="fixed top-[45px] right-[200px] text-black text-2xl bg-white px-4 py-2 rounded-full text-sm shadow-lg hover:bg-brand-blue transition-colors duration-300"
            onclick="document.getElementById('lightboxOpen').classList.add('hidden');
            document.getElementById('overlay').classList.add('hidden');
            document.getElementById('lightbox').classList.add('hidden');">
            Exit
        </button>
        <div id="lightbox" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-20">
            <div class="flex items-center justify-center h-full w-full">
                <img id="lightboxImage" src="" alt="Lightbox Image" class="max-w-full max-h-full object-cover">
            </div>
        </div>
    </div>
</x-public-layout>
