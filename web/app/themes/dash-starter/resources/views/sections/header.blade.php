<script src="https://kit.fontawesome.com/d6a1746038.js" crossorigin="anonymous"></script>


<header class="header">
    <div class="header__topbar hide_on_mobile">
        <div class="container mx-auto flex items-center justify-between py-2">
            <div class="social-icons flex justify-between gap-4">
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

            <div class="contact-info flex items-center gap-12">
                @php $email = get_field('email', 'option') @endphp
                @if ($email)
                    <a href="mailto:{{ esc_attr($email) }}" class="contact-link"><i
                            class="fas fa-envelope"></i>{{ esc_html($email) }}</a>
                @endif

                @php $phone = get_field('contact_number', 'option') @endphp
                @if ($phone)
                    <a href="tel:{{ esc_attr($phone) }}" class="contact-link"><i
                            class="fas fa-phone"></i>{{ esc_html($phone) }}</a>
                @endif
            </div>
        </div>
    </div>

    <div class="header__mainbar">
        <div class="container mx-auto flex items-center justify-between py-4">
            <div class="logo h-[69px]">
                @php $logo = get_field('logo', 'option') @endphp
                @if ($logo)
                    <a href="{{ esc_url(home_url()) }}"><img src="{{ esc_url($logo['url']) }}"
                            alt="{{ esc_attr(get_bloginfo('name')) }}"></a>
                @else
                    <h1><a href="{{ esc_url(home_url()) }}">{{ esc_html(get_bloginfo('name')) }}</a></h1>
                @endif
            </div>

            @include('partials.navigation')

            <!-- Hide the buttons on mobile and tablet screens -->
            <div class="hidden md:flex justify-between gap-4">
                @php $button_link = get_field('login_button', 'option') @endphp
                @if ($button_link)
                    <a href="{{ esc_url($button_link['url']) }}"
                        class="btn btn--outline">{{ esc_html($button_link['title']) }}</a>
                @endif

                @php $secondary_button_link = get_field('sign_up', 'option') @endphp
                @if ($secondary_button_link)
                    <a href="{{ esc_url($secondary_button_link['url']) }}"
                        class="btn btn--primary">{{ esc_html($secondary_button_link['title']) }}</a>
                @endif
            </div>
        </div>
    </div>
</header>
