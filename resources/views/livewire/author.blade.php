<div {{-- <div>
    <div class="bg-white ">
        <div class="mx-auto max-w-7xl">
            <div class="flex">
                <flux:input wire:model.live="query" icon="magnifying-glass" autocomplete="off"
                    placeholder="Search post title..." class="max-w-sm mb-5" name="search" type="text" />
            </div>
            <flux:pagination :paginator="$posts" />
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16  border-gray-200 lg:mt-0 lg:pt-4 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article class="flex rounded p-4 max-w-xl flex-col items-start justify-between shadow-sm">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                            <a href="#"
                                class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                        </div>
                        <div class="group relative grow">
                            <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                <a href="{{ route('post', $post->slug) }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">{{ Str::limit($post->content, 200) }}
                            </p>
                        </div>
                        <div class="relative mt-8 flex items-center  justify-between  w-full">
                            <div class="text-sm flex items-center gap-x-2">
                                <flux:avatar size="sm" href="https://x.com/calebporzio"
                                    src="https://unavatar.io/x/calebporzio" />
                                <p class="font-semibold text-gray-900 ">
                                    <a href="{{ route('authors', $post->author) }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $post->author }}
                                    </a>
                                </p>
                            </div>
                            <flux:button href="{{ route('post', $post->slug) }}" icon:trailing="arrow-up-right">
                                Read more
                            </flux:button>
                        </div>
                    </article>
                @endforeach
            </div>
            <flux:pagination :paginator="$posts" />
        </div>
    </div>

</div> --}} </div
