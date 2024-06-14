<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg"">
                <p class="text-gray-900">{{ __("This is club management") }}</p>
            </div>
            <br>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="title-box rounded">
                        <h5 class="title-left">List of Clubs</h5>
                        <br>
                        <div class="table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Club Name</th>
                                        <th>Club ID</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Date Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clubs as $club)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $club->name }}</td>
                                        <td>{{ $club->club_id }}</td>
                                        <td>{{ $club->description }}</td>
                                        <td class="border px-4 py-2">
                                            <img src="{{ $club->image }}" alt="{{ $club->name }}" class="h-10 w-10 object-cover">
                                        </td>
                                        <td>{{ $club->created_at }}</td>
                                        <td>
                                            <form action="{{ route('admin.club.delete', $club->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="action-button bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                            </form>
                                            <a href="{{ route('admin.club.edit', $club->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('admin.club.add') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Club</a>
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
