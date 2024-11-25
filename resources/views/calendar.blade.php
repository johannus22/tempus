<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tempus OMPHP</title>

    <!-- Latest FullCalendar 6 -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>

    {{-- other bundles --}}
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.10/index.global.min.js'></script>

    <!-- Vite -->
    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        .fc .fc-toolbar-title {
            @apply text-2xl font-bold text-gray-800;
        }

        .fc {
            @apply font-sans;
        }

        .fc-button {
            @apply bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded;
        }

        .fc-today {
            @apply bg-blue-50 !important;
        }

        #calendar {
            @apply bg-white rounded-lg shadow p-4 my-4;
        }
    </style>
</head>
<body class="bg-slate-200">
    <livewire:layouts.nav-bar />

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24 mb-10">
        <div class="mt-8">
            <div id="calendar"></div>
        </div>
    </div>
</body>
</html>
