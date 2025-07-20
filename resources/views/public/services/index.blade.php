<x-public-layout>
    <section class="h-screen p-6 mt-28">
        <div id="bgChange"
            class=" opacity-80 bg-slate-100 h-full rounded-3xl backdrop:blur-xl bg shadow-inner shadow-black transition-all duration-[1500ms]">
            <div class="flex justify-center place-items-center h-full py-4 px-16">
                <div class="col-span-4 text-left">
                    <h1 class=" text-8xl text-left mb-2 leading-[0.8] uppercase text-balance font-sans cursor-default">
                        Services
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="h-screen p-6">
        <div class="flex justify-start place-items-start py-4 px-16">
            <div class="col-span-4 text-left text-white text-balance">
                <h2 class="text-4xl text-left mb-2 leading-[0.8] uppercase text-balance font-sans cursor-default">
                    Our Services
                </h2>
                <p class="text-lg mt-4 max-w-2xl">
                    We offer a range of services to help you achieve your goals. From web development to digital
                    marketing, our team is here to support you every step of the way.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-6 px-16 mt-8">
            <div class="col-span-4 md:col-span-2 lg:col-span-1 text-center place-items-center w-fit group">
                <div
                    class="mb-4 h-52 bg-brand-orange place-content-center rounded-md shadow-inner shadow-black aspect-square group-hover:shadow-md transition-shadow duration-[1500ms]">
                    <img src="{{ asset('assets/logos/stylus.svg') }}" alt="" class="w-24 h-24 mx-auto">
                </div>
                <h3 class="text-2xl text-white font-bold">Web Design</h3>
                <p class="text-lg mt-2 text-gray-300">
                    Crafting beautiful and functional websites tailored to your needs.
                </p>
            </div>
            <div class="col-span-4 md:col-span-2 lg:col-span-1 text-center place-items-center w-fit group">
                <div
                    class="mb-4 h-52 bg-brand-orange place-content-center rounded-md shadow-inner shadow-black aspect-square group-hover:shadow-md transition-shadow duration-[1500ms]">
                    <img src="{{ asset('assets/logos/seo.svg') }}" alt="" class="w-24 h-24 mx-auto">
                </div>
                <h3 class="text-2xl text-white font-bold">SEO Services</h3>
                <p class="text-lg mt-2 text-gray-300">Optimizing your website for better search engine visibility.</p>
            </div>
            <div class="col-span-4 md:col-span-2 lg:col-span-1 text-center place-items-center w-fit group">
                <div
                    class="mb-4 h-52 bg-brand-orange place-content-center rounded-md shadow-inner shadow-black aspect-square group-hover:shadow-md transition-shadow duration-[1500ms]">
                    <img src="{{ asset('assets/logos/app.svg') }}" alt="" class="w-24 h-24 mx-auto">
                </div>
                <h3 class="text-2xl text-white font-bold">Web App Development</h3>
                <p class="text-lg mt-2 text-gray-300">
                    Building robust web applications to enhance your business operations.
                </p>
            </div>
            <div class="col-span-4 md:col-span-2 lg:col-span-1 text-center place-items-center w-fit group">
                <div
                    class="mb-4 h-52 bg-brand-orange place-content-center rounded-md shadow-inner shadow-black aspect-square group-hover:shadow-md transition-shadow duration-[1500ms]">
                    <img src="{{ asset('assets/logos/consulting.svg') }}" alt="" class="w-24 h-24 mx-auto">
                </div>
                <h3 class="text-2xl text-white font-bold">Consulting</h3>
                <p class="text-lg mt-2 text-gray-300">Providing expert advice to help you make informed decisions.</p>
            </div>

        </div>
    </section>
    {{-- Process --}}
    <section class="h-screen py-6 px-16 bg-gray-900">
        <div class="flex justify-start place-items-start py-4 px-16">
            <div class="col-span-4 text-left text-white text-balance">
                <h2 class="text-4xl text-left mb-2 leading-[0.8] uppercase text-balance font-sans cursor-default">
                    Our Process
                </h2>
                <p class="text-lg mt-4 max-w-2xl">
                    Our process is designed to ensure that we deliver the best results for our clients. We follow a
                    structured approach that includes understanding your needs, planning, execution, and continuous
                    improvement.
                </p>
            </div>
        </div>

        <ol class="items-center sm:flex mt-8">
            <li class="relative mb-6 sm:mb-0 ">
                <div class="flex items-center">
                    <div
                        class="z-10 flex items-center justify-center w-32 h-32 bg-brand-blue hover:bg-brand-orange transition-all duration-700 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 p-1">
                        <img src="{{ asset('assets/logos/talking.svg') }}" alt="" class="w-12 h-12">
                    </div>
                    <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
                <div class="mt-3 sm:pe-8">
                    <h3 class="text-lg font-semibold text-gray-100 dark:text-white">Discovery Call</h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        We start with a discovery call to understand your needs and goals. This helps us tailor our
                        services to meet your specific requirements.
                    </p>
                </div>
            </li>
            <li class="relative mb-6 sm:mb-0">
                <div class="flex items-center">
                    <div
                        class="z-10 flex items-center justify-center w-32 h-32 bg-brand-blue hover:bg-brand-orange transition-all duration-700 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <img src="{{ asset('assets/logos/planning.svg') }}" alt="" class="w-12 h-12">
                    </div>
                    <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
                <div class="mt-3 sm:pe-8">
                    <h3 class="text-lg font-semibold text-white dark:text-white">
                        Planning and Strategy
                    </h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        After understanding your needs, we create a detailed plan and strategy to achieve your goals.
                        This includes timelines, resources, and key milestones.
                    </p>
                </div>
            </li>
            <li class="relative mb-6 sm:mb-0">
                <div class="flex items-center">
                    <div
                        class="z-10 flex items-center justify-center w-32 h-32 bg-brand-blue hover:bg-brand-orange transition-all duration-700 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <img src="{{ asset('assets/logos/development.svg') }}" alt="" class="w-12 h-12">
                    </div>
                    <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
                <div class="mt-3 sm:pe-8">
                    <h3 class="text-lg font-semibold text-white dark:text-white">
                        Development and Execution
                    </h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        Our team executes the plan with precision, ensuring that all tasks are completed on time and to
                        the highest standards. We keep you updated throughout the process.
                    </p>
                </div>
            </li>
            <li class="relative mb-6 sm:mb-0">
                <div class="flex items-center">
                    <div
                        class="z-10 flex items-center justify-center w-32 h-32 bg-brand-blue hover:bg-brand-orange transition-all duration-700 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <img src="{{ asset('assets/logos/feedback.svg') }}" alt="" class="w-12 h-12">
                    </div>
                    <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                </div>
                <div class="mt-3 sm:pe-8">
                    <h3 class="text-lg font-semibold text-white dark:text-white">
                        Testing and Feedback
                    </h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400"> 
                        We conduct thorough testing to ensure everything works as expected. Your feedback is crucial at
                        this stage, and we make necessary adjustments based on your input.
                    </p>
                </div>
            </li>
            <li class="relative -mb-4">
                <div class="flex items-center">
                    <div
                        class="z-10 flex items-center justify-center w-32 h-32 bg-brand-blue hover:bg-brand-orange transition-all duration-700 rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                        <img src="{{ asset('assets/logos/deployment.svg') }}" alt="" class="w-12 h-12">
                    </div>
                </div>
                <div class="mt-3 sm:pe-8">
                    <h3 class="text-lg font-semibold text-white dark:text-white">
                        Deployment and Support
                    </h3>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">
                        Once everything is finalized, we deploy the solution and provide ongoing support to ensure its
                        success. We are here to help you with any issues or questions that may arise.
                    </p>
                </div>
            </li>
        </ol>
    </section>
</x-public-layout>
