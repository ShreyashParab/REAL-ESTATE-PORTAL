<?php

// <button name='update' class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> 
  // CONNECTION TO DATABASE    
  $insert =false; 
  $update=false;
  $delete=false;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "database";
  
  // Create a connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  
  // Die if connection was not successful
  if (!$conn){
      die("Sorry we failed to connect: ". mysqli_connect_error());
  } 

  if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    // echo $sno;
    $delete = true;
    $sql = "DELETE FROM `propertylist` WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);
  }

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if(isset($_POST['snoEdit'])){
     //update the record
     $sno = $_POST["snoEdit"];
     $name=$_POST["nameEdit"];
     $location=$_POST["locationEdit"];
     $price=$_POST["priceEdit"];
     $image=$_POST["imageEdit"];
     $room=$_POST["roomEdit"];
     $size=$_POST["sizeEdit"];
     $furnishing=$_POST["furnishingEdit"];
     $description=$_POST["descriptionEdit"];
     // Sql query to be executed
   $sql = "UPDATE `propertylist` SET `name` = '$name' , `location` = '$location', `price` = '$price', `image` = '$image', `room` = '$room', `size` = '$size', `furnishing` = '$furnishing', `description` = '$description'  WHERE `propertylist`.`sno` = $sno";
   $result = mysqli_query($conn, $sql);
  //  echo $name;
  //  echo $location;
  //  echo $price;
  //  echo $image;
  //  echo $room;
  //  echo $size;
  //  echo $furnishing;
  //  echo $description;
   
   if($result)
   {
     $update = true;
   }
   else{
     echo "We could not update the record succesfully";
   }
    }
    else{
    $name=$_POST["name"];
    $location=$_POST["location"];
    $price=$_POST["price"];
    $image=$_POST["image"];
    $room=$_POST["room"];
    $size=$_POST["size"];
    $furnishing=$_POST["furnishing"];
    $description=$_POST["description"];
    // Sql query to be executed
  $sql = "INSERT INTO `propertylist` (`name`, `location`, `price`, `image`, `room`, `size`, `furnishing`, `description`) VALUES ('$name', '$location', '$price', '$image', '$room', '$size', '$furnishing', '$description')";
  $result = mysqli_query($conn, $sql);
  if($result){ 
    // echo "the record has been recorded succesfuly<br>";
    $insert= true;
  }
  else{
    echo "the record has not been recorded succesfuly<br>";
  }
}
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    

  <title>Admin Panel</title>
  
</head>

<body>
  <!-- Edit Modal -->
  <!-- Button trigger modal -->
