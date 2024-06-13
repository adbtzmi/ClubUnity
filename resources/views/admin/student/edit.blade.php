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
                            <form method="POST" action="{{ route('admin.student.update', $student->id) }}">
                                @csrf
                                @method('POST')
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="student_id" class="form-label">Student ID</label>
                                    <input type="text" class="form-control" id="student_id" name="student_id" value="{{ $student->student_id }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kulliyyah" class="form-label">Kulliyyah (Course)</label>
                                    <textarea class="form-control" id="kulliyyah" name="kulliyyah" required>{{ $student->kulliyyah }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="year" class="form-label">Year</label>
                                    <input type="text" class="form-control" id="year" name="year" value="{{ $student->year }}">
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
