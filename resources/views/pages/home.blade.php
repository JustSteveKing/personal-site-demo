<x-layout>
    <section>
        <div class="relative pt-14">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678">
                    <path fill="url(#9b2541ea-d39d-499b-bd42-aeea3e93f5ff)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                    <defs>
                        <linearGradient id="9b2541ea-d39d-499b-bd42-aeea3e93f5ff" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9089FC" />
                            <stop offset="1" stop-color="#FF80B5" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                            Hey, I'm Steve
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600">
                            {{ $message }}
                        </p>
                    </div>
                    <div class="mt-16 flow-root sm:mt-24">
                        <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                            <img src="https://tailwindui.com/img/component-images/project-app-screenshot.png" alt="App screenshot" width="2432" height="1442" class="rounded-md shadow-2xl ring-1 ring-gray-900/10">
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678">
                    <path fill="url(#b9e4a85f-ccd5-4151-8e84-ab55c66e5aa1)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                    <defs>
                        <linearGradient id="b9e4a85f-ccd5-4151-8e84-ab55c66e5aa1" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#9089FC" />
                            <stop offset="1" stop-color="#FF80B5" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>


        <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/line-clamp'),
    ],
  }
  ```
-->
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        From the blog
                    </h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">
                        Learn how to grow your business with our expert advice.
                    </p>
                </div>
                <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                    @forelse($posts as $post)
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                                <a href="{{ route('blog:show',$post->id) }}" class="relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100">
                                    {{ $post->published ? 'Published' : 'Not Published' }}
                                </a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="{{ route('blog:show',$post->id) }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">
                                    {{ $post->content }}
                                </p>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                                <div class="text-sm leading-6">
                                    <p class="font-semibold text-gray-900">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Michael Foster
                                        </a>
                                    </p>
                                    <p class="text-gray-600">Co-Founder / CTO</p>
                                </div>
                            </div>
                        </article>
                    @empty
                        <div>
                            <h2 class="text-base font-semibold leading-6 text-gray-900">Projects</h2>
                            <p class="mt-1 text-sm text-gray-500">You haven’t created a project yet. Get started by selecting a template or start from an empty project.</p>
                            <ul role="list" class="mt-6 grid grid-cols-1 gap-6 border-t border-b border-gray-200 py-6 sm:grid-cols-2">
                                <li class="flow-root">
                                    <div class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                        <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-pink-500">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                <a href="#" class="focus:outline-none">
                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                    <span>Create a List</span>
                                                    <span aria-hidden="true"> &rarr;</span>
                                                </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Another to-do system you’ll try but eventually give up on.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="flow-root">
                                    <div class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                        <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-yellow-500">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                <a href="#" class="focus:outline-none">
                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                    <span>Create a Calendar</span>
                                                    <span aria-hidden="true"> &rarr;</span>
                                                </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Stay on top of your deadlines, or don’t — it’s up to you.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="flow-root">
                                    <div class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                        <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-green-500">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                <a href="#" class="focus:outline-none">
                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                    <span>Create a Gallery</span>
                                                    <span aria-hidden="true"> &rarr;</span>
                                                </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Great for mood boards and inspiration.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="flow-root">
                                    <div class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                        <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-blue-500">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                <a href="#" class="focus:outline-none">
                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                    <span>Create a Board</span>
                                                    <span aria-hidden="true"> &rarr;</span>
                                                </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Track tasks in different stages of your project.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="flow-root">
                                    <div class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                        <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-indigo-500">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                <a href="#" class="focus:outline-none">
                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                    <span>Create a Spreadsheet</span>
                                                    <span aria-hidden="true"> &rarr;</span>
                                                </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Lots of numbers and things — good for nerds.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="flow-root">
                                    <div class="relative -m-2 flex items-center space-x-4 rounded-xl p-2 focus-within:ring-2 focus-within:ring-indigo-500 hover:bg-gray-50">
                                        <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-lg bg-purple-500">
                                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-sm font-medium text-gray-900">
                                                <a href="#" class="focus:outline-none">
                                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                                    <span>Create a Timeline</span>
                                                    <span aria-hidden="true"> &rarr;</span>
                                                </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Get a birds-eye-view of your procrastination.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-4 flex">
                                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                    Or start from an empty project
                                    <span aria-hidden="true"> &rarr;</span>
                                </a>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

    </section>
</x-layout>
