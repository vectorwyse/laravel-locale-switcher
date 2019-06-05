<dropdown 
    @if (!empty($attributes['dropdown'])) 
        @foreach ($attributes['dropdown'] as $name => $value)
            {{ $name }}="{{ $value }}"
        @endforeach
    @endif
>
    <dropdown-trigger slot-scope="{toggle}" :handle-click="toggle"
        @if (!empty($attributes['dropdown-trigger'])) 
            @foreach ($attributes['dropdown-trigger'] as $name => $value)
                {{ $name }}="{{ $value }}"
            @endforeach
        @endif
    >
        <span>
            {{ Config::get('app.available_locales')[app()->getLocale()] }}
        </span>
    </dropdown-trigger>

    <dropdown-menu slot="menu"
        @if (!empty($attributes['dropdown-menu'])) 
            @foreach ($attributes['dropdown-menu'] as $name => $value)
                {{ $name }}="{{ $value }}"
            @endforeach
        @endif
    >
        <ul class="list-reset">
            @foreach (Config::get('app.available_locales') as $code => $description)
                @if ($code != app()->getLocale())
                    <li>
                        <a href="/set-locale?locale={{ $code }}"
                            @if (!empty($attributes['a'])) 
                                @foreach ($attributes['a'] as $name => $value)
                                    {{ $name }}="{{ $value }}"
                                @endforeach
                            @endif
                        >
                            {{ $description }}
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </dropdown-menu>
</dropdown>
