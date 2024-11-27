document.addEventListener('livewire:navigated', function () {
    initializeCalendar();
});

document.addEventListener('DOMContentLoaded', function () {
    initializeCalendar();
});

function initializeCalendar() {
    var calendarAd = document.getElementById('adminCalendar');
    if (calendarAd) {
        var calendar = new FullCalendar.Calendar(calendarAd, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'title',
                center: '',
                right: 'prev,next today'
            },
            buttonText: {
                today: 'Today',
            },
            //from json directive
            events: calendarEvents,
            themeSystem: 'standard',
            contentHeight: 'auto',
            eventClassNames: function (arg) {
                return [
                    'bg-blue-600',
                    'text-white',
                    'px-2',
                    'py-1',
                    'rounded-md',
                    'shadow',
                    'hover:bg-blue-800'];
            },
            dayHeaderClassNames: 'text-gray-600 text-sm font-medium bg-gray-100 py-2',
            dayCellClassNames: function(arg) {
                return [
                    'border-2',
                    'border-gray-200',
                    'border-solid',
                    'hover:bg-gray-50',
                    'h-20',
                    'text-center'
                ];
            },
            editable: true,
            selectable: true,
            eventTimeFormat: {
                hour: '2-digit',
                minute: '2-digit',
                hour12: true,
            },

        });
        calendar.render();
    }
}
