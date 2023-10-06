<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Crown Institute Forms</title>
    <link rel="stylesheet" type="text/css" href="../student/style/form_style.css">
    <style>
        /* Add any additional styles here */
    </style>
  
</head>
<div class="sidebar light-grey">
    
    <a href="home.php" class="w3-button">Home</a><br>
    <a href="form.php" class="w3-button">Form</a><br>
    <a href="logout.php" class="w3-button">Logout</a>
  </div>
<body  onload="showForm1()"
    style="background-image: url('logo/background.png'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-blend-mode: darken; background-position: center center; margin: 0; padding: 0;">

    <header>
        <a href="https://www.cihe.edu.au/">
            <img src="logo\logo1.png" alt="CIHE" width="80.9" height="70" style="flex-shrink: 0;">
            <span class="cihe">Crown Institute of Higher Education</span>
        </a>
        <nav>
            <button id="form1Btn" onclick="showForm('form1')">Personal Information</button>
            <button id="form2Btn" onclick="showForm('form2')">Permission Form</button>
            <button id="form3Btn" onclick="showForm('form3')">Orientation Checklist</button>
            <button id="form4Btn" onclick="showForm('form4')">Agent Performance</button>
            <span style=" color: white; font-size: 18px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hello, <?php echo $_SESSION['username']; ?>
        </nav>
