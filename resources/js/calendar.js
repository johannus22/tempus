document.addEventListener('livewire:navigated', function () {
    initializeCalendar();
});

document.addEventListener('DOMContentLoaded', function () {
    initializeCalendar();
});

function initializeCalendar() {
    var calendarEl = document.getElementById('calendar');
    // Check if calendar element exists on the current page
    if (calendarEl) {
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'title',
                center: '',
                right: 'prev,next today'
            },
            buttonText: {
                today: 'Today',
            },
            events: [
                {
                    title: 'NMass',
                    start: '2024-11-03T08:00:00',
                },
                {
                    title: 'HB Mayapyap',
                    start: '2024-11-03T12:00:00',
                },
                {
                    title: 'HB Buenavista East dasdasdasdasdasddfghdfgdfg dfg ddfgdfgdf',
                    start: '2024-11-03T12:00:00',
                },
                {
                    title: 'HB Mayapyap',
                    start: '2024-11-03T12:00:00',
                },
            ],
            themeSystem: 'standard', // Optional: To override FullCalendar's default theme
            contentHeight: 'auto', // Auto-adjust height
            eventClassNames: function () {
                return 'bg-blue-500 text-white px-2 py-1 rounded-md shadow';
            },
            dayHeaderClassNames: 'text-gray-600 text-sm font-medium bg-gray-100 py-2',
            dayCellClassNames: 'border border-gray-200 h-20 text-center',
            editable: true,
            selectable: true,

        });

        calendar.render();
    }
}
