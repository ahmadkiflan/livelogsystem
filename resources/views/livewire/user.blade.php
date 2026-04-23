<div class="bg-white ">
    <div class="mx-auto max-w-7xl">



        <div class="flex justify-between gap-4">

            <flux:button href="{{ route('posts') }}" icon="arrow-up-left">
                Back to all posts
            </flux:button>

            <flux:input wire:model.live="query" icon="magnifying-glass" autocomplete="off"
                placeholder="Search post title..." class="max-w-sm mb-5" name="search" type="text" />

            <flux:dropdown>
                <flux:button icon:trailing="chevron-down">All Categories</flux:button>
                <flux:menu>
                    <flux:menu.item href="{{ route('categories', 'web-development') }}">Web Development
                    </flux:menu.item>
                    <flux:menu.item href="{{ route('categories', 'data-science') }}">Data Science</flux:menu.item>
                    <flux:menu.item href="{{ route('categories', 'artificial-intelligence') }}">Artificial
                        Intelligence
                    </flux:menu.item>
                </flux:menu>
            </flux:dropdown>

        </div>

        @if ($posts->isNotEmpty())
            <flux:pagination :paginator="$posts" />
            <div
                class="mx-auto grid max-w-2xl md:grid-cols-2 grid-cols-1 gap-x-15 gap-y-16  border-gray-200 lg:mt-0 lg:pt-4 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article class="flex  max-w-xl gap-y-1 py-4 flex-col items-start justify-between border-b">
                        <figure class="relative max-w-full w-full transition-all duration-300 cursor-pointer">
                            <a href="{{ route('post', $post->slug) }}">
                                <img class="rounded-lg  hover:scale-105 transition-all"
                                    src="https://picsum.photos/1200/650?random={{ $post->id }}">

                            </a>
                            <figcaption class="absolute px-4 text-lg text-white bottom-6">
                                <h3
                                    class=" text-xl font-semibold text-white group-hover:text-gray-600 mix-blend-plus-darker">
                                    <a href="{{ route('post', $post->slug) }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $post->title }}
                                    </a>
                                </h3>
                            </figcaption>
                        </figure>
                        <div class="flex items-center mt-3 gap-x-4 text-xs justify-between w-full">
                            <flux:button variant="primary" color="{{ $post->category->color }}"
                                href="{{ route('categories', $post->category->slug) }}" size="xs">
                                {{ $post->category->name }}
                            </flux:button>

                        </div>
                        <div class="group relative grow">
                            <p class="mt-3 line-clamp-3 text-md text-gray-600">{{ Str::limit($post->content, 150) }}
                            </p>
                        </div>
                        <div class="relative mt-4 flex items-end  justify-between  w-full">
                            <div class="text-sm flex items-center gap-x-2">
                                <flux:avatar circle href="https://x.com/calebporzio"
                                    src="{{ $post->author->avatar ? asset('storage/' . $post->author->avatar) : asset('storage/avatars/default.jpg') }}" />
                                <div>
                                    <p class="font-semibold text-gray-900 ">
                                        <a href="{{ route('authors', $post->author->username) }}">
                                            <span class="absolute inset-0"></span>
                                            {{ $post->author->name }}
                                        </a>
                                    </p>
                                    <time class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                                </div>
                            </div>
                            <flux:button variant="primary" color="zinc" size="xs"
                                href="{{ route('post', $post->slug) }}" icon:trailing="arrow-up-right">
                                Read more
                            </flux:button>
                        </div>
                    </article>
                @endforeach
            </div>
            <flux:pagination :paginator="$posts" />
        @else
            <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
                <div class="text-center">
                    <p class="text-base font-semibold text-indigo-600">404</p>
                    <h1 class="mt-4 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Page
                        not found</h1>
                    <p class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Sorry, we couldn’t find
                        the page you’re looking for.</p>
                </div>
            </main>
        @endif
    </div>
</div>
