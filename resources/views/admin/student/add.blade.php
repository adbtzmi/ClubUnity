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
                            <h5 class="mb-0">Add Student</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.student.add') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control rounded" id="name" name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="student_id" class="form-label">Student ID</label>
                                    <input type="text" class="form-control rounded" id="student_id" name="student_id" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kulliyyah" class="form-label">Kulliyyah (Course)</label>
                                    <textarea class="form-control rounded" id="kulliyyah" name="kulliyyah" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="year" class="form-label">Year</label>
                                    <input type="text" class="form-control rounded" id="year" name="year">
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
