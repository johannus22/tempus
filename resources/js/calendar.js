document.addEventListener('livewire:navigated', function () {
    initializeCalendar();
});

document.addEventListener('DOMContentLoaded', function () {
    initializeCalendar();
});

function initializeCalendar() {
    var calendarEl = document.getElementById('calendar');
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
            events: calendarEvents,
            themeSystem: 'standard', // Optional: To override FullCalendar's default theme
            contentHeight: 'auto', // Auto-adjust height
            eventClassNames: function () {
                return 'bg-blue-500 text-white px-2 py-1 rounded-md shadow';
            },
            dayHeaderClassNames: 'text-gray-600 text-sm font-medium bg-gray-100 py-2',
            dayCellClassNames: 'border border-gray-300 h-20 text-center',
            editable: true,
            selectable: true,
            eventTimeFormat: {
                hour: '2-digit',
                minute: '2-digit',
                hour12: true, // This ensures 12-hour format (e.g., 3:00 pm)
            },

        });
        calendar.render();
    }
}
