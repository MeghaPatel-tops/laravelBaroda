<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Create Form</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Create Employee</h3>
                    </div>

                    <div class="card-body">

                        <form method="post" action="/employee" >
                            @csrf
                            <!-- Name -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Employee Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="empName"
                                    placeholder="Enter employee name">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Email Address</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="empEmail"
                                    placeholder="Enter email">
                            </div>

                            <!-- Designation -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Designation</label>
                                <select class="form-select" name="empDesgnation">
                                    <option selected>Select Designation</option>
                                    <option>Software Developer</option>
                                    <option>Frontend Developer</option>
                                    <option>Backend Developer</option>
                                    <option>UI/UX Designer</option>
                                    <option>QA Engineer</option>
                                    <option>Project Manager</option>
                                    <option>HR</option>
                                </select>
                            </div>

                            <!-- Experience -->
                            <div class="mb-4">
                                <label class="form-label fw-bold">Experience (Years)</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    name="empExp"
                                    placeholder="Enter experience">
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between">
                               

                                <button type="submit" class="btn btn-primary">
                                    Save Employee
                                </button>
                            </div>

                        </form>

                    </div>

                    <div class="card-footer text-center text-muted">
                        Employee Management System
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>