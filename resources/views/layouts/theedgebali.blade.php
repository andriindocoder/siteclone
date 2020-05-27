<!doctype html>

<html lang="en" class="no-js">
    @include('layouts.theedge.head')
    <body class="horizontal_logo theme1 colorPalette2 typography1 buttonStyle3 page-home lang-en">
        @include('layouts.theedge.topnav')
        <div class="mobile-branding navbar hidden-sm hidden-md hidden-lg ">
            <a class="" href="/">
            <div class="logo"><span class="logo-helper"></span><img class="logo-img" src="//webbox.imgix.net/images/kifsqlsyyrpwrthq/1013bfd0-e3b3-4b41-99eb-756711666a49.png?auto=format,compress&amp;fit=crop&amp;h=40" alt="The edge"></div>
            </a>
        </div>
        <div id="content-wrap">
            @yield('content')
            @include('layouts.theedge.footer')
        </div>
        @include('layouts.theedge.script')
    </body>
</html>