<x-layouts.app>
    <x-slot:title>
        My content
    </x-slot>

    <x-slot:description>
        I try to publish things from time to time. It's mostly related to web development but not always.
    </x-slot>

    <header>
        <div class="flex flex-col md:flex-row md:justify-center md:items-center max-w-7xl m-auto px-6 pt-16 gap-6">
            <div class="md:w-1/2">
                <div class="">
                    <a href="{{ route('home') }}" class="mb-4 inline-flex items-center gap-2 text-sm text-zinc-700 hover:text-zinc-900">
                        <svg class="size-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                        </svg>
                        Homepage
                    </a>
                </div>
                <h1 class="text-3xl lg:text-4xl lg:leading-12 font-bold text-zinc-900">
                    My content
                </h1>
                <p class="max-w-md text-zinc-600 lg:leading-8 mt-2 lg:mt-2">
                    I try to publish content from time to time. It's mostly related to web development, but not always. It also helps me improve my writing in English.
                </p>
            </div>
            <div class="flex flex-col-reverse md:flex-col md:items-end md:pr-12 md:w-1/2 gap-6">
                <div class="flex md:justify-end gap-8">
                    <a href="https://bsky.app/profile/axeldotdev.bsky.social" class="text-zinc-600 hover:text-zinc-900">
                        <svg role="img" fill="currentColor" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="size-6">
                            <title>Bluesky</title>
                            <path d="M111.8 62.2C170.2 105.9 233 194.7 256 242.4c23-47.6 85.8-136.4 144.2-180.2c42.1-31.6 110.3-56 110.3 21.8c0 15.5-8.9 130.5-14.1 149.2C478.2 298 412 314.6 353.1 304.5c102.9 17.5 129.1 75.5 72.5 133.5c-107.4 110.2-154.3-27.6-166.3-62.9l0 0c-1.7-4.9-2.6-7.8-3.3-7.8s-1.6 3-3.3 7.8l0 0c-12 35.3-59 173.1-166.3 62.9c-56.5-58-30.4-116 72.5-133.5C100 314.6 33.8 298 15.7 233.1C10.4 214.4 1.5 99.4 1.5 83.9c0-77.8 68.2-53.4 110.3-21.8z"/>
                        </svg>
                    </a>

                    <a href="mailto:axelcharpentier0@icloud.com" class="text-zinc-600 hover:text-zinc-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <title>Email</title>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 1 0-2.636 6.364M16.5 12V8.25"/>
                        </svg>
                    </a>

                    <a href="https://github.com/axeldotdev" class="text-zinc-600 hover:text-zinc-900">
                        <svg role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="size-6">
                            <title>GitHub</title>
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/in/axeldotdev/" class="text-zinc-600 hover:text-zinc-900">
                        <svg role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="size-6">
                            <title>LinkedIn</title>
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                        </svg>
                    </a>

                    <a href="https://twitter.com/axeldotdev" class="text-zinc-600 hover:text-zinc-900">
                        <svg role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="size-6">
                            <title>Twitter</title>
                            <path d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z"></path>
                        </svg>
                    </a>

                    <a href="https://youtube.com/@axeldotdev" class="text-zinc-600 hover:text-zinc-900">
                        <svg role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="size-6">
                            <title>YouTube</title>
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path>
                        </svg>
                    </a>
                </div>
                <div class="flex">
                    <a href="{{ route('lists') }}" class="px-8 py-3 font-medium text-zinc-50 rounded-sm bg-zinc-900 hover:bg-zinc-800">
                        My lists
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main id="ship-0-0-1-release" class="pb-16">
        <article>
            <div class="flex flex-col md:flex-row md:justify-center md:items-center max-w-7xl m-auto px-6 pt-24 pb-6 gap-6">
                <div class="md:w-1/2">
                    <span class="flex mb-4 leading-none text-sm text-zinc-500">
                        Published&nbsp;on&nbsp;<time datetime="2025-02-25">February 24, 2025</time>
                    </span>
                    <h2 class="text-4xl lg:text-6xl lg:leading-20 font-bold text-zinc-900">
                        Ship 0.0.1 release
                    </h2>
                </div>
                <div class="flex flex-col-reverse md:flex-col md:items-end md:pr-12 md:w-1/2 gap-6">
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-6">
                <p class="max-w-3xl text-zinc-600 lg:leading-8">
                    Right after the Laracon EU 2025 and Taylor Otwell's talk, I decided to write a package to ease and fasten the development of Laravel applications. He said "we must ship" so I called this package "ship".
                </p>
                <img src="{{ asset('images/ship.png') }}" alt="We must ship" class="max-w-4xl w-full h-64 object-cover rounded-sm mt-3 lg:mt-6">
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    This package is fairly simple, it's basically an install command with some options that triggers install actions.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    It helps you configure things like immutable dates, vite prefetching, password rules, content security policy, session cookie renaming and more.
                    It also allows you to quickly install and configure usefull packages like Larastan, Rector and some others.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    To use it, you just have to install it and run the command (you can even remove the package after that).
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    The <strong>0.0.1 release</strong> brings you backend stuff (configuration, routes and other sutff) but I plan to add frontend resources in the next releases now that the new starter kits are out.
                </p>
                <div class="mt-6 lg:mt-10">
                    <a href="https://github.com/axeldotdev/ship" class="px-8 py-3 font-medium text-zinc-600 hover:text-zinc-900 bg-zinc-100">
                        See on Github
                    </a>
                </div>
            </div>
        </article>

        <article id="my-point-of-view-on-development">
            <div class="flex flex-col md:flex-row md:justify-center md:items-center max-w-7xl m-auto px-6 pt-24 pb-6 gap-6">
                <div class="md:w-1/2">
                    <span class="flex mb-4 leading-none text-sm text-zinc-500">
                        Published&nbsp;on&nbsp;<time datetime="2023-02-14">February 14, 2023</time>
                    </span>
                    <h2 class="text-4xl lg:text-6xl lg:leading-20 font-bold text-zinc-900">
                        My point of view on development
                    </h2>
                </div>
                <div class="flex flex-col-reverse md:flex-col md:items-end md:pr-12 md:w-1/2 gap-6">
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-6">
                <p class="max-w-3xl text-zinc-600 lg:leading-8">
                    The hardest part of backend development is the thinking, but the implementation is quite simple with tools like Laravel when you know how to use it well. In comparison, frontend development is much more complicated and especially longer in my opinion.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    Frontend developers must adapt the website to different screen sizes, zooms, colors, but also take into account the accessibility of people with disabilities. Tools like VueJS, AlpineJS and TailwindCSS help but the amount of work is still quite huge.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    We see this clearly when we build a web application. Developing the API, the DB is not necessarily very complex largely thanks to Laravel. But on the other hand create the different pages of the UI, the search, the modals, etc. requires a lot of thinking but also code.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    I have developed several applications in my current job and I can clearly see that the frontend developer who accompanies me is more busy than me. Anyway, that's my point of view.
                </p>
            </div>
        </article>

        <article id="i-love-my-desk">
            <div class="flex flex-col md:flex-row md:justify-center md:items-center max-w-7xl m-auto px-6 pt-24 pb-6 gap-6">
                <div class="md:w-1/2">
                    <span class="flex mb-4 leading-none text-sm text-zinc-500">
                        Published&nbsp;on&nbsp;<time datetime="2025-01-30">January 30, 2025</time>
                    </span>
                    <h2 class="text-4xl lg:text-6xl lg:leading-20 font-bold text-zinc-900">
                        I love my desk
                    </h2>
                </div>
                <div class="flex flex-col-reverse md:flex-col md:items-end md:pr-12 md:w-1/2 gap-6">
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-6">
                <img src="{{ asset('images/i-love-my-desk.webp') }}" alt="I love my desk" class="max-w-4xl w-full object-cover rounded-sm">
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    After the first lockdown for Covid, I started building my working desk at home and I love it. It has all the thing that I need and it is very small, simple and organize.
                </p>
            </div>
        </article>

        <article id="frozen-discovery-of-nantes">
            <div class="flex flex-col md:flex-row md:justify-center md:items-center max-w-7xl m-auto px-6 pt-24 pb-6 gap-6">
                <div class="md:w-1/2">
                    <span class="flex mb-4 leading-none text-sm text-zinc-500">
                        Published&nbsp;on&nbsp;<time datetime="2025-01-28">January 28, 2025</time>
                    </span>
                    <h2 class="text-4xl lg:text-6xl lg:leading-20 font-bold text-zinc-900">
                        Frozen discovery of Nantes
                    </h2>
                </div>
                <div class="flex flex-col-reverse md:flex-col md:items-end md:pr-12 md:w-1/2 gap-6">
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-6">
                <img src="{{ asset('images/frozen-discovery-of-nantes.jpeg') }}" alt="Frozen discovery of Nantes" class="max-w-4xl w-full object-cover rounded-sm">
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    I have visited Nantes with some friends the last weekend, but god it was freezing outside and on Sunday, no pub was open!
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    It's a beautiful city, I liked it right when we arrived at the train station, it was modern, clean, quite different from Paris.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    We walked something between 18 or 20 km in two days it was fun except for the cold wind! I have never been so cold in my life. 🥶
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    Obviously when I got back home, I was sick…
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    But I have good memories of this little trip with my friends and another city to my list of potential destination when I'll leave Paris.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    Nantes is a city driven by art. We saw murals, sculptures, shapes and of course <a href="https://www.lesmachines-nantes.fr/le-projet/le-projet-artistique/" class="font-medium text-zinc-900 underline hover:no-underline">the animatronics</a>.
                </p>
                <div class="grid grid-cols-3 gap-2 max-w-4xl mt-3 lg:mt-6">
                    <img src="{{ asset('images/image-1.webp') }}" alt="Frozen discovery of Nantes" class="object-cover rounded-sm">
                    <img src="{{ asset('images/image-2.webp') }}" alt="Frozen discovery of Nantes" class="object-cover rounded-sm">
                    <img src="{{ asset('images/image-3.webp') }}" alt="Frozen discovery of Nantes" class="object-cover rounded-sm">
                </div>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    The Saturday afternoon we visited a little garden in the middle of the city that I fell in love with. It is inspired by the Japanese zen garden, I want one in my future house.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    The sound of water, the wind in those little tree, it was so relaxing.
                </p>
                <div class="grid grid-cols-3 gap-2 max-w-4xl mt-3 lg:mt-6">
                    <img src="{{ asset('images/image-4.webp') }}" alt="Frozen discovery of Nantes" class="object-cover rounded-sm">
                    <img src="{{ asset('images/image-5.webp') }}" alt="Frozen discovery of Nantes" class="object-cover rounded-sm">
                    <img src="{{ asset('images/image-6.webp') }}" alt="Frozen discovery of Nantes" class="object-cover rounded-sm">
                </div>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    Saturday we had dinner in a very good and very nice little restaurant which has the particularity of hiring disabled people as waiters.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    The two girls who served us throughout the evening have Down syndrome and the whole restaurant is adapted to them, I found that incredible. My uncle having Down syndrome is something that touches me and makes me happy to see.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    The menu was on little paper cards. We had 2 paper cards for the starter, 2 paper cards for the main course and 3 paper cards for the dessert. When our choice was made, we had to stamp plastic cards to say who took a particular course, starter or dessert.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    If you visit Nantes, I recommend the restaurant <a href="https://www.restaurantlereflet.fr/" class="font-medium text-zinc-900 underline hover:no-underline">Le Reflet</a>!
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    Sunday morning, we had brunch in a very cool little restaurant: <a href="https://www.instagram.com/billies.nantes/" class="font-medium text-zinc-900 underline hover:no-underline">Billie's</a>. The decor was very English, there were pictures and little statues of the Queen everywhere. I have never eaten so well as this morning…
                </p>
                <figure class="relative">
                    <img src="{{ asset('images/image-7.jpeg') }}" alt="Frozen discovery of Nantes" class="max-w-4xl w-full object-cover rounded-sm mt-3 lg:mt-6">
                    <figcaption class="absolute bottom-2 left-2 text-sm font-medium text-zinc-50">
                        Photo by <a href="https://www.instagram.com/paul.robein/" target="_blank" class="underline hover:no-underline">Paul Robein</a> (<a href="https://www.instagram.com/paul.robein/" target="_blank" class="underline hover:no-underline">paul.robein</a>)
                    </figcaption>
                </figure>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    I am on the left with an English breakfasts, some toasts, an orange juice, a hot chocolate and some cheese. I could have eaten there all day…
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    And thank god we had this brunch because Sunday morning it was freezing outside (-4°). We visited another part of the city in the afternoon but we ended up taking refuge in a bar because we were too cold. The problem is that on Sundays, there are not many people outside in Nantes and many pubs only serve food and not drink for some reason.
                </p>
                <p class="max-w-3xl text-zinc-600 lg:leading-8 mt-3 lg:mt-6">
                    After looking for a while we managed to find one that was almost empty but very quiet and friendly where we could drink tea and play cards while waiting for our train which left at 6 p.m.
                </p>
            </div>
        </article>
    </main>
</x-layouts.app>
