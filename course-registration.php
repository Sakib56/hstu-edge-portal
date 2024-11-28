<?php include('shared/_header.php'); ?>

<?php
include("assets/config.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $std_id = intval($_POST['stId']);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phoneNum']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $national_id = mysqli_real_escape_string($conn, $_POST['national_id']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $religion = mysqli_real_escape_string($conn, $_POST['religion']);
    $present_level = mysqli_real_escape_string($conn, $_POST['present_level']);
    $laptop = mysqli_real_escape_string($conn, $_POST['laptop']);
    $course_id = mysqli_real_escape_string($conn, $_POST['courseId']);

    // Check for duplicate entries
    $duplicate_check = "
        SELECT * FROM enrolled_students
        WHERE std_id = '$std_id'
        OR email = '$email'
        OR phone = '$phone'";
    $result = mysqli_query($conn, $duplicate_check);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Duplicate entry detected! Please check Student ID, Email, or Phone.');</script>";
    } else {
        $sql = "
            INSERT INTO enrolled_students
            (name, std_id, email, faculty, dept, phone, national_id, gender, religion, course_id, present_level, laptop)
            VALUES ('$name', '$std_id', '$email', '$faculty', '$department', '$phone', '$national_id', '$gender', '$religion', '$course_id', '$present_level', '$laptop')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Registration successful!');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
}
?>

<body>
    <main>
        <div class="big-wrapper light">
            <img src="./images/shape.png" alt="" class="shape" />
            <?php include('shared/_navbar.php'); ?>
            <div class="container mt-5">
                <div class="card border-0 shadow about-card p-5">
                    <div class="card-body mt-2 mb-2 mx-3">
                        <h3 class="card-title">
                            <span class="text-primary icon-hover"><i class="fa-solid fa-paperclip"></i></span>
                            Course Registration
                        </h3>
                        <form method="POST" action="">
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="full_name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" required>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                                <div class="col">
                                    <label for="stId" class="form-label">Student ID Number</label>
                                    <input type="number" class="form-control" id="stId" name="stId" placeholder="Student Id Number" required>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="faculty" class="form-label">Name of the Faculty</label>
                                    <select class="form-select" id="faculty" name="faculty" required>
                                        <option selected disabled value="">--select Faculty--</option>
                                        <?php include('assets/fetch_faculty.php'); ?>
                                    </select>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                                <div class="col">
                                    <label for="department" class="form-label">Name of the Department</label>
                                    <select class="form-select" id="department" name="department" required>
                                        <option selected disabled value="">--select Department--</option>
                                        <?php include('assets/fetch_departments.php'); ?>
                                    </select>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                                <div class="col">
                                    <label for="phoneNum" class="form-label">Your Phone Number</label>
                                    <input type="number" class="form-control" id="phoneNum" name="phoneNum" placeholder="Phone Number" required>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                                <div class="col">
                                    <label for="national_id" class="form-label">Your National Id Number</label>
                                    <input type="number" class="form-control" id="national_id" name="national_id" placeholder="Your National Id Number" required>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option selected disabled value="">---select---</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                                <div class="col">
                                    <label for="religion" class="form-label">Religion</label>
                                    <select class="form-select" id="religion" name="religion" required>
                                        <option selected disabled value="">--select Religion--</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Christian">Christian</option>
                                    </select>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="present_level" class="form-label">Present Level of Education</label>
                                    <select class="form-select" id="present_level" name="present_level" required>
                                        <option selected disabled value="">---select Level---</option>
                                        <option value="1">Level_1</option>
                                        <option value="2">Level_2</option>
                                        <option value="3">Level_3</option>
                                        <option value="4">Level_4</option>
                                    </select>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                                <div class="col">
                                    <label for="laptop" class="form-label">Do you have your personal laptop</label>
                                    <select class="form-select" id="laptop" name="laptop" required>
                                        <option selected disabled value="">--Do you have your personal laptop--</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <div class="invalid-feedback">required!</div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="courseId" class="form-label">Pick your course</label>
                                <select class="form-select" id="courseId" name="courseId" required>
                                    <option selected disabled value="">--select Courses--</option>
                                    <?php include('assets/select_courses.php'); ?>
                                </select>
                                <div class="invalid-feedback">required!</div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary" id="general-info-btn">
                                    <i class='bx bxs-chevrons-right'></i> <span>Submit</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

<?php include('shared/_footer.php'); ?>
