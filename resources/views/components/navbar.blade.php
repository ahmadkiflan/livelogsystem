<flux:navbar>
    <flux:navbar.item href="{{ route('home') }}" :current="request()->is('/')">Home</flux:navbar.item>
    <flux:dropdown>
        <flux:navbar.item icon:trailing="chevron-down">Blog</flux:navbar.item>
        <flux:menu>
            <flux:menu.submenu href="{{ route('posts') }}" :current="request()->is('posts')" heading="Categories">
                <flux:menu.item href="{{ route('categories', 'artificial-intelligence') }}">Artificial Intelligence
                </flux:menu.item>
                <flux:menu.item href="{{ route('categories', 'data-science') }}">Data Science</flux:menu.item>
                <flux:menu.item href="{{ route('categories', 'web-development') }}">Web Development</flux:menu.item>
            </flux:menu.submenu>
        </flux:menu>
    </flux:dropdown>
    <flux:navbar.item href="{{ route('about') }}" :current="request()->is('about')">About</flux:navbar.item>
    <flux:navbar.item href="{{ route('contact') }}" :current="request()->is('contact')">Contact</flux:navbar.item>
</flux:navbar>
