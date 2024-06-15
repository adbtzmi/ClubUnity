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
                            <h5 class="mb-0">Add Application</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.application.add') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control rounded" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="student_id" class="form-label">Student ID</label>
                                    <input type="text" class="form-control rounded" id="student_id" name="student_id" required>
                                </div>
                                <div class="mb-3">
                                    <label for="club" class="form-label">Club</label>
                                    <input class="form-control rounded" id="status" name="club" required></input>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control rounded" id="status" name="status">
                                        <option>Approve</option>
                                        <option>Reject</option>
                                    </select>
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
