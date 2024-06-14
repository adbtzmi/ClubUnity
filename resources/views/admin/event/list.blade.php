<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg"">
                <p class="text-gray-900">{{ __("This is event management") }}</p>
            </div>
            <br>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <div class="title-box rounded">
                        <h5 class="title-left">List of Events</h5>
                        <br>
                        <div class="table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Event Name</th>
                                        <th>Club</th>
                                        <th>Date</th>
                                        <th>Venue</th>
                                        <th>Participants</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $event->event_name }}</td>
                                        <td>{{ $event->club }}</td>
                                        <td>{{ $event->date }}</td>
                                        <td>{{ $event->venue }}</td>
                                        <td>{{ $event->participants }}</td>
                                        <td>
                                            <form action="{{ route('admin.event.delete', $event->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="action-button bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                            </form>
                                            <a href="{{ route('admin.event.edit', $event->id) }}" class="action-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('admin.event.add') }}" class="action-button bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .action-button {
        display: inline-block;
        padding: 0.5rem 1rem;
        text-align: center;
        text-decoration: none;
        border: none;
        cursor: pointer;
        font-size: 1rem;
        box-sizing: border-box;
    }
</style>
