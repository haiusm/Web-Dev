<?php
echo "<hr />";
echo "<h2>1. SIMPLE VARIABLE</h2>";
echo "<hr />";

$person_no=999;
$emp_name="Terrence BeNu";
$father_name="Alex J.P.";
$education="B.A.";
$sallary=2450.244;
$married=True;

echo "Person No: " . $person_no . "<br />";
echo "Employee Name: " . $emp_name . "<br />";
echo "Father's Name: " . $father_name . "<br />";
echo "Education: " . $education . "<br />";
echo "Sallary: " . $sallary . "<br />";
echo "Married: " . $married . " >> (Yes: 1 | No: 0)" . "<br />";

echo "<hr />";
echo "<h2>2. ARRAYS </h2>";
echo "<hr />";

echo "<h2>2.1. INDEXD ARRAY </h2>";
echo "<hr width='300px' align='left' />";

$student1=array(1000,"J. M. Mark","Tim K","1st","A");
echo "Student ID: " . $student1[0] . "<br />";
echo "Student Name: " . $student1[1]."<br />";
echo "Father's Name: " . $student1[2]."<br />";
echo "Class: " . $student1[3]."<br />";
echo "Grade: " . $student1[4]."<br />";

$student2[0]=1001;
$student2[1]="Walker V. Bonner";
$student2[2]="Ethan I. Lowe";
$student2[3]="2nd";
$student2[4]="B";

echo "<hr width='100px' align='left' />";

echo "Student ID: " . $student2[0] . "<br />";
echo "Student Name: " . $student2[1]."<br />";
echo "Father's Name: " . $student2[2]."<br />";
echo "Class: " . $student2[3]."<br />";
echo "Grade: " . $student2[4]."<br />";

echo "<hr width='300px' align='left' />";
echo "<h2>2.2. ASSOCIATIVE ARRAY </h2>";

echo "<hr width='300px' align='left' />";

$student3=array(
    "roll_no" => 1002,
    "student_name" => "Elizabeth Mccullough",
    "father_name" => "Jason O. Harris",
    "class" => "3rd",
    "grade" => "C"
);

echo "Roll No: " . $student3["roll_no"] . "<br />";
echo "Student Name: " . $student3["student_name"] . "<br />";
echo "Father's Name: " . $student3["father_name"] . "<br />";
echo "Class: " . $student3["class"] . "<br />";
echo "Grade: " . $student3["grade"] . "<br />";

echo "<hr width='100px' align='left' />";

$student4["roll_no"]=1003;
$student4["student_name"]="Cheryl F. Young";
$student4["father_name"]="Kerry F. Murray";
$student4["class"]="4th";
$student4["grade"]="D";

echo "Roll No: " . $student4["roll_no"] . "<br />";
echo "Student Name: " . $student4["student_name"] . "<br />";
echo "Father's Name: " . $student4["father_name"] . "<br />";
echo "Class: " . $student4["class"] . "<br />";
echo "Grade: " . $student4["grade"] . "<br />";

echo "<hr width='300px' align='left' />";
echo "<h2>2.3. MULTIDIMENSIONAL ARRAY </h2>";
echo "<hr width='300px' align='left' />";
echo "<h2>2.3.1. <u>Indexed Multidimensional Array</u></h2>";

$student5=array(
    array(1004,"Nehru Mcfadden","Raphael H. Dennis","5th","E"),
    array(1005,"Cade Leon","Zeph R. Berger","6th","F"),
    array(1006,"Francesca Y. Burt","Hector J. Stone","7th","G"),
    array(1007,"Cairo Z. Wilder","Eugenia Small","8th","H"),
    array(1008,"Xavier Ochoa","Jordan Sheppard","9th","I")
);

echo "Roll No: " . $student5[0][0] . "<br />";
echo "Student Name: " . $student5[0][1] . "<br />";
echo "Father's Name: " . $student5[0][2] . "<br />";
echo "Class: " . $student5[0][3] . "<br />";
echo "Grade: " . $student5[0][4] . "<br />";

echo "<hr width='100px' align='left' />";

echo "Roll No: " . $student5[1][0] . "<br />";
echo "Student Name: " . $student5[1][1] . "<br />";
echo "Father's Name: " . $student5[1][2] . "<br />";
echo "Class: " . $student5[1][3] . "<br />";
echo "Grade: " . $student5[1][4] . "<br />";

