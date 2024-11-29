<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tempus OMPHP</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="bg-slate-200">
    <livewire:layouts.nav-bar />

    <x-view-event title="ila">
    </x-view-event>

    <button x-data x-on:click="$dispatch('open-view-modal')" class="mt-40 text-white bg-teal-500 p-9">testModal</button>
</body>
</html>
