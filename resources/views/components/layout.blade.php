<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    @include('includes.header')
    <main>
        {{ $slot }}
    </main>
    @include('includes.footer')
</body>
</html>