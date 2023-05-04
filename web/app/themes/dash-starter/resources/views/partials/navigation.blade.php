@php
    use Log1x\Navi\Navi;
    $navigation = (new Navi())->build('primary_navigation');
@endphp

<nav class="nav-primary flex md:gap-x-5 2xl:gap-x-10 items-center im-simple relative">
    @if ($navigation->isNotEmpty())
        @foreach ($navigation->toArray() as $item)
            <div
                class="nav-link px-4 text-primary relative {{ $item->classes }} @if ($item->children) parent @endif {{ $item->active ? 'current-item' : '' }} ">
                <a href="{{ $item->url }}">
                    {{ $item->label }}
                </a>
                @if ($item->children)
                    <div
                        class="submenu submenu_lvl_1 pl-8 2lg:pl-6 h-auto 2lg:absolute 2lg:bg-primary-dark 2lg:text-white w-max z-40 2lg:shadow-xl p-4 2lg:p-6 overflow-visible">
                        <div class="flex flex-col gap-y-4 im-simple">
                            @foreach ($item->children as $child)
                                <div
                                    class="nav-link im-base {{ $child->classes }} @if ($item->children) has-submenu parent @endif {{ $child->active ? 'current-item' : '' }}">
                                    <a href="{{ $child->url }}">
                                        {{ $child->label }}
                                    </a>
                                    @if ($child->children)
                                        <div
                                            class="submenu submenu_lvl_2 im-simple absolute left-[100%] w-max ml-1 2lg:bg-primary-dark p-8 block">
                                            <div class="flex flex-col gap-y-4 im-simple ">
                                                @foreach ($child->children as $child)
                                                    <li style="list-style: none;"
                                                        class="2lg:text-white im-base mb-4 last:mb-0  {{ $child->classes }}  {{ $child->active ? 'current-item' : '' }}">
                                                        <a href="{{ $child->url }}">
                                                            {{ $child->label }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    @endif
</nav>
