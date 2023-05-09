<!DOCTYPEhtml>
<html>

<head>   
    <title>VIT Marksheet</title>
    <style>
        form{
    font-size:18px;
    font-family:Arial,Helvetica,sans-serif;
    color:#555;
    width:70%;
    margin:0auto;
    display:flex;
    flex-wrap:wrap;
  }
  
  label{
    display:inline-block;
    width:30%;
    margin-right:5%;
    margin-bottom:10px;
    text-align:right;
  }
  
  input[type="text"] {
    width:40%;
    padding:12px;
    margin-bottom:10px;
    border:1pxsolid#ccc;
    border-radius:4px;
    box-sizing:border-box;
  }
  
  input[type="submit"] {
    background-color:#4CAF50;
    color:white;
    padding:12px20px;
    border:none;
    border-radius:4px;
    cursor:pointer;
  }
  
  input[type="submit"]:hover{
    background-color:#45a049;
  }

  body{
    margin:50px;
}

h1{
    display:flex;
    justify-content:center;
}
  
.sec1_2{
    display:flex;
    justify-content:space-around;
    padding:0px200px0px10px;
  }

.b1{
    font-size:20px;
}
  
table,td{
    border:1pxsolidblack;
}

.d2{
    justify-content:end;
    display:flex;
}

.sec1_1{
    display:flex;
    justify-content:space-between;
}

table{
  border-collapse:collapse;
  width:100%;
  margin-bottom:20px;
}

th,td{
  padding:12px15px;
  text-align:left;
  border:1pxsolid#ddd;
}

th{
  background-color:#f2f2f2;
}

tr:hover{
  background-color:#f5f5f5;
}

    </style>
   
    
</head>

<body>
    <center>
        

        <!-- <img src="/vit_logo.jpg" height="100"width="500"> -->
        <a href="C:\xampp\htdocs\vit_logo.jpg"><img src="C:\xampp\htdocs\vit_logo.jpg" /></a>
        <!-- <a href="#"><img src="https://drive.google.com/file/d/1JdII0GCV52EX0yDHac7eRTZ3o_q6ztZj/view?usp=share_link"height="100"width="500"></a> -->
    </center>
    <h1>Provisional Marksheet</h1>

    <divclass="sec1_2">
        <p>Bansilal Ramnath Agarwal Charitable Trust's <br>
            <bclass="b1">Vishwakarma Institute of Technology,Pune</b><br>
            (An Autonomous Institute affiliated to Savitribai Phule Pune University)
        </p>
    </div>
    <hr>

    <divclass="sec1_1">
        <div>
            <table>
                <tr>
                    <td>Name: Akash Daulat Bhagwat</td>
                </tr>
                <tr>
                    <td>PRN: 12120031</td>
                </tr>
                <tr>
                    <td>Mother's Name: Sunanda</td>
                </tr>
                <tr>
                    <td>Program: Bachelor of Technology</td>
                </tr>
                <tr>
                    <td>Branch: Computer Engineering</td>
                </tr>
                <tr>
                    <td>Class: TY</td>
                </tr>
                <tr>
                    <td>SEM: 1</td>
                </tr>
                <tr>
                    <td>Month and Year of Exam: May,2023</td>
                </tr>
            </table>
        </div>
        <div>
            <imgsrc="./assets/IMG_8336.JPG"height="150"width="150">
        </div>
    </div>
    <hr>
    <br>

    <?php
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="mytemp";

// Create connection
$conn=new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

$sql="SELECT*FROM Students";
$result=$conn->query($sql);

if ($result->num_rows>0) {
    echo"<table style='border-collapse: collapse; width: 100%;'>";
    echo"<tr><th>StudentRn</th>
    <th>StudentName</th><th>MSE_WT</th><th>MSE_DAA</th><th>MSE_OS</th><th>MSE_CC</th><th>ESE_WT</th><th>ESE_DAA</th><th>ESE_OS</th><th>ESE_CC</th><th>Result</th></tr>";

    // output data of each row
    while($row=$result->fetch_assoc()) {
        echo"<tr><td style='border: 1px solid black; padding: 10px;'>".$row["StudentRn"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["StudentName"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["MSE_WT"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["MSE_DAA"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["MSE_OS"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["MSE_CC"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["ESE_WT"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["ESE_DAA"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["ESE_OS"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["ESE_CC"]."</td><td style='border: 1px solid black; padding: 5px;'>".$row["Result"]."</td></tr>";
    }
    echo"</table>";
} else {
    echo"0 results";
}
$conn->close();
?>

<br>
<br>

    <h2>Grade Points:</h2>
    <divclass="sec1_2">
        <p>
            A+ : (Excellent / Outstanding): 10 <br>
            B+ : (Good): 8 <br>
            C+ : (Above Average): 6 <br>
            D : (Below Average): 4 <br>
            XX : (Detained): 0 <br>
            P : (Audit Course Passed): 0 <br>
        </p>

        <p>
            A : (Very Good): 9 <br>
            B : (Fair): 7 <br>
            C : (Average): 5 <br>
            F : (Fail): 0 <br>
            II : (Absent): 0 <br>
            NP : (Audit Course Not Passed): 0
        </p>
    </div>

    

    <divclass="d2">
        <imgsrc="./assets/sign.jpeg"height="100"width="100">
    </div>
    <h3class="d2">Controller of Examinations</h3>
</body>

</html>
