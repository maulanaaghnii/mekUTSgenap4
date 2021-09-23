<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>



<?php
// Create database connection using config file
include_once("config.php");
 

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>A11.2019.12028</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style type="text/css">
.header {
  padding: 15px;
  
  text-align: center;
  background: #292F33;
  color: white;
  font-size: 10px;
}




.tengah{
  width: 100%;
  margin: 15px;
  border: 2px solid #292F33;
  border-radius: 10px;
 /* padding-top: 30px solid white; */
  background-color: white;
}

body{

    background-image: url("images/back1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;    
    background-size: 100% 100%;
    padding-bottom: 100px;
} 




.columnkiri{

    width: 100%;
    margin: 15px;
    border-radius: 10px;
    padding-left: 20px; 
    width: 100%;

}   
.searchbar{

    width: 100%;
    margin: 15px;
    border-radius: 10px;



}


h1{
    text-align: center;
    padding-top: 15px;

}

.contentkotak{
    border-radius: 10px;
    background-color: #cc9900;
    margin: auto;

    padding-top: 10px; 
    padding-bottom: 15px;
    padding-right: 7px;
    padding-left: 10px;
    border: 3px solid #343a40;

}
.contentkotak-dark{
    border-radius: 10px;
    background-color: #343a40;
    margin: auto;
    padding-top: 10px; 
    padding-bottom: 15px;
    padding-right: 10px;
    padding-left: 10px;

}
.contentkotak-logout{
    border-radius: 10px;
    background-color: #343a40;
    opacity: 90%;
    margin: auto;
    padding-top: 10px; 
    padding-bottom: 15px;
    padding-right: 10px;
    padding-left: 10px;

}
.jarak{
    background-color: white;
    padding-top: 5px;

}



</style>
<body>

<div class="header">

    <table align="center">
        <tr>
            <td><img src="images/golden-crown.png" width="200px"></td>
            <td>  <!-- <h1 style="color: white">Lecturer List </h1>
  <p style="color: white">DIAN NUSWANTORO UNIVERSITY</p> --></td>
        </tr>
    </table>

    

</div>

<div class="container">
  <div class="row">
    <!-- Column small 4 start -->
    <div class="col-sm-4" >
        <div class="columnkiri">

            <div class="container">
                
                <div class="contentkotak">
                                    <p><h2 style="color: white">Click  to  Input  Data  <button type="button" class="btn btn-light" data-toggle="modal" data-target="#addModals">
                            <i class="material-icons" style="font-size:20px">add</i>
                          </button></h2> </p>
                    

                </div>
                <br>
                <div class="contentkotak-dark">
                    <h2 style="color: white; text-align: center;">Schedule</h2>
                                   
                      <table class="table table-dark table-hover">
                        <thead>
                          <tr align="center">
                            <td><strong>Day</strong></td>
                            <td><strong>Hours</strong></td>
                       
                          </tr>
                        </thead>
                        <tbody align="center">
                          <tr>
                            <td>MON</td>
                            <td>08:00 - 15:00 WIB</td>
                          
                          </tr>
                          <tr>
                            <td>TUE</td>
                            <td>08:00 - 15:00 WIB</td>
                            
                          </tr>
                          <tr>
                            <td>WED</td>
                            <td>08:00 - 15:00 WIB</td>
                       
                          </tr>
                          <tr>
                            <td>THU</td>
                            <td>08:00 - 15:00 WIB</td>
                          
                          </tr>
                          <tr>
                            <td>FRI</td>
                            <td>08:00 - 12:00 WIB</td>
                            
                          </tr>
                          <tr>
                            <td>SAT</td>
                            <td>08:00 - 12:00 WIB</td>
                       
                          </tr>
                          <tr>
                            <td>SUN</td>
                            <td>-</td>
                       
                          </tr>                                                      
                        </tbody>
                      </table>
                    
                </div>
                <br>

                <div class="contentkotak-logout">
                  <table align="center">
                    <tr>
                      <td>
                        <a href="logout.php" ><button type="button" class="btn btn-danger">Logout</button></a>
                      </td>
                    </tr>
                  </table>
                  
                  
                </div>


                         
            </div>
           





        </div>




    </div>
    <!-- Column small 4 end -->
        


    <!-- Column small 8 start -->
    <div class="col-sm-8">
        


        <div class="searchbar">
           

                <table align="center">
                    <tr>
                        
                        <td width="500px"><input class="form-control" id="myInput" type="text"  placeholder="Find data on table ..." style="border: 1px solid #343a40;" ></td>
                        <td><p>  </p></td>
                        <td><i class="fa fa-search" style="font-size: 25px; color:#343a40"></i></td>
                    </tr>
                </table>



            
        </div>


            <div class="tengah">



                        
                        <br>
                        <!-- Tambah tamu [Modal] -->
                        <div class="container">
                         <!-- Button to Open the Modal -->


                          <!-- The Modal -->
                          <div class="modal fade" id="addModals">
                            <div class="modal-dialog">
                              <div class="modal-content">
                              
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Add Data</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body Start-->
                                <div class="modal-body">
                                


                                        <form action="add.php" method="post" name="form1">
                                                <div class="form-group">
                                                  <label for="npp"><strong> Nomor HP :</strong></label>
                                                  <input type="text" class="form-control" id="npp" placeholder="Insert Phone Number " name="kontak_tamu">
                                                </div>
                                                <div class="form-group">
                                                  <label for="nama"><strong>NAME :</strong></label>
                                                  <input type="text" class="form-control" id="nama" placeholder="Insert Full Name" name="nama_tamu">
                                                </div>
                                                <div class="form-group">
                                                  <label for="matkul"><strong>Kunjungan Kamar:</strong></label>
                                                  <input type="text" class="form-control" id="matkul" placeholder="Insert Subject" name="no_kamar">
                                                </div>   
                                                <br><br>
                                                <div class="modal-footer">
                                                    <br>
                                                    <br>
                                                    <button type="submit" class="btn btn-success" name="Submit"><i class="fa fa-user-plus" style="font-size:25px;color:white"></i></button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-ban" style="font-size:25px;color:white"></i></button>                                
                                                </div>                                                
                                        </form>

                                    
                            <?php
                         
                            // Check If form submitted, insert form data into users table.
                            if(isset($_POST['Submit'])) {
                                $kontak_tamu = $_POST['kontak_tamu'];
                                $nama_tamu = $_POST['nama_tamu'];
                                $no_kamar = $_POST['no_kamar'];
                                
                                // include database connection file
                                include_once("config.php");
                                        
                                // Insert user data into table
                                $result = mysqli_query($mysqli, "INSERT INTO users(kontak_tamu,nama_tamu,no_kamar) VALUES('$kontak_tamu','$nama_tamu','$no_kamar')");
                                header("Location: index.php");
                            }
                            ?>

                                  
                                </div>
                                <!-- Modal body End -->
                                

                                
                              </div>
                            </div>
                          </div>
                        </div>




                        
                        <!-- Tabel tamu -->
                        <div class="container">
                         
                            <table class="table table-hover" width="100%" >
                                <thead style="background-color:  #292F33; color: white;">
                                    <tr>
                                    <th>Nomor Hp</th> 
                                    <th>Nama Lengkap</th> 
                                    <th>Kamar Kunjungan</th> 
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    

                                    <?php  
                                    while($user_data = mysqli_fetch_array($result)) {         
                                        echo "<tr>";
                                        echo "<td>".$user_data['kontak_tamu']."</td>";
                                        echo "<td>".$user_data['nama_tamu']."</td>";
                                        echo "<td>".$user_data['no_kamar']."</td>";    
                                        echo "<td align='center'><a href='edit.php?id=$user_data[id]' ><img src='images/edit_icon2.png' width='25px' ></a> | <a href='delete.php?id=$user_data[id]'><img src='images/delete.png' width='25px'></a></td></tr>";        
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <hr>
                        </div>
            </div>


    </div>
    <!-- Column small 8 end -->
  </div>
</div>



<!-- Modal Delete Start -->
<!-- Modal Delete Start -->
<!-- Modal Delete Start -->

<!-- Modal Delete End -->
<!-- Modal Delete End -->
<!-- Modal Delete End -->


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>

