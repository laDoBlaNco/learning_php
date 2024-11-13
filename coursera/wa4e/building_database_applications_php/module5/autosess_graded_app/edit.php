<?php
require_once 'pdo.php';
session_start();

if(isset($_POST['make']) && isset($_POST['model']) && isset($_POST['year']) 
    && isset($_POST['mileage']) && isset($_POST['auto_id'])){

    // data validation:
    if(strlen($_POST['make'])<1 || strlen($_POST['model'])<1
        || strlen($_POST['year'])<1 || strlen($_POST['mileage'])<1){
        $_SESSION['error'] = 'All fields are required';
        // NOTE THE ADDITIONAL $_REQUEST['auto_id'] - THIS IS TO ENSURE THE ID IS 
        // PASSED THROUGH GET AGAIN. WE USE REQUEST SINCE IT'LL CATCH BOTH GET AND POST
        // DATA
        header('Location:edit.php?auto_id='.$_REQUEST['auto_id']);
        return;
    }else if(!is_numeric($_POST['year'])||!is_numeric($_POST['mileage'])){
        $_SESSION['error'] = 'Mileage and year must be an integer';
        header('Location:edit.php?auto_id='.$_REQUEST['auto_id']);
        return;
    }else{  
        $sql = 'update autos set make = :make,model=:model,year=:year,mileage=:mileage
                where auto_id=:auto_id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':make'=>$_POST['make'],
            ':model'=>$_POST['model'],
            ':year'=>$_POST['year'],
            ':mileage'=>$_POST['mileage'],
            ':auto_id'=>$_POST['auto_id'],
        ]);
        $_SESSION['success'] = 'Record edited';
        header('Location:index.php');
        return;
    }
}

// Guardian: make sure that user_id is presnet
if(!isset($_GET['auto_id'])){
    $_SESSION['error'] = 'Bad value for id';
    header('Location:index.php');
    return;
}


$stmt = $pdo->prepare('select * from autos where auto_id=:xyz');
$stmt->execute([':xyz'=>$_GET['auto_id']]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row===false){
    $_SESSION['error'] = 'Bad value for id';
    header('Location:index.php');
    return;
}

//////////////////// View //////////////////////////////
// again it seems we have some stuff leaking into our views
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin Whiteside - Autos Tracker Database - Edit</title>
</head>
<body>
    <?php
        $mk = htmlentities($row['make']);
        $md = htmlentities($row['model']);
        $y = htmlentities($row['year']);
        $mi = htmlentities($row['mileage']);
        $auto_id = $row['auto_id'];
    ?>

    <h1>Editing Automobile</h1>
    <?php
        if ( isset($_SESSION['error'])) {    
            echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
            unset($_SESSION['error']);
        }
    ?>
    
    <form method="post">
        <p>Make: <input type="text" name="make" value="<?= $mk ?>"></p>
        <p>Model: <input type="text" name="model" value="<?= $md ?>"></p>
        <p>Year: <input type="text" name="year" value="<?= $y ?>"></p>
        <p>Mileage: <input type="text" name="mileage" value="<?= $mi ?>"></p>
        <input type="hidden" name="auto_id" value="<?= $auto_id ?>">
        <p><input type="submit" value="Save"> <a href="index.php">Cancel</a></p>

    </form>
</body>
</html>