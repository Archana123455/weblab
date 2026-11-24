<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Management System</title>
</head>
<body>
<h2>Student Management System</h2>
<form method="POST">
<h3>Insert a Student</h3>
<label>USN:</label> <input type="text" name="usn" required><br>
<label>Name:</label> <input type="text" name="name" required><br>
<label>Branch:</label> <input type="text" name="branch" required><br>
<label>Semester:</label> <input type="number" name="semester" required><br>
<label>College:</label> <input type="text" name="college" required><br>
<button type="submit" name="action" value="insert">Insert</button>
</form>
<form method="POST">
<h3>Display All Students</h3>
<button type="submit" name="action" value="display">Display</button>
</form>
<form method="POST">
<h3>Delete a Student</h3>
<label>USN:</label> <input type="text" name="usn_delete" required><br>
<button type="submit" name="action" value="delete">Delete</button>
</form>
<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'student_db');
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Handle form actions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$action = $_POST['action'];
// Insert a student
if ($action == 'insert') {
$usn = $conn->real_escape_string($_POST['usn']);
$name = $conn->real_escape_string($_POST['name']);
$branch = $conn->real_escape_string($_POST['branch']);
$semester = (int)$_POST['semester'];
$college = $conn->real_escape_string($_POST['college']);
$query = "INSERT INTO students (usn, name, branch, semester, college) 
VALUES ('$usn', '$name', '$branch', $semester, '$college')";
