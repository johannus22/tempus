document.addEventListener('livewire:navigated', function() {
    initializeCalendar();
});

document.addEventListener('DOMContentLoaded', function() {
    initializeCalendar();
});

function initializeCalendar() {
    var calendarEl = document.getElementById('calendar');
    // Check if calendar element exists on current page
    if (calendarEl) {
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            }
        });
        calendar.render();
    }
}
