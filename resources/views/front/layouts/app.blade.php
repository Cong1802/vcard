
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(!empty($metas))
        @if($metas['meta_description'])
            <meta name="description" content="{{$metas['meta_description']}}">
        @endif
        @if($metas['meta_keyword'])
            <meta name="keywords" content="{{$metas['meta_keyword']}}">
        @endif
        @if($metas['home_title'] && $metas['site_title'])
            <title>{{ $metas['home_title'] }} | {{ $metas['site_title'] }}</title>
        @else
            <title>@yield('title') | {{ getAppName() }}</title>
        @endif
    @else
        <title>@yield('title') | {{ getAppName() }}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
    @endif

    @if(!empty(getAppLogo()))
        <meta property="og:image" content="{{getAppLogo()}}"/>
    @endif

    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="{{ mix('assets/css/public.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/third-party.css') }}">
    <link href="{{ asset('assets/css/front-custom.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/front/front-custom.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ mix('assets/js/front-third-party.js') }}"></script>
    <script src="{{ asset('assets/js/messages.js') }}"></script>
    @php  $langSession = Session::get('languageName');
           $frontLanguage = !isset($langSession) ? getSuperAdminSettingValue('default_language') : $langSession;
    @endphp


    <link href={{ asset("frontend/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{ asset("frontend/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
    <link href={{ asset("frontend/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
    <link href={{ asset("frontend/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
    <link href={{ asset("frontend/vendor/remixicon/remixicon.css")}} rel="stylesheet">
    <link href={{ asset("frontend/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">
    <link href={{ asset("frontend/css/style.css")}} rel="stylesheet">
</head>

<body data-bs-offset="71">
    <!-- start header section -->
    {{-- @include('front.layouts.header') --}}
    @include('include.header')
    @yield('content')
    @include("include.loading")
    {{-- @include("include.IconContact") --}}
    @include('include.footer')

</body>
    <script>
        let frontLanguage = "{{ $frontLanguage }}"
        Lang.setLocale(frontLanguage)
    </script>
    <script src="{{ mix('assets/js/front-pages.js') }}"></script>

    {!! getSuperAdminSettingValue('extra_js_front') !!}
    @routes
    {{--@yield('page_js')--}}
    {{--@yield('scripts')--}}
    <script>
        $('html, body').animate({
            scrollTop: $('html, body').offset().top,
        })
    </script>
    <!--google analytics code-->
    @if(!empty($metas['google_analytics']))
        <script>
            {!! $metas['google_analytics'] !!}
        </script>
    @endif
      <!-- Vendor JS Files -->
    <script src={{ asset("frontend/vendor/purecounter/purecounter_vanilla.js")}}></script>
    <script src={{ asset("frontend/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{ asset("frontend/vendor/glightbox/js/glightbox.min.js")}}></script>
    <script src={{ asset("frontend/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
    <script src={{ asset("frontend/vendor/swiper/swiper-bundle.min.js")}}></script>
    <script src={{ asset("frontend/vendor/waypoints/noframework.waypoints.js")}}></script>
    <script src={{ asset("frontend/vendor/php-email-form/validate.js")}}></script>
    <script type='text/javascript' src='https://28network.net/wp-content/themes/28network/assets/js/particles.js?ver=1.0.0' id='particles-js'></script>
    <script type='text/javascript' src='https://28network.net/wp-content/themes/28network/assets/js/particles-config.js?ver=1.0.0' id='particles-config-js'></script>
    <script src={{ asset("frontend/js/main.js")}}></script>
</html>