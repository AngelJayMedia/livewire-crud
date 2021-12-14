<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
@stack('stylesheet')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<title>
    {{ isset($title) ? config('app.name') . ' | ' . $title : ' '}}
</title>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<livewire:styles />
