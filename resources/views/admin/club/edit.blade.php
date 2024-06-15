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
                            <h5 class="mb-0">{{ __('Edit Club') }}</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.club.update', $club->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control rounded" id="name" name="name" value="{{ $club->name }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="club_id" class="form-label">Club ID</label>
                                    <input type="text" class="form-control rounded" id="club_id" name="club_id" value="{{ $club->club_id }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control rounded" id="description" name="description" required>{{ $club->description }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Current Image</label>
                                    <div>
                                        <img src="{{ asset('storage/' . $club->image) }}" alt="{{ $club->name }}" class="h-20 w-20 object-cover mb-3">
                                    </div>
                                    <label for="image" class="form-label">Change Image</label>
                                    <input type="file" class="form-control rounded" id="image" name="image">
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
