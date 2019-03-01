<?php include'link_head.php'; ?>
<?php include'tRegisterprocess.php'; ?>
<?php include'sRegisterprocess.php'; ?>
<?php include'noticedetailprocess.php'; ?> 
<?php include'..\speechProcess.php'; ?>
<?php include'..\speechProcess2.php'; ?>
<?php include'..\marqueeProcess.php'; ?>

<!DOCTYPE html>
<html>
    <style type="text/css">
        body{
            background-color: #e6f9ff;
        }
        .dean{
            max-width: 430px;
            max-height: 200px;
            float: left;
            clear: left;
            overflow: scroll ;
            overflow-x: hidden;
        }
        .container{
            background-color: #e6e6ff;
        }

        .footer{
            padding-top: 10px;
        }
        .speech{
            padding: 10px;
        }

        .header{
            background-color:#0066cc;
            font-family:Adamina;
            color:white;
            position:relative;
            width:100%;
            margin-top:-20px;
        }
        h1{
            font-size:35px;
            text-align:center;
        }
        .logo{
            float:left;
            margin:2px 10px 0px 2px;
        }
        .logotext-float{
            font-size:28px;
            font-family: 'Open Sans Condensed', sans-serif;
        }

        .clear{
            clear:left;
        }
        h2{
            margin-top:0px;
            margin-bottom:0px;
            padding:5px 0px 8px 0px;
            font-family:Adamina;
            text-align:center;
            background-color:#00e673;
            color:#000066;
        }
        ul li:hover{
            background:white;
            transition:linear all .40s;
            margin-left:10px;
            text-decoration:none;
        }

    </style>
    <body>

        <!-- Header -->
        <header class="header" >
            <img src="design/logo.png " height="150" width="120" alt="UU LOGO" class="logo">	  
            <h1> ONLINE NOTICE BOARD </h1>		
            <div class="logotext-float">
                <p><span style="">U<small>TTARA</small> U<small>NIVERSITY</small></span><br/><em>Quality Education At Affordable Tution</em></p>
            </div>	
            <div class="clear"></div>
        </header>

        <!--   navigation bar-->
        <section>   

            <nav class="my-nav navbar navbar-default" style="font-size: 16.5px;font-weight: bold;">
                <div class="container">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>                        
                            </button>
                        </div>			
                        <div class="collapse navbar-collapse" id="myNavbar" >
                            <ul class="nav navbar-nav" >
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="faculty.php">FACULTY</a></li>

                                <li><a href="tlogin.php">TEACHERS-NOTICE</a></li>

                                <li><a href="slogin.php">STUDENTS-NOTICE</a></li>

                                <li><a href="contactf.php">CONTACT</a></li>
                                <li><a href='https://www.uttarauniversity.edu.bd/' target="blank">UU HOME</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <section>
            <!-- Marquee message -->
            <table class="table ">
                <tbody>
                    <?php while ($row2 = mysqli_fetch_array($mresult)) { ?>
                    <marquee style="color:red;font-size:25px; " direction="left" onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll"> <?php echo $row2['marquee']; ?></marquee>
                <?php } ?>
                </tbody>
            </table>
        </section>
        <!-- writteen notices -->
        <section>
            <?php
            $db = mysqli_connect("localhost","root","","project");
            if (isset($_POST['submit1'])) {
                $date = $_POST['date'];
                $title = $_POST['title'];
                $about = $_POST['about'];
                $query = "INSERT INTO notice (date,title,about) VALUES ('$date','$title','$about')";
                mysqli_query($db, $query);
            }
            ?>

            <div class="container" style="">
                <h3>Visitors can leave their notices here...</h3>
                <form action="" method="POST"  >
                    <input type="hidden" name="id" value="">

                    <label >Date</label>
                    <input type="date" name="date" value="" class="form-control" >

                    <label >Notice Title:</label>
                    <input type="text" name="title" value="" class="form-control" >

                    <label >Write about your notice:</label>
                    <textarea type="text" name="about" value="" class="form-control" ></textarea>

                    <input type="submit" name="submit1" class="btn btn-primary" value="submit">
                    <button class="btn btn-danger">cancel</button>	
                </form>
            </div>
            <br><br>

            <div class="container">
                <h2>All Notices</h2>
                <table class="table table-hover" style="border: 2px solid #0066cc;border-radius: 5px;">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Notice Title </th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db = mysqli_connect("localhost","root","","project");
                        $sql2 = "SELECT title,about,date FROM notice";
                        $result_set2 = mysqli_query($db, $sql2);
                        while ($row2 = mysqli_fetch_array($result_set2)) {
                            ?>
                            <tr>	
                                <td><?php echo $row2['date'] ?></td>
                                <td><?php echo $row2['title'] ?></td>
                                <td style="overflow: scroll ;overflow-x: hidden;"><?php echo $row2['about'] ?></td>
                            </tr>
						    <?php
						}
						?>
                    </tbody>
                </table>
            </div>
        </section>
        <br><br>


        <!-- Notice files -->

        <section class="container" style="max-width: 100%; border: 2px solid #0066cc;border-radius: 5px;">
            <div  style="font-size: 18px;">
                <script type="text/javascript">$(document).ready(function () {
                        $('#myTable').DataTable();
                    });
                </script>
                <table border="1" cellpadding="0" class="table table-bordered table-hover" cellspacing="0" id="myTable" class="display" width="100%">
                    <h3 style="text-align: center;">Notice Files</h3>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Notice Files </th>
                            <th>View</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $db = mysqli_connect("localhost","root","","project");
                            $sql = "SELECT file,date FROM noticedetail ";
                            $result_set=mysqli_query($db,$sql);
                 
                            while($row=mysqli_fetch_array($result_set)){
                        ?>
                        <tr>	
                            <td><?php echo $row['date'] ?></td>
                            <td><?php echo $row['file'] ?></td>
                            <td ><button class="btn"><a href="document/<?php echo $row['file'] ?>" target="_blank" style="text-decoration: none;">View</a></button></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
        <br>
        <!-- Speceh -->
        <!-- <section class="container">	
            <div class="col-sm-3 col-md-6 col-lg-4" class="dean" style="-webkit-box-shadow: 2.5px 2.5px 10px 3px #0F0B0F;box-shadow: 2.5px 2.5px 10px 3px #0F0B0F;width:430px;">
                <h3 style="padding:8px;background-color:#0066cc;color: #ffff;">Message of Dean</h3>
                <p class="dean">

                <?php while ($row4 = mysqli_fetch_array($result3)) { ?>
                    <?php echo "<img height = '120px' width = '120px' float='left' src='design/" . $row4['image'] . "'>"; ?>
                        <?php echo $row4['description']; ?>
                    <?php } ?>
                </p>
            </div>


            <div class="col-sm-3 col-md-6 col-lg-4" class="dean" style="-webkit-box-shadow: 2.5px 2.5px 10px 3px #0F0B0F;box-shadow: 2.5px 2.5px 10px 3px #0F0B0F;width:430px;margin-left: 30px;">
                <h3 style="padding:8px;background-color:#0066cc;color: #ffff;">Message of Chairman</h3>
                <p class="dean" >
            <?php while ($row5 = mysqli_fetch_array($result4)) { ?>
                <?php echo "<img height = '120px' width = '120px' float='left' src='design/" . $row5['image'] . "'>"; ?>
                        <?php echo $row5['description']; ?>
                    <?php } ?>
                </p>
            </div>

        </section> -->

        <!-- Footer -->
        <br>
        <div class="footer">
<?php include'footer.php'; ?>
        </div>

    </body>
</html>