<?php
session_start();
include("../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$bkn_id=$_GET['booking_id'];
///////picture delete/////////
$result=mysqli_query($con,"select product_image from products where product_id='$bkn_id'")
or die("query is incorrect...");


if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet query*/
mysqli_query($con,"delete from page_one where booking_id='$bkn_id'")or die("query is incorrect...");
}

///pagination

$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
} 
include "sidenav.php";
include "topheader.php";
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        
        
         <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"> Application List</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table tablesorter " id="page1">
                    <thead class=" text-primary">
                      <tr><th>ID</th><th>Date of Arrival</th><th>Full Name</th><th>Email</th><th>Phone</th><th>Home Address</th><th>Country</th><th>
	Action</th></tr></thead>
                    <tbody>
                      <?php 

                        $result=mysqli_query($con,"select booking_id,arrival_date,full_name,email,contact,address,country from page_one")or die ("query 1 incorrect.....");

                        while(list
                        ($bkn_id,
                        $arrival,
                        $name,
                        $email,
                        $phone,
                        $home,
                        $location)
                        =mysqli_fetch_array($result))
                        {
                        echo "<tr><td>$bkn_id</td>
                        <td>$arrival</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$phone</td>
                        <td>$home</td>
                        <td>$location</td>
                        <td>

                        <a class=' btn btn-danger' href='page-one.php?booking_id=$bkn_id&action=delete'>Delete</a>
                        </td></tr>";
                        }

                        ?>
                    </tbody>
                  </table>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                 <?php 
//counting paging

                $paging=mysqli_query($con,"select product_id,product_image, product_title,product_price from products");
                $count=mysqli_num_rows($paging);

                $a=$count/10;
                $a=ceil($a);
                
                for($b=1; $b<=$a;$b++)
                {
                ?> 
                <li class="page-item"><a class="page-link" href="productlist.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li>
                <?php	
}
?>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
            
           

          </div>
          
          
        </div>
      </div>
      <?php
include "footer.php";
?>