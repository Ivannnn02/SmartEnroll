<?php

$conn = new mysqli("localhost", "root", "", "ami_enrollment");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* ---------- STORE POST INTO VARIABLES FIRST ---------- */
$completion_date = $_POST['completion_date'] ?? '';
$grade_level = $_POST['grade_level'] ?? '';
$learner_lname = $_POST['learner_lname'] ?? '';
$learner_fname = $_POST['learner_fname'] ?? '';
$learner_mname = $_POST['learner_mname'] ?? '';
$learner_ext = $_POST['learner_ext'] ?? '';
$nickname = $_POST['nickname'] ?? '';

$sex = $_POST['sex'] ?? '';
$dob = $_POST['dob'] ?? '';
$age = $_POST['age'] ?? '';
$mother_tongue = $_POST['mother_tongue'] ?? '';
$religion = $_POST['religion'] ?? '';
$email = $_POST['email'] ?? '';

$province = $_POST['province'] ?? '';
$municipality = $_POST['municipality'] ?? '';
$barangay = $_POST['barangay'] ?? '';
$street = $_POST['street'] ?? '';

$father_lname = $_POST['father_lname'] ?? '';
$father_fname = $_POST['father_fname'] ?? '';
$father_mname = $_POST['father_mname'] ?? '';
$father_occ = $_POST['father_occ'] ?? '';
$father_contact = $_POST['father_contact'] ?? '';

$mother_lname = $_POST['mother_lname'] ?? '';
$mother_fname = $_POST['mother_fname'] ?? '';
$mother_mname = $_POST['mother_mname'] ?? '';
$mother_occ = $_POST['mother_occ'] ?? '';
$mother_contact = $_POST['mother_contact'] ?? '';
$mother_maiden = $_POST['mother_maiden'] ?? '';

$guardian_type = $_POST['guardian_type'] ?? '';
$guardian_lname = $_POST['guardian_lname'] ?? '';
$guardian_fname = $_POST['guardian_fname'] ?? '';
$guardian_mname = $_POST['guardian_mname'] ?? '';
$guardian_occ = $_POST['guardian_occ'] ?? '';
$guardian_contact = $_POST['guardian_contact'] ?? '';

$emergency1_name = $_POST['emergency1_name'] ?? '';
$emergency1_contact = $_POST['emergency1_contact'] ?? '';
$emergency1_relationship = $_POST['emergency1_relationship'] ?? '';

$emergency2_name = $_POST['emergency2_name'] ?? '';
$emergency2_contact = $_POST['emergency2_contact'] ?? '';
$emergency2_relationship = $_POST['emergency2_relationship'] ?? '';

$emergency3_name = $_POST['emergency3_name'] ?? '';
$emergency3_contact = $_POST['emergency3_contact'] ?? '';
$emergency3_relationship = $_POST['emergency3_relationship'] ?? '';

$special_needs = $_POST['special_needs'] ?? '';
$medication = $_POST['medication'] ?? '';
$medication_details = $_POST['medication_details'] ?? '';

/* ---------- PREPARE QUERY ---------- */

$sql = "INSERT INTO enrollments (
grade_level,
school_year,
completion_date,
learner_lname, learner_fname, learner_mname, learner_ext, nickname,
sex, dob, age, mother_tongue, religion, email,
province, municipality, barangay, street,
father_lname, father_fname, father_mname, father_occ, father_contact,
mother_lname, mother_fname, mother_mname, mother_occ, mother_contact, mother_maiden,
guardian_type, guardian_lname, guardian_fname, guardian_mname, guardian_occ, guardian_contact,
emergency1_name, emergency1_contact, emergency1_relationship,
emergency2_name, emergency2_contact, emergency2_relationship,
emergency3_name, emergency3_contact, emergency3_relationship,
special_needs, medication, medication_details
) VALUES (" . rtrim(str_repeat("?,", 47), ",") . ")";

$stmt = $conn->prepare($sql);

/* ---------- BIND VARIABLES ---------- */
$year = date("Y", strtotime($completion_date));
$nextYear = $year + 1;
$school_year = $year . "-" . $nextYear;
$stmt->bind_param(
str_repeat("s", 47),

$grade_level,
$school_year,
$completion_date,
$learner_lname,
$learner_fname,
$learner_mname,
$learner_ext,
$nickname,

$sex,
$dob,
$age,
$mother_tongue,
$religion,
$email,

$province,
$municipality,
$barangay,
$street,

$father_lname,
$father_fname,
$father_mname,
$father_occ,
$father_contact,

$mother_lname,
$mother_fname,
$mother_mname,
$mother_occ,
$mother_contact,
$mother_maiden,

$guardian_type,
$guardian_lname,
$guardian_fname,
$guardian_mname,
$guardian_occ,
$guardian_contact,

$emergency1_name,
$emergency1_contact,
$emergency1_relationship,

$emergency2_name,
$emergency2_contact,
$emergency2_relationship,

$emergency3_name,
$emergency3_contact,
$emergency3_relationship,

$special_needs,
$medication,
$medication_details
);

/* ---------- EXECUTE ---------- */

if ($stmt->execute()) {
    echo "success";
} else {
    echo "Database Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
