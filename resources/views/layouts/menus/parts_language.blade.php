<div class="dropdown lang-dropdown">
    <button type="button" class="header__top__link header__top__link--lang  dropdown-toggle btn" id="main-language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @php($lang = app()->getLocale())

        @if($lang == 'uz')
        <span>Uz</span>
        @endif

        @if($lang == 'en')
        <span>En</span>
        @endif

        @if($lang == 'ru')
        <span>Ру</span>
        @endif
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="main-language" style="">
        <ul>
            @if($lang != 'uz')
            <li><a style="font-size: 15px; font-weight: bold;" href="{{ route('switch.lang', 'uz') }}">Uz</a> </li>
            @endif
            
            @if($lang != 'en')
            <li><a style="font-size: 15px; font-weight: bold;" href="{{ route('switch.lang', 'en') }}">En</a> </li>
            @endif
            
            @if($lang != 'ru')
            <li><a style="font-size: 15px; font-weight: bold;" href="{{ route('switch.lang', 'ru') }}">Ру</a> </li>
            @endif
        </li>
        
        </ul>
    </div>
</div> 