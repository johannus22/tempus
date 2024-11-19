<div>
        <div class="grid max-w-screen-xl p-2 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center p-2 lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    About the <span class="text-blue-600">Developer</span></h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Created by John Rafael Masilungan with his developer alias "Johannus" The aim of this project
                    is to help the parishioners to view the church schedule online.
                    <br><br>
                    <i>Tempus</i>, a latin word which means time
                </p>

                    {{-- button --}}
                    <a href="https://johannus22.vercel.app" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-400 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                          </svg>
                        <span>Portfolio</span>
                    </a>

            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex p-8">
                <img src="{{ asset('storage/logos/rafael.jpg')}}"
                class="rounded-3xl shadow-md" alt="mockup">
            </div>
        </div>
</div>