echo "<hr width='100px' align='left' />";

echo "Roll No: " . $student5[2][0] . "<br />";
echo "Student Name: " . $student5[2][1] . "<br />";
echo "Father's Name: " . $student5[2][2] . "<br />";
echo "Class: " . $student5[2][3] . "<br />";
echo "Grade: " . $student5[2][4] . "<br />";

echo "<hr width='100px' align='left' />";

echo "Roll No: " . $student5[3][0] . "<br />";
echo "Student Name: " . $student5[3][1] . "<br />";
echo "Father's Name: " . $student5[3][2] . "<br />";
echo "Class: " . $student5[3][3] . "<br />";
echo "Grade: " . $student5[3][4] . "<br />";

echo "<hr width='100px' align='left' />";

echo "Roll No: " . $student5[4][0] . "<br />";
echo "Student Name: " . $student5[4][1] . "<br />";
echo "Father's Name: " . $student5[4][2] . "<br />";
echo "Class: " . $student5[4][3] . "<br />";
echo "Grade: " . $student5[4][4] . "<br />";

echo "<hr width='300px' align='left' />";
echo "<h2>2.3.2. <u>Associative Multidimensional Array</u></h2>";

$student6=array(
    "student61" => array(
        "roll_no" => 1009,
        "student_name" => "Ivan Donovan",
        "father_name" => "Jelani Holman",
        "class" => "10th",
        "grade" => "J"
    ),

    "student62" => array(
        "roll_no" => 1010,
        "student_name" => "Breanna M. Middleton",
        "father_name" => "Cathleen Franklin",
        "class" => "11th",
        "grade" => "K"
    ),

    "student63" => array(
        "roll_no" => 1011,
        "student_name" => "Erin S. Oliver",
        "father_name" => "Hilel Gates",
        "class" => "12th",
        "grade" => "L"
    ),
            
    "student64" => array(
        "roll_no" => 1012,
        "student_name" => "Kerry J. Farley",
        "father_name" => "Nita V. Morton",
        "class" => "13th",
        "grade" => "M"
    ),
    
    "student65" => array(
        "roll_no" => 1013,
        "student_name" => "Quintessa H. Richmond",
        "father_name" => "Addison Schultz",
        "class" => "14th",
        "grade" => "N"
    )
            
);

echo "Roll No: " . $student6["student61"]["roll_no"] . "<br />";
echo "Student Name: " . $student6["student61"]["student_name"] . "<br />";
echo "Father Name: " . $student6["student61"]["father_name"] . "<br />";
echo "Class: " . $student6["student61"]["class"] . "<br />";
echo "Grade: " . $student6["student61"]["grade"] . "<br />";

echo "<hr width='100px' align='left' />";

echo "Roll No: " . $student6["student62"]["roll_no"] . "<br />";
echo "Student Name: " . $student6["student62"]["student_name"] . "<br />";
echo "Father Name: " . $student6["student62"]["father_name"] . "<br />";
echo "Class: " . $student6["student62"]["class"] . "<br />";
echo "Grade: " . $student6["student62"]["grade"] . "<br />";

echo "<hr width='100px' align='left' />";

echo "Roll No: " . $student6["student63"]["roll_no"] . "<br />";
echo "Student Name: " . $student6["student63"]["student_name"] . "<br />";
echo "Father Name: " . $student6["student63"]["father_name"] . "<br />";
echo "Class: " . $student6["student63"]["class"] . "<br />";
echo "Grade: " . $student6["student63"]["grade"] . "<br />";

echo "<hr width='100px' align='left' />";

echo "Roll No: " . $student6["student64"]["roll_no"] . "<br />";
echo "Student Name: " . $student6["student64"]["student_name"] . "<br />";
echo "Father Name: " . $student6["student64"]["father_name"] . "<br />";
echo "Class: " . $student6["student64"]["class"] . "<br />";
echo "Grade: " . $student6["student64"]["grade"] . "<br />";

echo "<hr width='100px' align='left' />";

echo "Roll No: " . $student6["student65"]["roll_no"] . "<br />";
echo "Student Name: " . $student6["student65"]["student_name"] . "<br />";
echo "Father Name: " . $student6["student65"]["father_name"] . "<br />";
echo "Class: " . $student6["student65"]["class"] . "<br />";
echo "Grade: " . $student6["student65"]["grade"] . "<br />";

echo "<hr />";
?>
