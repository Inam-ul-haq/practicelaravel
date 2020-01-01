<html>
<head>
    @include('layout.head')
</head>
<body>
@include('layout.nav')

@include('layout.body')
<section Class ="content">
@yield('content')
</section>
@include('layout.footer')
</body>
</html>
