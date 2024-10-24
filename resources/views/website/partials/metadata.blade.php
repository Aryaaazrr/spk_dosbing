<meta charset="utf-8">
{{-- <meta name="keywords" content="{{ $basicInfo->keyword ?? '' }}"> --}}
<meta name="author" content="achmadzakariya.my.id">
{{-- <meta name="description" content="{{ $basicInfo->description ?? '' }}">
<meta name='og:image' content="{{ asset('storage/' . $basicInfo->logo ?? '') }}"> --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- For IE -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- For Resposive Device -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- For Window Tab Color -->
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#fff">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#fff">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
{{-- title --}}
<title>@yield('title') - </title>