</span>
  
    </header>

    <div class="content" id="formContainer">
        
        <!-- Form 1: Student Information -->
        <div id="form1" style="display: none;">
            <h3>Personal Information</h3>
            <form action="form_action.php" method="post">
                <label for="fname">Title (Mr/Ms/Mrs) </label>
                <input type="text" id="title" name="title" required placeholder="Your Name Title ..">
        
                <label for="fname">Student ID </label>
                <input type="text" id="studentId" name="studentId" required placeholder="Your Student ID ..">
        
                <label for="fname">First Name</label>
                <input type="text" id=" firstName" name=" firstName" required placeholder="Your name..">
        
                <label for="fname">Last Name</label>
                <input type="text" id="lastName" name="lastName" required placeholder="Your last name..">
        
                <label for="lname">USI Number</label><br>
                <input type="number" id="usiNumber" name="usiNumber" required placeholder="your USI Number.."><br>
                
                <label for="fname">Document Type</label>
                <input type="text" id="documentType" name="documentType" placeholder="Document Type..">

                
                <label for="fname">Document Number</label>
                <input type="text" id="documentNumber" name="docNumber" placeholder="Document number ..">

                <label for="fname">Issued Date</label>
                <input type="date" id="issueDate" name="issueDate" placeholder="Document Issued Date..">


                <label for="fname">Expiry Date</label>
                <input type="date" id="expiaryDate" name="expiaryDate" placeholder="Expiary Date..">


                <label for="country">Issued Country</label>
                <select id="issuedCountry" name="issuedCountry">
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                    <option value="USA">USA</option>
                    <option value="Nepal">Nepal</option>

                </select><br>

               <h3>Current Address Detail</h3>
                   
                        <label for="nPostalAddress">Postal Address</label>
                        <input type="text" id="nPostalAddress" name="postalAddress" placeholder="Your postal address .."
                            required>
        
                        <label for="Suburb">Suburb</label>
                        <input type="text" id="Suburb" name="Suburb" placeholder="Suburb .." required>
        
                        <label for="state">State</label>
                        <select id="state" name="state" required>
                            <option value="New South Wales">New South Wales</option>
                            <option value="Victoria">Victoria</option>
                            <option value="Queensland">Queensland</option>
                            <option value="Western Australia">Western Australia</option>
                            <option value="South Australia">South Australia</option>
                            <option value="Tasmania">Tasmania</option>
                            <option value="Northern Territory">Northern Territory</option>
                            <option value="Australian Capital Territory">Australian Capital Territory</option>
                        </select>
        
                        <label for="postalCode">Postal Code</label>
                        <input type="number" id="postalCode" name="postalCode" placeholder="Your postal code.." required>
        
                        <label for="emailAddress">Email Address</label>
                        <input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address.." required>
        
                        <label for="mobilenumber">Mobile Number</label>
                        <input type="number" id="mobilenumber" name="mobilenumber" placeholder="Your Mobile Number.." required>
        
                        <h3>Emergency Contact Person</h3>
        
                        <label for="emergencyFullName">Full Name</label>
                        <input type="text" id="emergencyFullName" name="emergencyFullName" placeholder="Full Name.." required>
        
                        <label for="relationshipToYou">Relationship To You</label>
                        <input type="text" id="relationshipToYou" name="relationshipToYou" placeholder="Relationship To You.."
                            required>


                        <label for="phoneNumber">Phone Number</label>
                        <input type="number" id="phoneNumber" name="phoneNumber" placeholder="Phone Number.." required>
        
                        <h3>Your Permanent Address (Home Country)</h3>
        
                        <label for="fullAddress">Full Address</label>
                        <input type="text" id="fullAddress" name="fullAddress" placeholder="Your full address address .."
                            required>
        
                        <label for="country">Country</label>
                        <select id="country" name="country" required>
                            <option value="Australia">Australia</option>
                            <option value="Canada">Canada</option>
                            <option value="USA">USA</option>
                             <option value="Nepal">Nepal</option>
                        </select>                   
        
                        <label for="countryCode">Country Code</label>
                        <input type="number" id="countryCode" name="countryCode" placeholder="Country Code.." required>
                        <br><br>

                        
                                <h2>Qualifications Form</h2>
                                             
                                <label>Select the qualifications you have completed</label><br>
                                <input type="checkbox" id="bachelor_degree" name="qu1" value="Bachelor Degree or Higher">
                                <label for="bachelor_degree">Bachelor Degree or Higher</label><br>
                                <input type="checkbox" id="diploma" name="qu2" value="Diploma /Associate Diploma">
                                <label for="diploma">Diploma / Associate Diploma</label><br>
                                <input type="checkbox" id="certificate_iii" name="qu3" value="Certificate III">
                                <label for="certificate_iii">Certificate III</label><br>
                               <input type="checkbox" id="none" name="none" value="None">

                                 <label for="none">None</label><br>
                                <!-- Add more checkboxes for other qualifications... -->
                
                                <br><br>
                                <label for="otherQualifications">Certificates other than the above:</label><br>
                                <textarea id="otherQualifications" name="otherQualifications" rows="4" cols="50"></textarea><br><br>
                
                                <h2>Disability and Medical Condition Form</h2>
                                <label name="disability">Do you have a disability, impairment, or long-term condition?</label><br>
                                <input type="radio" id="disability_yes" name="disability" value="yes">
                                <label for="disability_yes">Yes</label>
                                <input type="radio" id="disability_no" name="disability" value="no">
                                <label for="disability_no">No</label><br><br>
                
                                <label name="areas">If YES, please indicate areas of Disability, Impairment, or Long-Term
                                    Condition:</label><br>
                                <input type="checkbox" id="hearing" name="area1" value="Hearing/Deaf">
                                <label for="hearing">Hearing/Deaf</label><br>
                                <input type="checkbox" id="physical" name="area2" value="Physical">
                                <label for="physical">Physical</label><br>
                                <input type="checkbox" id="intellectual" name="area3" value="Intellectual">
                                <label for="intellectual">Intellectual</label><br>
                                <!-- Add more checkboxes for other areas... -->
                
                                <br>                               
                                <label for="medicalInfo">Please provide details of any medical condition:</label><br>
                                <textarea id="medicalInfo" name="medicalInfo" rows="4" cols="50"></textarea><br>
                
                                <h2>Employment</h2>
                                <label name="employmentStatus">Of the following categories, which BEST describes your current employment
                                    status?</label><br>
                                <input type="radio" id="full_time" name="employmentStatus" value="Full-time employee">
                                <label for="full_time">Full-time employee</label><br>
                
                                <input type="radio" id="part_time" name="employmentStatus" value="Part-time employee">
                                <label for="part_time">Part-time employee</label><br>
                
                                <input type="radio" id="employer" name="employmentStatus" value="Employer">
                                <label for="employer">Employer</label><br>
                
                                <input type="radio" id="self_employed" name="employmentStatus"
                                    value="Self employed-not employing others">
                                <label for="self_employed">Self-employed, not employing others</label><br>
                
                                <input type="radio" id="unemployed_full_time" name="employmentStatus"
                                    value="Unemployed-seeking full-time work">
                                <label for="unemployed_full_time">Unemployed-seeking full-time work</label><br>
                
                                <input type="radio" id="unpaid_worker" name="employmentStatus"
                                    value="Employed Unpaid worker in a family business">
                                <label for="unpaid_worker">Employed Unpaid worker in a family business</label><br>
                
                                <input type="radio" id="not_employed" name="employmentStatus"
                                    value="Not employed-not seeking employment">
                                <label for="not_employed">Not employed-not seeking employment</label><br>
                
                                <input type="radio" id="unemployed_part_time" name="employmentStatus"
                                    value="Unemployed -seeking part-time work">
                                <label for="unemployed_part_time">Unemployed -seeking part-time work</label><br><br>
               

                                <h2>Study Reason</h2>
                                <label name="reason">Which of the following categories BEST describes your main reason for undertaking
                                    this course?</label><br>
                                <input type="checkbox" id="get_job" name="reason1" value="To get a job">
                                <label for="get_job">To get a job</label><br>
                
                                <input type="checkbox" id="develop_business" name="reason2" value="To develop my existing business">
                                <label for="develop_business">To develop my existing business</label><br>
                
                                <input type="checkbox" id="start_business" name="reason3" value="To start my own business">
                                <label for="start_business">To start my own business</label><br>
                
                                <input type="checkbox" id="different_career" name="reason4" value="To try for a different career">
                                <label for="different_career">To try for a different career</label><br>
                
                                <input type="checkbox" id="better_job" name="reason5" value="To get a better job or promotion">
                                <label for="better_job">To get a better job or promotion</label><br>
                
                                <input type="checkbox" id="job_requirement" name="reason6" value="It was a requirement of my job">
                                <label for="job_requirement">It was a requirement of my job</label><br>
                
                                <input type="checkbox" id="extra_skills" name="reason7" value="I wanted extra skills for my job">
                                <label for="extra_skills">I wanted extra skills for my job</label><br>
                
                                <input type="checkbox" id="personal_interest" name="reason8"
                                    value="For personal interest / self-development">
                                <label for="personal_interest">For personal interest / self-development</label><br>
                
                                <input type="checkbox" id="other_reason" name="reason9" value="Other Reasons">
                                <label for="other_reason">Other Reasons</label><br><br>
   

                                <h3>Student Orientation / Induction Feedback </h3>

                                <p>Crown Institute of Higher Education is consistently examining its systems and processes to better improve the
                                  quality of our products and services. We appreciate the time that you have spent in completing this survey
                                  regarding your enrollment and induction experience. </p>
                            
                            
                                    <label for="country">Campus Location</label>
                                    <select id="country" name="city">
                                      <option value="australia">Canberra</option>
                                      <option value="canada">Sydney</option>
                            
                                    </select><br>
                            
                                    <label for="fname">Course Enrolled</label>
                                    <input type="text" id="fname" name="courseEnrolled" placeholder="Course Enrolled ..">
                            
                                    <p>SA - Strongly Agree; A – Agree; D – Disagree; SD - Strongly Disagree; NA - Not Applicable </p>
                                    <table>
                                      <tr>
                                        <th>Question</th>
                                        <th>SA</th>
                                        <th>A</th>
                                        <th>D</th>
                                        <th>SD</th>
                                        <th>NA</th>
                                      </tr>
                                      <tr>
                                        <td>1. Orientation Information was readily available and easy to understand.</td>
                                        <td><input type="radio" name="q1" value="SA"></td>
                                        <td><input type="radio" name="q1" value="A"></td>
                                        <td><input type="radio" name="q1" value="D"></td>
                                        <td><input type="radio" name="q1" value="SD"></td>
                                        <td><input type="radio" name="q1" value="NA"></td>
                                      </tr>
                                      <tr>
                                        <td>2. The enrolment process was efficient and easy to understand.</td>
                                        <td><input type="radio" name="q2" value="SA"></td>
                                        <td><input type="radio" name="q2" value="A"></td>
                                        <td><input type="radio" name="q2" value="D"></td>
                                        <td><input type="radio" name="q2" value="SD"></td>
                                        <td><input type="radio" name="q2" value="NA"></td>
                                      </tr>
                                      
                                      <tr>
                                        <td> 3. Credit Transfer and Advanced Standing opportunities were explained to me..</td>
                                        <td><input type="radio" name="q3" value="SA"></td>
                                        <td><input type="radio" name="q3" value="A"></td>
                                        <td><input type="radio" name="q3" value="D"></td>
                                        <td><input type="radio" name="q3" value="SD"></td>
                                        <td><input type="radio" name="q3" value="NA"></td>
                                      </tr>
                                      <tr>
                                        <td>4. I have been familiarised with CIHE's services & facilities</td>
                                        <td><input type="radio" name="q4" value="SA"></td>
                                        <td><input type="radio" name="q4" value="A"></td>
                                        <td><input type="radio" name="q4" value="D"></td>
                                        <td><input type="radio" name="q4" value="SD"></td>
                                        <td><input type="radio" name="q4" value="NA"></td>
                                      </tr>
                                      <tr><br><br>
                                        <td>5. I have been informed about the Refund Policy of CIHE. </td>
                                        <td><input type="radio" name="q5" value="SA"></td>
                                        <td><input type="radio" name="q5" value="A"></td>
                                        <td><input type="radio" name="q5" value="D"></td>
                                        <td><input type="radio" name="q5" value="SD"></td>
                                        <td><input type="radio" name="q5" value="NA"></td>
                                      </tr>
                                     
                                      <tr>
                                        <td>6. I am aware of how Fees and Charges are set.</td>
                                        <td><input type="radio" name="q6" value="SA"></td>
                                        <td><input type="radio" name="q6" value="A"></td>
                                        <td><input type="radio" name="q6" value="D"></td>
                                        <td><input type="radio" name="q6" value="SD"></td>
                                        <td><input type="radio" name="q6" value="NA"></td>
                                      </tr>
                            
                            
                                    </table>

                                    <h2>Student Declaration</h2>
                              <input type="checkbox" id="declaration" name="declaration" value="on">I declare that the information I have provided is true and correct to the best of my knowledge.<br>
             

                                    <button type="button"class="non-nav-button"  class="next" onclick="showForm('form2')">Next</button>
                                
            
        </div>

        <!-- Form 2: Permission Form -->
        <div id="form2" style="display: none;">
            <h3>Permission to use photographs, videos, feedback, and comments for promotional and educational purposes</h3>
              <p>I, student at Crown Institute of Higher Education (CIHE), allow CIHE, its affiliates and/or its staff members to register, record, store, and reproduce my name,
                    my photograph, my feedback, and my comments. This information can be used for educational, research, or promotional purposes. I am aware that while on campus and during assessments, I may be audio and video recorded for educational purposes and these recordings can be used for assessment and research purposes.</p>
               <p>By signing this form, I agree that:</p>
   <ul>
     <li>I have no claim to payments or royalties of any kind arising from the use of any photograph, video, feedback, or comment for CIHEs promotional purposes.</li>
     <li>I sign on the condition that any photographs, videos, comments/feedback, or work samples will not be used by any organization other than CIHE, without my express permission.</li>
     <li>I understand that my participation in this is completely voluntary and I have a choice to withdraw this consent at any time. I understand that this consent is for CIHE’s promotional and educational purposes only.</li>
   </ul>
  <input type="checkbox" id="permission" value="on" name="permission">





               <br><br>
               <button type="button"class="non-nav-button"onclick="showForm('form3')">Next</button>
            
        </div>

        <!-- Form 3: Orientation Checklist -->
        <div id="form3" style="display: none;">
            <h3>STUDENT ORIENTATION CHECKLIST</h3>
           
               
                <p> On the orientation day, CIHE Staff has explained the course information, and all relevant policies and procedures. A link to access the soft  copy  of  Student  Handbook  was  provided  to  me  during the Orientation Process. I am also aware of  that  an  updated  version  of  Student  Handbook can be downloaded 
 
                 from CIHE's website. 
                     </p>
                     <input type="checkbox" id="checklist" name="checklist"><h4 style="display: inline;">I am aware and understand CIHE's:</h4><br><br>

                    <label> Provisions for Language and Learning Support</label><br>
                     <label> Obligation to report changes of personal details</label><br>
                     <label> Policies on Deferment and Suspension of the Course</label><br>
                     <label> Course requirements including Attendance and Course Progress</label><br>
                     <label> Student Support Services</label><br>
                     <label> Policies and Procedures for Refund</label><br> 
                     <label> Provisions for Language and Learning Support</label><br>
                     <label> Policies and Procedures for Credit Transfers Policies on </label><br>
                     <label> Assessments</label><br>
                      <label>Provisions for Language and Learning Support</label><br>
                     <label> My own Rights and Responsibilities</label><br>
                     <label> Evacuation plan and systems in case of Emergencies, Fire and Accidents</label><br> 
                     <label>x Provisions for Language and Learning Support</label><br>
                     <label> Student Visa Conditions </label><br>
                     <label> Work Health and Safety Policies and Procedures </label><br>
                     <label> Policies on Access & Equity, Privacy,  Anti-discrimination, Student Wellbeing, Safety and Security </label><br>
                     <label> Policies on Course Transfer and Course Withdrawal  </label><br>
                     <label> Disciplinary Procedures including conditions in which Enrollment may be Terminated  </label><br>
                     <label> Policies and Procedures of making Complaint and Appeal</label><br>
                     <label> Sexual Harassment and Assault policy</label><br>
                     <label> Limitation on Outside Work</label><br>
                     <label> Critical Incident Management policy </label><br>
                     <label>Student Grievance Handling policy</label><br>
                     <label> Accessing the Student Handbook</label><br>
                     <label> Provisions for Language and Learning Support</label><br>
                     <label> Enrollment </label><br>
                     <label>English Language framework</label><br>
                    <label> Provisions for Language and Learning Support</label><br>
                     <label> Legal Services</label><br>
                     <label> Attendance + Engagement </label><br>
                     <label> Progression </label><br>
                     <label> Structure of CIHE  </label><br>
                     <label>  Misconduct </label><br>
                     <label> Kitchen + other facilities   </label><br><br>
                                 
               
                <button type="button"class="non-nav-button" onclick="showForm('form4')">Next</button>
            
        </div>

        <!-- Form 4: Agent Performance -->
        <div id="form4" style="display: none;">
            <h3>Student Survey on Agent Performance</h3>
               
                <label for="fname">Agent Name</label>
                <input type="text" id="fname" name="agentName" placeholder="Agent Name..">


                <p>TS : Totally Satisfied ; S : Satisfied; D : Dissatisfied; TD : Totally dissatisfied; NA : Not Applicable </p>
                
                    <table>
                        <tr>
                            <th>
                                Did your Agent provide you with information relating to?
                            </th>
                            <th>TS</th>
                            <th>S</th>
                            <th>D</th>
                            <th>TD</th>
                            <th>NA</th>
                        </tr>
                        <tr>
                            <td>1. Content of your course /course structure.</td>
                            <td><input type="radio" name="q11" value="TS"></td>
                            <td><input type="radio" name="q11" value="S"></td>
                            <td><input type="radio" name="q11" value="D"></td>
                            <td><input type="radio" name="q11" value="TD"></td>
                            <td><input type="radio" name="q11" value="NA"></td>
                        </tr>
                        <tr>
                            <td>2. Information about total cost of your course including costs associated with
                                textbooks, other learning resources, tools and equipments
                                .</td>
                            <td><input type="radio" name="q12" value="TS"></td>
                            <td><input type="radio" name="q12" value="S"></td>
                            <td><input type="radio" name="q12" value="D"></td>
                            <td><input type="radio" name="q12" value="TD"></td>
                            <td><input type="radio" name="q12" value="NA"></td>
                        </tr>
                        <tr>
                            <td>3.Assessment procedures of your course</td>
                            <td><input type="radio" name="q13" value="TS"></td>
                            <td><input type="radio" name="q13" value="S"></td>
                            <td><input type="radio" name="q13" value="D"></td>
                            <td><input type="radio" name="q13" value="TD"></td>
                            <td><input type="radio" name="q13" value="NA"></td>
                        </tr>
                        <tr>
                            <td>4. Attendance and Course Progress requirements of CIHE.</td>
                            <td><input type="radio" name="q14" value="TS"></td>
                            <td><input type="radio" name="q14" value="S"></td>
                            <td><input type="radio" name="q14" value="D"></td>
                            <td><input type="radio" name="q14" value="TD"></td>
                            <td><input type="radio" name="q14" value="NA"></td>
                        </tr>
                        <tr>
                            <td>5. Resources and services available at CIHE.</td>
                           <td><input type="radio" name="q15" value="TS"></td>
                            <td><input type="radio" name="q15" value="S"></td>
                            <td><input type="radio" name="q15" value="D"></td>
                            <td><input type="radio" name="q15" value="TD"></td>
                            <td><input type="radio" name="q15" value="NA"></td>
                        </tr>
                        <tr>
                            <td>6. Information about CIHE faculty and staff</td>
                            <td><input type="radio" name="q16" value="TS"></td>
                            <td><input type="radio" name="q16" value="S"></td>
                            <td><input type="radio" name="q16" value="D"></td>
                            <td><input type="radio" name="q16" value="TD"></td>
                            <td><input type="radio" name="q16" value="NA"></td>
                        </tr>
                        
                        
                        <tr>
                            <td>7. Access to welfare and counselling support available to you at CIHE</td>
                            <td><input type="radio" name="q17" value="TS"></td>
                            <td><input type="radio" name="q17" value="S"></td>
                            <td><input type="radio" name="q17" value="D"></td>
                            <td><input type="radio" name="q17" value="TD"></td>
                            <td><input type="radio" name="q17" value="NA"></td>
                        </tr>
                        <tr>
                            <td>8. Information about your rights and obligations at CIHE</td>
                            <td><input type="radio" name="q18" value="TS"></td>
                            <td><input type="radio" name="q18" value="S"></td>
                            <td><input type="radio" name="q18" value="D"></td>
                            <td><input type="radio" name="q18" value="TD"></td>
                            <td><input type="radio" name="q18" value="NA"></td>
                        </tr>
                        <tr>
                            <td>9. Options for accommodation and estimated costs of living in Sydney / Canberra</td>
                            <td><input type="radio" name="q19" value="TS"></td>
                            <td><input type="radio" name="q19" value="S"></td>
                            <td><input type="radio" name="q19" value="D"></td>
                            <td><input type="radio" name="q19" value="TD"></td>
                            <td><input type="radio" name="q19" value="NA"></td>
                        </tr>
                        
                        <tr>
                            <td>10. Information about laws and regulations related to international students</td>
                            <td><input type="radio" name="q20" value="TS"></td>
                            <td><input type="radio" name="q20" value="S"></td>
                            <td><input type="radio" name="q20" value="D"></td>
                            <td><input type="radio" name="q20" value="TD"></td>
                            <td><input type="radio" name="q20" value="NA"></td>
                        </tr>


                    </table>
                    <p> Has your agent provided any misleading /false information to you?
                        (YES/NO) Any comments.
                    </p>
                    <textarea id="comments" name="comment1" rows="2" cols="50"></textarea><br>

                    <p>Are you happy with overall service provided by your agent? (YES/NO) Any comments</p>
                    <textarea id="comments" name="comment2" rows="2" cols="50"></textarea><br><br>

                    <input type="submit" class="" name="submit" value="submit">

            </form>
        </div>

    </div>

    <script>
        // JavaScript function to show the selected form and update button styles
        function showForm(formName) {
            const formContainer = document.getElementById("formContainer");
            const forms = formContainer.getElementsByTagName("div");
            const buttons = document.getElementsByTagName("button");
    
            for (let i = 0; i < forms.length; i++) {
                if (forms[i].id === formName) {
                    forms[i].style.display = "block";
                    buttons[i].classList.add("active-button");
                } else {
                    forms[i].style.display = "none";
                    buttons[i].classList.remove("active-button");
                }
            }
        }
    
        function showForm1() {
            document.getElementById('form1').style.display = 'block';
            document.getElementById('form2').style.display = 'none';
            document.getElementById('form3').style.display = 'none';
            document.getElementById('form4').style.display = 'none';
           
        }
    
        var nonNavButtons = document.getElementsByClassName('non-nav-button');
        for (var i = 0; i < nonNavButtons.length; i++) {
            nonNavButtons[i].style.backgroundColor = '#ff5733'; // Change to your desired color
        }
    
        document.documentElement.scrollTop = 0;
    </script>
    

    <div class="footer">
        <div class="footer-text">
            Crown Institute Of Higher Education<br>University &copy;<br> 2023 - Australia
        </div>
    </div>

</body>

</html>