<!-- <button type="button" class="edit btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit
</button> -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit property</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="admin.php" method="POST">
        <input type="hidden" name="snoEdit" id="snoEdit">
      <div class="form-group">
        <label for="name" class="form-label">property name</label>
        <input type="text" class="form-control" id="nameEdit" name="nameEdit" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="location" class="form-label">property location</label>
        <input type="text" class="form-control" id="locationEdit" name="locationEdit" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="price" class="form-label">property price</label>
        <input type="text" class="form-control" id="priceEdit" name="priceEdit" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="image" class="form-label">property image</label>
        <input type="file" class="form-control" id="imageEdit" name="imageEdit" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="room" class="form-label">property room</label>
        <input type="text" class="form-control" id="roomEdit" name="roomEdit" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="size" class="form-label">property size</label>
        <input type="text" class="form-control" id="sizeEdit" name="sizeEdit" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="furnishing" class="form-label">property furnishing</label>
        <input type="text" class="form-control" id="furnishingEdit" name="furnishingEdit" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="description">property description</label>
        <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
      </div>
      <button type="submit" name="updated" class="btn btn-primary" style="margin-top: 6px;">Update property</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Edit Modal Ends -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="welcome.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your record has been inserted succesfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    <span area-hidden='true'>&times;</span>
    </button>
    </div>";
  }
  ?>
   <?php
  if($delete){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your record has been deleted succesfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    <span area-hidden='true'>&times;</span>
    </button>
    </div>";
  }
  ?>
   <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your record has been updated succesfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
    <span area-hidden='true'>&times;</span>
    </button>
    </div>";
  }
  ?>
  <div class="container my-4">
    <h2>Add property</h2>
    <form action="admin.php" method="POST">
      <div class="form-group my-2" >
        <label for="name" class="form-label">property name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
      </div>
      <div class="form-group my-2">
        <label for="location" class="form-label">property location</label>
        <input type="text" class="form-control" id="location" name="location" aria-describedby="emailHelp">
      </div>
      <div class="form-group my-2">
        <label for="price" class="form-label">property price</label>
        <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp">
      </div>
      <div class="form-group my-2">
        <label for="image" class="form-label">property image</label>
        <input type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp">
      </div>
      <div class="form-group my-2">
        <label for="room" class="form-label">property room</label>
        <input type="text" class="form-control" id="room" name="room" aria-describedby="emailHelp">
      </div>
      <div class="form-group my-2">
        <label for="size" class="form-label">property size</label>
        <input type="text" class="form-control" id="size" name="size" aria-describedby="emailHelp">
      </div>
      <div class="form-group my-2">
        <label for="furnishing" class="form-label">property furnishing</label>
        <input type="text" class="form-control" id="furnishing" name="furnishing" aria-describedby="emailHelp">
      </div>
      <div class="form-group my-2">
        <label for="description">property description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary" style="margin-top: 6px;">Add property</button>
    </form>
  </div>
  <div class="container">
    
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.no</th>
          <th scope="col">Name</th>
          <th scope="col">Location</th>
          <th scope="col">Price</th>
          <th scope="col">Image</th>
          <th scope="col">Room</th>
          <th scope="col">Size</th>
          <th scope="col">Furnishing</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
             $sql = "SELECT * FROM `propertylist`";
             $result = mysqli_query($conn, $sql);
             $sno=0;
             while($row = mysqli_fetch_assoc($result))
             {
             $sno = $sno + 1;
             echo "<tr>
             <th>".$sno ."</th>
             <td>". $row['name'] ."</td>
             <td>". $row['location'] ."</td>
             <td>". $row['price'] ."</td>
             <td>". $row['image'] ."</td>
             <td>". $row['room'] ."</td>
             <td>". $row['size'] ."</td>
             <td>". $row['furnishing'] ."</td>
             <td>". $row['description'] ."</td>
             <td> <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button></td>
             </tr>";
             }  
          ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
     } );
    </script>
    <script>
    // edits=document.getElementsByClassName('edit');
    // Array.from(edits).forEach((element)=>{
    //   element.addEventListener("click",(e)=>{
    //   console.log("edit", );
    //   tr = e.target.parentNode.parentNode;
    //   name = tr.getElementsByTagName("td")[0].innerText;
    //   location = tr.getElementsByTagName("td")[1].innerText;
    //   price = tr.getElementsByTagName("td")[2].innerText;
    //   image = tr.getElementsByTagName("td")[3].innerText;
    //   room = tr.getElementsByTagName("td")[4].innerText;
    //   size = tr.getElementsByTagName("td")[5].innerText;
    //   furnishing = tr.getElementsByTagName("td")[6].innerText;
    //   description = tr.getElementsByTagName("td")[7].innerText;
    //   console.log(name, location, price, room, size, furnishing, description);
    //   nameEdit.value = name;
    //   locationEdit.value = location;
    //   priceEdit.value = price;
    //   imageEdit.value = image;
    //   roomEdit.value = room;
    //   sizeEdit.value = size;
    //   furnishingEdit.value = furnishing;
    //   descriptionEdit.value = description;
    //   snoEdit.value = e.target.id;
    //   console.log(e.target.id);
    //   $('#editModal').modal('toggle');
    //   })
    // })
    $(document).ready(function () {

$('.edit').on('click', function () {

    $('#editModal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    console.log(data);

    $('#nameEdit').val(data[0]);
    $('#locationEdit').val(data[1]);
    $('#priceEdit').val(data[2]);
    // $('#imageEdit').val(data[3]);
    $('#roomEdit').val(data[4]);
    $('#sizeEdit').val(data[5]);
    $('#furnishingEdit').val(data[6]);
    $('#descriptionEdit').val(data[7]);
  
   
});
});

    deletes=document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element)=>{
      element.addEventListener("click",(e)=>{
      console.log("edit", );
      sno=e.target.id.substr(1,);   
      if(confirm("Press a button!")){
        console.log("yes");
        window.location = `admin.php?delete=${sno}`;
      }
      else{
        console.log("no");
      }
      })
    })
  </script>
 </body>
</html>




