<x-layouts.app>
    <x-slot:title>
        Lists
    </x-slot>

    <x-slot:description>
        I list all the things I like this days (books, mangas, tv shozs, movies, etc.).
    </x-slot>

    <header>
        <div class="flex flex-col md:flex-row md:justify-center md:items-center max-w-7xl m-auto px-6 py-16 gap-6">
            <div class="md:w-1/2">
                <div class="">
                    <a href="{{ route('content.index') }}" class="mb-4 inline-flex items-center gap-2 text-sm text-zinc-700 hover:text-zinc-900">
                        <svg class="size-6" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                        </svg>
                        My content
                    </a>
                </div>
                <h1 class="text-3xl lg:text-4xl lg:leading-12 font-bold text-zinc-900">
                    My lists
                </h1>
                <p class="max-w-md text-zinc-600 lg:leading-8 mt-2 lg:mt-2">
                    I list all the things I like this days (books, mangas, movies, etc.).
                </p>
            </div>
            <div class="md:w-1/2">
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
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="flex flex-col md:flex-row max-w-7xl m-auto px-6 py-16 gap-6">
                <div class="md:w-1/2">
                    <h2 class="text-xl lg:text-2xl font-bold text-zinc-900">
                        My top 5 mangas
                    </h2>
                    <ul class="mt-6">
                        <li class="text-zinc-600 lg:leading-8">
                            One Piece
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Jujustu Kaisen
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Dragon Ball
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Death Note
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            The Breaker
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2">
                    <h2 class="lg:max-w-md text-xl lg:text-2xl font-bold text-zinc-900">
                        My top 5 books
                    </h2>
                    <ul class="lg:max-w-md mt-6">
                        <li class="text-zinc-600 lg:leading-8">
                            Harry Potter
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            The Lord of the Rings
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Foundation
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Dune
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Game of Thrones
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="flex flex-col md:flex-row max-w-7xl m-auto px-6 py-16 gap-6">
                <div class="md:w-1/2">
                    <h2 class="lg:max-w-md text-xl lg:text-2xl font-bold text-zinc-900">
                        The amazing TV shows I've watched the past two years
                    </h2>
                    <ul class="lg:max-w-md mt-6">
                        <li class="text-zinc-600 lg:leading-8">
                            <span class="font-bold text-zinc-900">Lost</span>: I watch it every year or so and it's still amazing.
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            <span class="font-bold text-zinc-900">Ted Lasso</span>: I'm not a fan of football but this show is so good for my mental health.
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            <span class="font-bold text-zinc-900">Succession</span>: Incredible writing and acting. But the worst family ever.
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            <span class="font-bold text-zinc-900">Bref 2</span>: Free therapy session. I love it.
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            <span class="font-bold text-zinc-900">Silo</span>: As good as the book.
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-xl lg:text-2xl font-bold text-zinc-900">
                        The podcasts I listen to
                    </h2>
                    <ul class="mt-6">
                        <li class="text-zinc-600 lg:leading-8">
                            <a href="https://mostlytechnical.com" class="underline hover:no-underline">
                                Mostly Technical
                            </a>
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            <a href="https://laravelpodcast.com" class="underline hover:no-underline">
                                The Laravel Podcast
                            </a>
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            <a href="https://podcast.laravel-news.com" class="underline hover:no-underline">
                                Laravel News Podcast
                            </a>
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            <a href="https://noplanstomerge.com" class="underline hover:no-underline">
                                No Plans To Merge
                            </a>
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            <a href="https://notesonwork.transistor.fm" class="underline hover:no-underline">
                                Notes on Work
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <div class="flex flex-col md:flex-row max-w-7xl m-auto px-6 py-16 gap-6">
                <div class="md:w-1/2">
                    <h2 class="text-xl lg:text-2xl font-bold text-zinc-900">
                        My friends and I are addicted to those games
                    </h2>
                    <ul class="mt-6">
                        <li class="text-zinc-600 lg:leading-8">
                            Skull King
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Omerta
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Skyjo
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Splito
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Saboteur
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-xl lg:text-2xl font-bold text-zinc-900">
                        My top 5 video games
                    </h2>
                    <ul class="mt-6">
                        <li class="text-zinc-600 lg:leading-8">
                            Skyrim
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Fallout 3
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Cyberpunk 2077
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Dishonored
                        </li>
                        <li class="text-zinc-600 lg:leading-8 mt-3">
                            Minecraft
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>
