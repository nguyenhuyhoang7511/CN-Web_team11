<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM db_images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>

<?php
                               $sql1 = "SELECT * FROM db_images WHERE ma_tour = '$id_tour'";
                               $result1 = mysqli_query($conn,$sql1);
                               if(mysqli_num_rows($result1) > 0){
                                   while($row1 = (mysqli_fetch_assoc($result))){    
                                    $imageURL = 'crud_admin/uploads/'.$row1["file_name"]; 
                                        
                           ?>
                           <div class="carousel-item active">
                               <img src=<?php echo $imageURL ?> class="d-block w-100" alt="...">
                           </div>
                           <?php
                               }};
                           ?>