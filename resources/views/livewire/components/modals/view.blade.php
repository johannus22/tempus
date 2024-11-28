<div>
    @if ($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-lg font-bold mb-4">{{ $event['title'] ?? 'Event Details' }}</h2>
                <p>Start: {{ isset($event['start']) ? \Carbon\Carbon::parse($event['start'])->toDayDateTimeString() : 'N/A' }}</p>
                <p>End: {{ isset($event['end']) ? \Carbon\Carbon::parse($event['end'])->toDayDateTimeString() : 'N/A' }}</p>
                <button wire:click="close" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Close</button>
            </div>
        </div>
    @endif
</div>
