<?php
$conn = new mysqli("localhost", "root", "", "ami_enrollment");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO enrollments (
grade_level,

learner_lname, learner_fname, learner_mname, learner_ext, nickname,
sex, dob, age, mother_tongue, religion, email,

province, municipality, barangay, street,

father_lname, father_fname, father_mname, father_occ, father_contact,

mother_lname, mother_fname, mother_mname, mother_occ, mother_contact, mother_maiden,

guardian_type, guardian_lname, guardian_fname, guardian_mname, guardian_occ, guardian_contact,

emergency1_name, emergency1_relationship, emergency1_contact,
emergency2_name, emergency2_relationship, emergency2_contact,
emergency3_name, emergency3_relationship, emergency3_contact,

special_needs, medication, medication_details

) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param(
str_repeat("s", 44),

$_POST['grade_level'] ?? '',

$_POST['learner_lname'] ?? '',
$_POST['learner_fname'] ?? '',
$_POST['learner_mname'] ?? '',
$_POST['learner_ext'] ?? '',
$_POST['nickname'] ?? '',

$_POST['sex'] ?? '',
$_POST['dob'] ?? '',
$_POST['age'] ?? '',
$_POST['mother_tongue'] ?? '',
$_POST['religion'] ?? '',
$_POST['email'] ?? '',

$_POST['province'] ?? '',
$_POST['municipality'] ?? '',
$_POST['barangay'] ?? '',
$_POST['street'] ?? '',

$_POST['father_lname'] ?? '',
$_POST['father_fname'] ?? '',
$_POST['father_mname'] ?? '',
$_POST['father_occ'] ?? '',
$_POST['father_contact'] ?? '',

$_POST['mother_lname'] ?? '',
$_POST['mother_fname'] ?? '',
$_POST['mother_mname'] ?? '',
$_POST['mother_occ'] ?? '',
$_POST['mother_contact'] ?? '',
$_POST['mother_maiden'] ?? '',

$_POST['guardian_type'] ?? '',
$_POST['guardian_lname'] ?? '',
$_POST['guardian_fname'] ?? '',
$_POST['guardian_mname'] ?? '',
$_POST['guardian_occ'] ?? '',
$_POST['guardian_contact'] ?? '',

$_POST['emergency1_name'] ?? '',
$_POST['emergency1_relationship'] ?? '',
$_POST['emergency1_contact'] ?? '',

$_POST['emergency2_name'] ?? '',
$_POST['emergency2_relationship'] ?? '',
$_POST['emergency2_contact'] ?? '',

$_POST['emergency3_name'] ?? '',
$_POST['emergency3_relationship'] ?? '',
$_POST['emergency3_contact'] ?? '',

$_POST['special_needs'] ?? '',
$_POST['medication'] ?? '',
$_POST['medication_details'] ?? ''
);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conn->close();
?>
