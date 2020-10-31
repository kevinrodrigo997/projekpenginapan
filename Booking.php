<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<style>
.grid-container {
  display: grid;
  justify-content: space-evenly;
}
header {
    color: #232323;
    float: left;
    width: 100%;
    background: url("bg.png") right center;
}

header .judul {
    font-size: 17pt;
    padding: 10px;
}

header .logo {
    float: left;
    padding: 10px;
}
</style>

</head>
<body>
<header>
    <div class="logo">
    <img src="https://www.freelogoservices.com/api/main/images/1j+ojlxEOMkX9Wyqfhe43D6kifOIqRVInh7IwWJqZ04+jHEZ8D5U8uQ39...BFNGR09xRV2lVKJ8s8jiR6UIkRiBhm" width="100">
    </div>
    <div class="judul">
    <h1 style="margin: 0px;">NGINEP.ID</h1>
    </div>
</header> 
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <button class="navbar-toggler navbar-toggler-center" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-link active" href="Home.php">Home<span class="sr-only">(current)</span></a>
      <a class="nav-link" href="Booking.php">Booking</a>
    </div>
    </div>
    </nav>

    <div class="grid-container" style="padding-top: 50px; ">
    <div class="row">
            <div class="col">
    <form method="get" action="mybooking.php">
            <div class="col-md-20 col-sm-30 pr-0">
           <div style="margin-top: 100;">

    <div class="form-group col-md-9">
        <label for="Name">Name</label>
        <input type="text"  name="name" class="form-control">
        </div>
    
    <div class="form-group col-md-9">
        <label for="NIK">NIK</label>
        <input type="text"  name="NIK" class="form-control">
        </div> 

    <div class="form-group col-md-9">
        <label for="Address">Address</label>
        <input type="text"  name="Address" class="form-control">
        </div>   

    <div class="form-group col-md-9">
        <label for="checkin">Check in</label>
        <input type="date" name="date"  class="form-control">
        </div>

    <div class="form-group col-md-9">
        <label for="duration">Duration</label>
        <input type="text" name="duration"  class="form-control" style="width340px">
        <small class="form-text text-muted">Day(s)</small>
        </div>

    <div class="form-group col-md-9">
        <label for="roomtype">Room Type</label>
        <select  name= "room_type" class="form-control">
        <option>Standard</option>
        <option>Superior</option>
        <option>Luxury</option>
        </select>
        </div>

    <div class="form-group col-md-9">
        <label for="service">Add Service(s)</label>
        
        <br>
        <p style="font-size:13px;margin-bottom:0px;">$ 20/Service</p>
        <input type="checkbox" name="service[]" value="roomservice">   Room Service<br/>
        <input style="margin-top:15px;"type="checkbox" name="service[]" value="breakfast">   Breakfast<br/>
        </div>

    <div class="form-group col-md-9">
        <label for="phone">Phone Number</label>
        <input type="text"  name="phone" class="form-control">
        </div>

    <div class="form-group col-md-9">
        <button style= "margin-top: 5px; margin-left:3px;width:433px;height:40px;" href = "mybooking.php" class = "btn btn-primary">Book</button>
        </div>
        </div>
        </div>
       </div>
   </form>

   <div class="col">
        <img src="https://tse2.mm.bing.net/th?id=OIP.E9TISOYmgYHiAG_9fLTJlQHaD3&pid=Api&P=0&w=297&h=155" 
        class="card-img-top" height="350" width="300">
    </div>

</body>
</html>