<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php
$severname="localhost";
$passwork="";
$username="root";
$db="baikiemtra_php";

$conn= new mysqli($severname,$passwork,$username,$db);

$ds= "select *from danhba";

$sql =$conn -> query($ds);
if($sql->num_rows>0){
    while($row=$sql->fetch_assoc()){
        $list[]=$row;
    }

}

?>
<body>
<div class="container">
    <div class="row">
        <h1>
            Phone contacts
        </h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="add_contact.php">
            <button class="btn btn-primary me-md-2" type="button">Add new Contacts</button>       
        </a>

        </div>
        
        <table class="table table-bordered border-primary" style="margin-top: 10px;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone Numer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($list)){foreach($list as $sdt) {?>
                    <tr>
                        <th><?php echo $sdt["id"]?></th>
                        <th><?php echo $sdt["Name"]?></th>
                        <th><?php echo $sdt["PhoneNumber"]?></th>
                        <th>
                            <a href="deleteNumber.php?id=<?php echo $sdt["id"] ?>"><i class="bx bxs-trash-alt"></i></a>
                            <a href="edit_contact.php?id=<?php echo $sdt["id"] ?>"><i class="bx bxs-edit"></i></a>
                        </th>
                    
                    </tr>
                <?php }} else{}?>
            </tbody>
        </table>
    </div>
</div>

    

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
