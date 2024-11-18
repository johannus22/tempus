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
    <livewire:components.about.speed-dial>

    <section id='hero' class="pt-16 mx-20 md:mx-30">
        <livewire:components.about.hero />
    </section>



</body>
</html>
