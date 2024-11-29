<div x-data="{ open: false, eventDetails: {} }"
        x-on:open-modal.window="open = true; eventDetails = $event.detail">
        <div x-show="open"
            x-on:keydown.escape.window = "open = false"
            x-on:click="open = false"
            x-transition
            style="display: none"
            class="fixed inset-0 z-50 flex items-center justify-center bg-gray-700 bg-opacity-50">
            <div class="bg-white p-4 rounded-lg shadow-md md:w-50 xl:w-88">
                <h2 class="text-lg font-bold mb-4 flex items-center justify-center">Event Details</h2>
                <p><strong>Event:</strong> <span x-text="eventDetails.title"></span></p>
                <p><strong>Date:</strong> <span x-text="eventDetails.start"></span></p>
                <button x-on:click="open = false" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">Close</button>
            </div>
        </div>
    </div>
