<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 1200px;
            flex: 1;
        }
        footer {
            background: #f8f9fa;
            padding: 10px 0;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">School Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teachers.index') }}">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('enrollments.index') }}">Enrollment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student_classes.index') }}">Student Classes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}">Course</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('attendances.index') }}">Attendances</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('exams.index') }}">Exam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('results.index') }}">Result</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fees.index') }}">Fees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admins.index') }}">Admins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('library.index') }}">Library</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="content mt-4">
            @yield('content')
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} School Management System. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
