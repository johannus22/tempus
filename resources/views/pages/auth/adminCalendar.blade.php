<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tempus OMPHP</title>

    <!-- FullCalendar 6 via CDN -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/list@6.1.10/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.10/index.global.min.js'></script>

    <!-- Vite -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-slate-200">
    <livewire:layouts.admin-navbar />

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-24 mb-10">
        <div class="mt-8">
            <div id="adminCalendar"></div>
        </div>
    </div>

    {{-- modal --}}
    <x-edit-event>
    </x-edit-event>

    <!-- Pass the events to the calendar.js -->
    <script>
        var calendarEvents = @json($event);
    </script>
</body>
</html>
