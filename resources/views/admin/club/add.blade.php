<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-default">
                            <h5 class="mb-0">Add Club</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.club.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control rounded" id="name" name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="club_id" class="form-label">Club ID</label>
                                    <input type="text" class="form-control rounded" id="club_id" name="club_id" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control rounded" id="description" name="description" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control rounded" id="image" name="image" required>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-primary ">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
