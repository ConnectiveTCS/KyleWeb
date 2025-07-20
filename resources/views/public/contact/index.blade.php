<x-public-layout>
    <section class="h-screen flex items-center justify-center px-16">
        <div class="flex flex-row max-h-[40rem] justify-between p-4 bg-gray-200 rounded-lg shadow-lg w-full mx-auto">
            <div class="flex flex-col items-center justify-center col-span-1 flex-1">
                <a href="/contact" class="text-4xl text-center leading-[0.5]">
                    <span class="font-bold jura-700 text-center">ScanQR</span><span class="jura-300">_Code</span><br>
                    <span class="text-xl text-center">toContinue_onPhone</span>
                </a>
                <img src="{{ asset('assets/qr_contact.svg') }}" alt="QR Code for Contact" class=" w-44 aspect-square ml-4">
            </div>

            <span class="border-l h-50 w-1 bg-black">
            </span>
            <div class="text-center col-span-1 flex-1">
                <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
                <p class="text-lg mb-8">We'd love to hear from you! Please fill out the form below to get in touch.</p>
                <form action="{{ route('contact.store') }}" method="POST" class="max-w-md mx-auto">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4 grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="tel" id="phone" name="phone"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-brand-blue text-white px-4 py-2 rounded-md hover:bg-brand-orange transition-colors duration-300">Send
                        Message</button>
                </form>
            </div>
        </div>

    </section>
</x-public-layout>
