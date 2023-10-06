<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Lookup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            background-image: url('background.png'); /* Add your background image URL */
            background-size: cover;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Center vertically */
            padding: 20px;
            background-color: navy;
            color: #fff;
        }

        .logo {
            max-width: 100px;
            margin: 0 auto; /* Center horizontally */
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Decrease opacity */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            position: relative;
        }

        .welcome-message {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .student-request {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
        }

        .action-button {
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 10px;
        }

        .approve-button {
            background-color: green;
            color: #fff;
        }

        .contact-button {
            background-color: red;
            color: #fff;
        }

        .logout-button {
            background-color: navy;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .footer {
            background-color: navy;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            width: 100%; /* Span the full width */
            bottom: 0; /* Position at the bottom */
        }

        .notification {
            position: fixed;
            top: 10px;
            right: 10px;
            background-color: lightgreen;
            color: #fff;
            padding: 10px;
            border-radius: 3px;
            opacity: 0.9;
            display: none;
        }

        .lookup-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .results {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .student {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .completed {
            color: green;
        }

        .not-completed {
            color: red;
        }

        .footer {
            background-color: navy;
            color: #fff;
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="header">
        <button class="home-button" onclick="goToHomePage()">Home</button>
        <img src="logo1.png" alt="Logo" class="logo">
        <button class="logout-button-top" onclick="logout()">Logout</button>
    </div>

    <div class="content">
        <div class="lookup-form">
            <h2>Student Lookup</h2>
            <form id="lookup-form" method="post" action="search_students.php">
                <label for="search-method">Search by:</label>
                <select id="search-method" name="search-method">
                    <option value="fname">First Name</option>
                    <option value="lname">Last Name</option>
                    <option value="studentid">Student ID</option>
                    <option value="location">Campus Location</option>
                    <option value="intake">Intake Date</option>
                </select>
                <input type="text" id="search-input" name="search-input" placeholder="Enter search term">
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="results">
            <!-- PHP will populate the results here -->
            <?php include 'search_students.php'; ?>
        </div>
    </div>

    <div class="footer">
        &copy; CIHE. All rights reserved.
    </div>

    <script>
        // Replace this with your actual student data
        const studentData = [
            { id: '12345', fname: 'John', lname: 'Doe', location: 'Sydney', intake: '2023-08-15', orientationCompleted: true },
            { id: '67890', fname: 'Jane', lname: 'Smith', location: 'Canberra', intake: '2023-09-05', orientationCompleted: false },
            // Add more student data entries as needed
        ];

        // Function to perform student lookup
        function lookupStudents() {
            const searchMethod = document.getElementById('search-method').value;
            const searchTerm = document.getElementById('search-input').value.toLowerCase();
            const resultsContainer = document.getElementById('results');
            resultsContainer.innerHTML = ''; // Clear previous results

            // Filter student data based on search criteria
            const filteredStudents = studentData.filter(student => {
                switch (searchMethod) {
                    case 'fname':
                        return student.fname.toLowerCase().includes(searchTerm);
                    case 'lname':
                        return student.lname.toLowerCase().includes(searchTerm);
                    case 'studentid':
                        return student.id === searchTerm;
                    case 'location':
                        return student.location.toLowerCase().includes(searchTerm);
                    case 'intake':
                        return student.intake.includes(searchTerm);
                    default:
                        return true; // Show all if no criteria specified
                }
            });

            if (filteredStudents.length === 0) {
                resultsContainer.innerHTML = '<p>No matching records found.</p>';
            } else {
                filteredStudents.forEach(student => {
                    const studentElement = document.createElement('div');
                    studentElement.classList.add('student');
                    const orientationStatus = student.orientationCompleted ? 'Completed' : 'Not Completed';
                    const orientationClass = student.orientationCompleted ? 'completed' : 'not-completed';
                    studentElement.innerHTML = `
                        <p>Student ID: ${student.id}</p>
                        <p>First Name: ${student.fname}</p>
                        <p>Last Name: ${student.lname}</p>
                        <p>Campus Location: ${student.location}</p>
                        <p>Intake Date: ${student.intake}</p>
                        <p>Orientation Status: <span class="${orientationClass}">${orientationStatus}</span></p>
                    `;
                    resultsContainer.appendChild(studentElement);
                });
            }
        }

        // Function to handle logout
        function logout() {
            // Redirect to logout page or perform logout action
            window.location.href = "../student/logout.php";
        }

        // Function to navigate to the admin homepage
        function goToHomePage() {
            // Redirect to the admin homepage
            window.location.href = "admin_homepage.php";
        }
    </script>
</body>
</html>