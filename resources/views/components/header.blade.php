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
        <flux:dropdown position="bottom" align="end">
            <flux:profile circle name="{{ Auth::user()->name }}" avatar="https://unavatar.io/x/calebporzio" />
            <flux:navmenu>
                <flux:navmenu.item href="{{ route('dashboard') }}" icon="building-storefront">Dashboard
                </flux:navmenu.item>
            </flux:navmenu>
        </flux:dropdown>
    @else
        <flux:button.group>
            <flux:button size="sm" href="{{ route('register') }}">Register</flux:button>
            <flux:button size="sm" href="{{ route('login') }}">Login</flux:button>
        </flux:button.group>
    @endif
</flux:header>
<flux:sidebar sticky collapsible="mobile"
    class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.header>
        <flux:sidebar.brand href="#" logo="https://fluxui.dev/img/demo/logo.png"
            logo:dark="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." />
        <flux:sidebar.collapse
            class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2" />
    </flux:sidebar.header>
    <flux:sidebar.nav>
        <flux:sidebar.item icon="home" href="#" current>Home</flux:sidebar.item>
        <flux:sidebar.item icon="inbox" badge="12" href="#">Inbox</flux:sidebar.item>
        <flux:sidebar.item icon="document-text" href="#">Documents</flux:sidebar.item>
        <flux:sidebar.item icon="calendar" href="#">Calendar</flux:sidebar.item>
        <flux:sidebar.group expandable heading="Favorites" class="grid">
            <flux:sidebar.item href="#">Marketing site</flux:sidebar.item>
            <flux:sidebar.item href="#">Android app</flux:sidebar.item>
            <flux:sidebar.item href="#">Brand guidelines</flux:sidebar.item>
        </flux:sidebar.group>
    </flux:sidebar.nav>
    <flux:sidebar.spacer />
    <flux:sidebar.nav>
        <flux:sidebar.item icon="cog-6-tooth" href="#">Settings</flux:sidebar.item>
        <flux:sidebar.item icon="information-circle" href="#">Help</flux:sidebar.item>
    </flux:sidebar.nav>
</flux:sidebar>
