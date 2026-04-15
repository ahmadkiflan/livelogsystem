<flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
    <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="WafiLive."
        class="max-lg:hidden dark:hidden" />
    <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="WafiLive."
        class="max-lg:hidden! hidden dark:flex" />
    <flux:navbar>
        <flux:navbar.item href="{{ route('home') }}" :current="request()->is('/')">Home</flux:navbar.item>
        <flux:dropdown>
            <flux:navbar.item icon:trailing="chevron-down">Blog</flux:navbar.item>
            <flux:menu>
                <flux:menu.submenu href="{{ route('posts') }}" :current="request()->is('posts')" heading="Categories">
                    <flux:menu.item href="{{ route('categories', 'artificial-intelligence') }}">Artificial Intelligence
                    </flux:menu.item>
                    <flux:menu.item href="{{ route('categories', 'data-science') }}">Data Science</flux:menu.item>
                    <flux:menu.item href="{{ route('categories', 'web-development') }}">Web Development
                    </flux:menu.item>
                </flux:menu.submenu>
            </flux:menu>
        </flux:dropdown>
        <flux:navbar.item href="{{ route('about') }}" :current="request()->is('about')">About</flux:navbar.item>
        <flux:navbar.item href="{{ route('contact') }}" :current="request()->is('contact')">Contact</flux:navbar.item>
    </flux:navbar>
    <flux:spacer />

    @if (Auth::check())
        <flux:dropdown position="top" align="start">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" />
            <flux:menu>
                <flux:menu.radio.group>
                    <flux:menu.radio>{{ Auth::user()->name }}</flux:menu.radio>
                </flux:menu.radio.group>
                <flux:menu.separator />
                <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    @else
        <flux:button.group>
            <flux:button href="{{ route('register') }}">Register</flux:button>
            <flux:button href="{{ route('login') }}">Login</flux:button>
        </flux:button.group>
    @endif
</flux:header>
