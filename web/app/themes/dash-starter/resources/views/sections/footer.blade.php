<section
    class="container relative bottom-[-120px] mx-auto flex flex-col md:flex-row items-stretch rounded-lg py-8 gap-0 ">
    <div
        class="w-full md:w-1/3 bg-gradient flex flex-col justify-center items-center px-4 py-[4rem] center items rounded-l-2xl">
        <h4 class="text-white text-left text-lg md:text-xl font-semibold mb-2">Sign up to our newsletter</h4>
        <p class="text-white text-left text-sm md:text-base">For the latest industry news</p>
    </div>
    <div class="w-full md:w-2/3 px-4 bg-gray-50 rounded-r-2xl flex flex-col justify-center items-center center items">
        @php echo do_shortcode('[fluentform id="2"]'); @endphp
    </div>
</section>

<footer class="footer bg-primary pb-[5rem] pt-[10rem]">
    <section class="container mx-auto flex flex-col md:flex-row items-center mb-4">
        <div class="footer-col-start w-full md:w-1/3 mb-4 md:mb-0 md:pr-4">
            <div class="logo h-[69px] invert-colors content-center align-center text-cetner mx-auto">
                @php $logo = get_field('footer_logo', 'option') @endphp
                @if ($logo)
                    <a href="{{ esc_url(home_url()) }}"><img src="{{ esc_url($logo['url']) }}"
                            alt="{{ esc_attr(get_bloginfo('name')) }}"></a>
                @else
                    <h1><a href="{{ esc_url(home_url()) }}">{{ esc_html(get_bloginfo('name')) }}</a></h1>
                @endif
            </div>
            <div class="social-icons py-[2rem] text-center justify-center flex gap-1">
                @php $facebook = get_field('facebook', 'option') @endphp
                @if ($facebook)
                    <a href="{{ esc_url($facebook) }}" target="_blank" class="social-icon"><i
                            class="fab fa-facebook-f text-primary"></i></a>
                @endif

                @php $linkedin = get_field('linkedin', 'option') @endphp
                @if ($linkedin)
                    <a href="{{ esc_url($linkedin) }}" target="_blank" class="social-icon"><i
                            class="fab fa-linkedin text-primary"></i></a>
                @endif

                @php $instagram = get_field('instagram', 'option') @endphp
                @if ($instagram)
                    <a href="{{ esc_url($instagram) }}" target="_blank" class="social-icon"><i
                            class="fab fa-instagram text-primary"></i></a>
                @endif
            </div>
        </div>
        <div class="footer-col-mid w-full md:w-1/2 mb-4 md:mb-0 text-white">
            @if (has_nav_menu('footer_menu'))
                {!! wp_nav_menu(['theme_location' => 'footer_menu', 'menu_class' => 'footer-menu']) !!}
            @endif
        </div>
        <div class="footer-col-end w-full md:w-1/3 text-white">
            <p class="flex gap-4 mb-2 items-center"><i class="fas fa-map-pin text-accent mr-[2]"></i>1
                Street name,
                Town,
                City,
                Postcode
            </p>
            <p class="flex gap-4 mb-2 items-center"><i class="fas fa-phone text-accent"></i>01234 567
                890 </p>
            <p class="flex gap-4 mb-2 items-center"><i class="fas fa-envelope text-accent"></i>info@ecsmedical.co.uk
            </p>
        </div>
    </section>

    <section
        class="container mx-auto pt-[2rem] justify-between flex flex-col md:flex-row items-center border-solid border-t-[2px]">
        <div class="legal_links text-white">
            <a href="#">Privacy policy </a>
            <a href="#">Cookie Policy </a>
        </div>

        <div class="designer_link text-white">
            Designed & cared for by -dash media
        </div>
        </div>
</footer>
