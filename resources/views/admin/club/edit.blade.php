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
                            <form method="POST" action="{{ route('admin.club.update', $club->id) }}">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $club->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="club_id" class="form-label">Club ID</label>
                                    <input type="text" class="form-control" id="club_id" name="club_id" value="{{ $club->club_id }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" required>{{ $club->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="text" class="form-control" id="image" name="image" value="{{ $club->image }}">
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



