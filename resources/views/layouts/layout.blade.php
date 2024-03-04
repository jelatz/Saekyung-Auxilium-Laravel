<!DOCTYPE html>
<html lang="en">
@incldue('includes.head')
<body>
    @include('includes.header')
    <main>
        {{$slot}}
    </main>
    @include('includes.footer')
    {{-- SCRIPTS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>