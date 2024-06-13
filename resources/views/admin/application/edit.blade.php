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
                            <form method="POST" action="{{ route('admin.application.update', $application->id) }}">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $application->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="student_id" class="form-label">Student ID</label>
                                    <input type="text" class="form-control" id="student_id" name="student_id" value="{{ $application->student_id }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="club" class="form-label">Club</label>
                                    <input class="form-control" id="club" name="club" value="{{ $application->club }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input class="form-control" id="status" name="status" value="{{ $application->status }}"required>
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



