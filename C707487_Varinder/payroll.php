<html>

<head>
    <title>Payrol management system</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>

    <!-- Header -->
    <div id="header">

        <div class="top">

            <!-- Nav -->
            <nav id="nav">

                <ul>
                    <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
                    <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Add Employee</span></a></li>
                    <li><a href="#portfolioi" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Edit Employee</span></a></li>
                    <li><a href="#portfolioj" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Delete Employee</span></a></li>
                    <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-th">list</span></a></li>
                    <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Pay Slip</span></a></li>
                </ul>
            </nav>

        </div>

        <div class="bottom">

            <!-- Social Icons -->
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
            </ul>

        </div>

    </div>

    <!-- Main -->
    <div id="main">

        <!-- Intro -->
        <section id="top" class="one dark cover">
            <div class="container">

                <header>
                    <h2 class="alt"><strong>Payroll Management System</strong> <br /></h2>
                    
                </header>

             

            </div>
        </section>

        <!-- Portfolio -->
        <section id="portfolio" class="two">
            <div class="container">

                <header>
                    <h2>Insert</h2>
                </header>

                

                <div class="row">
                    <div class="4u 12u$(mobile)">
                        <article class="item">
                            <a href="insert.php" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                            <header>
                                <h3>Insert</h3>
                            </header>
                        </article>

                    </div>
                </div>

            </div>
        </section>


         <section id="portfolioi" class="two">
            <div class="container">

                <header>
                    <h2>Update</h2>
                </header>

               
                
                    <div class="4u$ 12u$(mobile)">
                        <article class="item">
                            <a href="edit1.php" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
                            <header>
                                <h3>Update</h3>
                            </header>
                        </article>

                    </div>

            </div>
        </section>



         <section id="portfolioj" class="two">
            <div class="container">

                <header>
                    <h2>Delete</h2>
                </header>

                
                <div class="row">
                    
                    <div class="4u 12u$(mobile)">
                        <article class="item">
                             <a href="delete1.php" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
                            <header>
                            <header>
                                <h3>Delete</h3>
                            </header>
                        </article>

                    </div>
                </div>

            </div>
        </section>

        <!-- About Me -->
        <section id="about" class="three">
            <div class="container">

                <header>
                    <h2>List</h2>
                </header>

                <p>List of all employees</p>
                <?php
//including the database connection file
include("connection.php");

 $result = mysqli_query($conn, "SELECT * FROM employee ORDER BY employee_id ASC"); // using mysqli_query instead
    //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        echo "<table><tr><th>ID</th><th>Name</th><th>E-mail</th><th>City</th><th>Join Date</th><th>Annual Basic Pay</th></tr>";
	while($res = mysqli_fetch_array($result)) { 		
        
        echo "<tr><td>" . $res["employee_id"]. "</td><td>" . $res["name"]. "</td><td> " . $res["email"]. "</td><td> " . $res["city"]. "</td><td> " . $res["join_date"]. "</td><td> " . $res["annual_basic_pay"]. "</td></tr>";
         }
        echo "</table>";
	// 	echo "<td>".$res['employee_id']."</td>"."&nbsp";
	// 	echo "<td>".$res['name']."</td>"."&nbsp";
	// 	echo "<td>".$res['email']."</td>"."<br>";	
	// 	echo "<td><a href=\"edit.php?employee_id=$res[employee_id]\">Edit</a> | <a href=\"delete.php?id=$res[employee_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	// }
	
?>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="four">
            <div class="container">

                <header>
                    <h2>Pay Slip</h2>
                </header>
                <?php
//including the database connection file
include("connection.php");

     $result = mysqli_query($conn, "SELECT * FROM employee ORDER BY employee_id ASC"); // using mysqli_query instead
   
        echo "<table><tr><th>ID</th><th>Name</th><th>E-mail</th><th>Join Date</th><th>Annual Basic Pay</th><th>Monthly Pay(after_tax)</th></tr>";
	while($res = mysqli_fetch_array($result)) { 		
        
        echo "<tr><td>" . $res["employee_id"]. "</td><td>" . $res["name"]. "</td><td> " . $res["email"]. "</td><td> " . $res["join_date"]. "</td><td> " . $res["annual_basic_pay"]. "</td><td> " . $res["pay_tax"]. "</td></tr>";
         }
        echo "</table>";

	
?>
 <a href="invoice.php?token=<?=base64_encode($datalist['employee_id'])?>&employee=<?=strtolower(str_replace(' ', '_', $datalist['name']))?>" class="btn btn-success" title="View / Export">Invoice</a>
                
            </div>
        </section>

    </div>

  

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollzer.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>

</body>

</html>