@extends('layouts.dashboardTemp')

@section('title', 'Enrollment Management')
@section('Pages', 'Enrollment')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Available Students Card -->
        <div class="col-12 mb-4">
            <div class="student-list-card">
                <div class="student-list-header">
                    <h5 class="mb-0">Available Students</h5>
                </div>
                <div class="student-list-body">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($availableStudents as $student)
                                <tr>
                                    <td>{{ $student->student_id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        <span class="badge bg-warning">Pending</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" onclick="enrollStudent({{ $student->id }})">
                                            Enroll
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">No available students found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enrolled Students Card -->
        <div class="col-12">
            <div class="student-list-card">
                <div class="student-list-header">
                    <h5 class="mb-0">Enrolled Students</h5>
                </div>
                <div class="student-list-body">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Enrolled Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($enrolledStudents as $student)
                                <tr>
                                    <td>{{ $student->student_id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        <span class="badge bg-success">Enrolled</span>
                                    </td>
                                    <td>{{ $student->enrolled_at->format('M d, Y') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">No enrolled students found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function enrollStudent(studentId) {
    // Add your enrollment logic here
    // You might want to make an AJAX call to your backend
    Swal.fire({
        title: 'Enrolling Student',
        text: 'Are you sure you want to enroll this student?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Yes, enroll',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            // Make AJAX call to enroll student
            axios.post(`/enrollment/${studentId}/enroll`)
                .then(response => {
                    Swal.fire('Success', 'Student has been enrolled successfully', 'success')
                        .then(() => {
                            window.location.reload();
                        });
                })
                .catch(error => {
                    Swal.fire('Error', 'Failed to enroll student', 'error');
                });
        }
    });
}
</script>
@endsection 