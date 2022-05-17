<?php
    $con = mysqli_connect("localhost","root","","petsonthenet");

?>
<section id="feature" class="six">
						<div class="container">

							<header>
								<h2>Feature</h2>
							</header>
                            
							<p>Graphical reports</p>


                                <head>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                        google.charts.load('current', {'packages':['corechart']});
                                        google.charts.setOnLoadCallback(drawChart1);
                                        google.charts.setOnLoadCallback(drawChart2);
                                        google.charts.setOnLoadCallback(drawChart3);
                                        google.charts.setOnLoadCallback(drawChart4);
                                        google.charts.setOnLoadCallback(drawChart5);
                                        google.charts.setOnLoadCallback(drawChart6);
                                    // call library draw chart

                                    // draw chart for 
                                        function drawChart1() {
                                            var data1 = google.visualization.arrayToDataTable([
                                            ['name', 'order_volume'],
                                            <?php
                                            $sql = "SELECT * FROM user";
                                            $fire = mysqli_query($con,$sql);
                                            while ($result = mysqli_fetch_assoc($fire)) {
                                                echo"['".$result['name']."',".$result['order_volume']."],";
                                                }
                                            ?>
                                            ]);
                                            var options1 = {
                                                title: 'Customers and their number of orders'
                                                };
                                            var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));
                                            chart1.draw(data1, options1);
                                        }
                                            
                                    // draw chart for
                                        function drawChart2() {
                                            var data2 = google.visualization.arrayToDataTable([
                                                ['name', 'money_spent'],
                                                <?php
                                                    $sql = "SELECT * FROM user ";
                                                    $fire = mysqli_query($con,$sql);
                                                    while ($result = mysqli_fetch_assoc($fire)) {
                                                        echo"['".$result['name']."',".$result['money_spent']."],";
                                                        }
                                                ?>
                                            ]);
                                            var options2 = {
                                                title: 'Customers and their expenses'
                                                };
                                        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
                                        chart2.draw(data2, options2);
                                        }
                                        

                                        // draw chart for
                                        function drawChart3() {
                                            var data3 = google.visualization.arrayToDataTable([
                                                ['breed', 'number_sold'],
                                                <?php
                                                    $sql = "SELECT * FROM pet_info WHERE species LIKE 'dog' ";
                                                    $fire = mysqli_query($con,$sql);
                                                    while ($result = mysqli_fetch_assoc($fire)) {
                                                        echo"['".$result['breed']."',".$result['number_sold']."],";
                                                        }
                                                ?>
                                            ]);
                                            var options3 = {
                                                title: 'Name and number of dogs sold'
                                                };
                                            var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));
                                            chart3.draw(data3, options3);
                                            }


                                            // draw chart for
                                            function drawChart4() {
                                            var data4 = google.visualization.arrayToDataTable([
                                                ['breed', 'number_sold'],
                                                <?php
                                                    $sql = "SELECT * FROM pet_info WHERE species LIKE 'cat'";
                                                    $fire = mysqli_query($con,$sql);
                                                    while ($result = mysqli_fetch_assoc($fire)) {
                                                        echo"['".$result['breed']."',".$result['number_sold']."],";
                                                        }
                                                ?>
                                            ]);
                                            var options4 = {
                                                title: 'Name and number of cats sold'
                                                };
                                            var chart4 = new google.visualization.PieChart(document.getElementById('piechart4'));
                                            chart4.draw(data4, options4);
                                            }


                                            // draw chart for
                                            function drawChart5() {
                                            var data5 = google.visualization.arrayToDataTable([
                                                ['breed', 'price'],
                                                <?php
                                                    $sql = "SELECT * FROM pet_info WHERE species LIKE 'dog' ";
                                                    $fire = mysqli_query($con,$sql);
                                                    while ($result = mysqli_fetch_assoc($fire)) {
                                                        echo"['".$result['breed']."',".$result['price']."],";
                                                        }
                                                ?>
                                            ]);
                                            var options5 = {
                                                title: 'Pricing structure of dog breed in the shop'
                                                };
                                            var chart5 = new google.visualization.PieChart(document.getElementById('piechart5'));
                                            chart5.draw(data5, options5);
                                            }
                                            

                                            // draw chart for
                                            function drawChart6() {
                                            var data6 = google.visualization.arrayToDataTable([
                                                ['breed', 'price'],
                                                <?php
                                                    $sql = "SELECT * FROM pet_info WHERE species LIKE 'cat' ";
                                                    $fire = mysqli_query($con,$sql);
                                                    while ($result = mysqli_fetch_assoc($fire)) {
                                                        echo"['".$result['breed']."',".$result['price']."],";
                                                        }
                                                ?>
                                            ]);
                                            var options6 = {
                                                title: 'Pricing structure of cat breed in the shop'
                                                };
                                            var chart6 = new google.visualization.PieChart(document.getElementById('piechart6'));
                                            chart6.draw(data6, options6);
                                            }
                                    </script>
                                </head>
                                    <body>
                                    <!--Table and divs that hold the pie charts-->
                                                <div style="display: flex; flex-direction: column">
                                                    <div style="display:flex">
                                                        <td><div id="piechart1" style="width: 500px"></div></td>                                                                                       
                                                        <td><div id="piechart2" style="width: 500px"></div></td>
                                                    </div>
                                                    <div style="display:flex">
                                                        <td><div id="piechart3" style="width: 500px"></div></td>                                                                                     
                                                        <td><div id="piechart4" style="width: 500px"></div></td>                                                                                           
                                                    </div>
                                                    <div style="display:flex">
                                                        <td><div id="piechart5" style="width: 500px"></div></td>                                                                               
                                                        <td><div id="piechart6" style="width: 500px"></div></td>                                                                                  
                                                    </div>
                                                    
                                                </div>
                                    </body>
                                
                                   
						    </div>
</section>

<section class="seven">
    <head>
        <title>Reports in PHP</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <div class="container">
            <div class="wrapper">
                <h1>Reports in PHP</h1>
            </div>
        <br>
            <div class = 'data'>   
                <form method='post'>
                    <select name = "name" class = "Select1"
                    style = "width: 100px;
                            height: 50px;
                            float: left;
                            position: relative;
                            margin-left: 0px;
                            margin-top: 15px">
                        <option>Select</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                    <select name = "name" class = "Select2"
                    style = "width: 100px;
                            height: 50px;
                            float: left;
                            position: relative;
                            margin-left: 35px;
                            margin-top: 15px"> 
                        <option>Select</option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>

                    </select>
                    <input type = "submit" name = "Submit1" class = "Submit"
                    style = "margin-left: 155px;
                            float: left;"/>

            </div>
        </div>
    </body>
</section>