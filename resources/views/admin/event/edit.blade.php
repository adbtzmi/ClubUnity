<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-default">
                            <h5 class="mb-0">{{ __('Edit Student') }}</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.event.update', $event->id) }}">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="event_name" class="form-label">Event Name</label>
                                    <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->event_name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="club" class="form-label">Club</label>
                                    <input type="text" class="form-control" id="club" name="club" value="{{ $event->club }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="venue" class="form-label">Venue</label>
                                    <input type="text" class="form-control" id="venue" name="venue" value="{{ $event->venue }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="participants" class="form-label">Participants</label>
                                    <input type="text" class="form-control" id="participants" name="participants" value="{{ $event->participants }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>