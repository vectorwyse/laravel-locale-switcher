<dropdown-trigger class="h-9 flex items-center" slot-scope="{toggle}" :handle-click="toggle">
    <span class="text-90">
        {{ Config::get('app.available_locales')[app()->getLocale()] }}
    </span>
</dropdown-trigger>

<dropdown-menu slot="menu" width="200" direction="rtl">
    <ul class="list-reset">
        @foreach(Config::get('app.available_locales') as $code => $description)
            @if ($code != app()->getLocale())
                <li>
                    <a href="/set-locale?locale={{ $code }}" class="block no-underline text-90 hover:bg-30 p-3">
                        {{ $description }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</dropdown-menu>
