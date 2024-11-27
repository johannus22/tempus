import './bootstrap';
import './calendar';
import './adminCalendar';
import 'flowbite';

import { initFlowbite } from 'flowbite';

document.addEventListener('DOMContentLoaded', () => {
    initFlowbite();
});


document.addEventListener('livewire:navigated', () => {
    initFlowbite();
});
