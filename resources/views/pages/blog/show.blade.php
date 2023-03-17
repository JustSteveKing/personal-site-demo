<x-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                <p class="text-base font-semibold leading-7 text-indigo-600">Blog Post</p>
                <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    {{ $post->title }}
                </h1>
                <div class="mt-10 grid max-w-xl grid-cols-1 gap-8 text-base leading-7 text-gray-700 lg:max-w-none lg:grid-cols-2">
                    {{ $post->content }}
                </div>
                <div class="mt-10 flex">
                    <a href="#" class="rounded-md bg-indigo-600 py-2.5 px-3.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden pt-16 lg:pt-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <img class="mb-[-12%] rounded-xl shadow-2xl ring-1 ring-gray-900/10" src="https://tailwindui.com/img/component-images/project-app-screenshot.png" alt="">
                <div class="relative" aria-hidden="true">
                    <div class="absolute -inset-x-20 bottom-0 bg-gradient-to-t from-white pt-[7%]"></div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
