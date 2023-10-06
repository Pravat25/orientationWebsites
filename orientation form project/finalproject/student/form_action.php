<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<?php
// Database connection details
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $database = "orientation";

// // Create a database connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include("../db_config.php");

// Process the form data when the form is submitted
if (isset($_POST["submit"])) {

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $title = $_POST["title"];
    $studentId = $_POST["studentId"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $usiNo = $_POST["usiNumber"];
    $docType = $_POST["documentType"];
    $docNo = $_POST["docNumber"];
    $issueDate = $_POST["issueDate"];
    $expiryDate = $_POST["expiaryDate"];
    $issueCountry = $_POST["issuedCountry"];
    $currentAddress = $_POST["postalAddress"];
    $suburb = $_POST["Suburb"];
    $state = $_POST["state"];
    $postCode = $_POST["postalCode"];
    $email = $_POST["emailAddress"];
    $mobile = $_POST["mobilenumber"];
    $emergencyContact = $_POST["emergencyFullName"];
    $relationship = $_POST["relationshipToYou"];
    $emergencyContactNo = $_POST["phoneNumber"];
    $permanentAddress = $_POST["fullAddress"];
    $country = $_POST["country"];
    $countryCode = $_POST["countryCode"];


$qualificationsArray = [];
if (isset($_POST["qu1"])) {
    $qualificationsArray[] = $_POST["qu1"];
}
if (isset($_POST["qu2"])) {
    $qualificationsArray[] = $_POST["qu2"];
}
if (isset($_POST["qu3"])) {
    $qualificationsArray[] = $_POST["qu3"];
}
if (isset($_POST["none"])) {
    $qualificationsArray[] = $_POST["none"];
}
$qualifications = implode(", ", $qualificationsArray);

    $otherQualification = $_POST["otherQualifications"];
    $disability = isset($_POST["disability"]) ? $_POST["disability"] : "n/a";
    $disabilityType = $disability ? $_POST["area1"] . ", " . $_POST["area2"] . ", " . $_POST["area3"] : "n/a";
    $medicalCondition = $_POST["medicalInfo"];
    $employmentStatus = $_POST["employmentStatus"];
    $studyReasons = isset($_POST["reason1"]) ? $_POST["reason1"] : "";
    $studyReasons .= isset($_POST["reason2"]) ? ", " . $_POST["reason2"] : "";
    $studyReasons .= isset($_POST["reason3"]) ? ", " . $_POST["reason3"] : "";
    $studyReasons .= isset($_POST["reason4"]) ? ", " . $_POST["reason4"] : "";
    $studyReasons .= isset($_POST["reason5"]) ? ", " . $_POST["reason5"] : "";
    $studyReasons .= isset($_POST["reason6"]) ? ", " . $_POST["reason6"] : "";
    $studyReasons .= isset($_POST["reason7"]) ? ", " . $_POST["reason7"] : "";
    $studyReasons .= isset($_POST["reason8"]) ? ", " . $_POST["reason8"] : "";
    $studyReasons .= isset($_POST["reason9"]) ? ", " . $_POST["reason9"] : "";
    $campusLocation = $_POST["city"];
    $courseEnrolled = $_POST["courseEnrolled"];
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];
    $declaration = isset($_POST["declaration"]) ? "yes" : "no";
    $permission = isset($_POST["permission"]) ? "yes" : "no";
    $orientation_checklist= isset($_POST["checklist"]) ? "yes" : "no";

 $agentName = $_POST["agentName"];

    // Agent-related questions
    $q1_1 = $_POST["q11"];
    $q1_2 = $_POST["q12"];
    $q1_3 = $_POST["q13"];
    $q1_4 = $_POST["q14"];
    $q1_5 = $_POST["q15"];
    $q1_6 = $_POST["q16"];
    $q1_7 = $_POST["q17"];
    $q1_8 = $_POST["q18"];
    $q1_9 = $_POST["q19"];
    $q20 = $_POST["q20"];
    $comment1 = $_POST["comment1"];
    $comment2 = $_POST["comment2"];
    $currentDate = date("Y-m-d");



    // Prepare the SQL query
    $sql = "INSERT INTO tbl_student (Title, studentId, firstName, LastName, usiNo, docType, docNo, issueDate, expiryDate, issueCountry, currentAddress, suburb, state, postCode, email, mobile, emergencyContact, relationship, emergencyContactNo, permanentAddress, country, countryCode, qualifications, otherQualification, disability, disabilityType, medicalCondition, employementStatus, studyReasons, campusLocation, courseEnrolled, q1, q2, q3, q4, q5, q6, studentDeclaration,mediaPermission,orientationChecklist,agentName, q1_1, q1_2, q1_3, q1_4, q1_5, q1_6, q1_7, q1_8, q1_9, q10, agentinfo, service, form_date)
    VALUES ('$title', '$studentId', '$firstName', '$lastName', '$usiNo', '$docType', '$docNo', '$issueDate', '$expiryDate', '$issueCountry', '$currentAddress', '$suburb', '$state', '$postCode', '$email', '$mobile', '$emergencyContact', '$relationship', '$emergencyContactNo', '$permanentAddress', '$country', '$countryCode', '$qualifications', '$otherQualification', '$disability', '$disabilityType', '$medicalCondition', '$employmentStatus', '$studyReasons', '$campusLocation', '$courseEnrolled', '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$declaration','$permission','$orientation_checklist', '$agentName', '$q1_1', '$q1_2', '$q1_3', '$q1_4', '$q1_5', '$q1_6', '$q1_7', '$q1_8', '$q1_9', '$q20', '$comment1', '$comment2','$currentDate')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
     echo '<script>alert("Data saved successfully!");</script>';
    // Redirect to form.html
    echo '<script>window.location.href = "last_page.php";</script>';
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
