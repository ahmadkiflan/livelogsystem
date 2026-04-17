<main class="pt-8 pb-16 lg:pt-0 lg:pb-0 bg-white dark:bg-gray-900 antialiased ">
    <div class="flex  px-4 mx-auto ">
        <article class=" mx-auto max-w-full format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <a href="{{ route('dashboard') }}"
                class="text-white bg-slate-800 hover:bg-slate-700 box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded mb-15 text-xs px-3 py-1.5 focus:outline-none inline-block no-underline">Back
                to all posts</a>
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                        <div>
                            <a href="#" rel="author"
                                class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->category->name }}</p>
                            <p class="text-base text-gray-500 dark:text-gray-400">
                                {{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </address>
                <h1
                    class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {{ $post->title }}</h1>
            </header>
            <p class="lead">{{ $post->content }}</p>
        </article>
    </div>
</main>
