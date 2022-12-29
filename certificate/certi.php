<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Certificate Generator</title>
    <link rel="stylesheet" href="certi.css">
</head>

<body>

    <div class="container">
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                echo'
                    <h1>Certificate of vaccination</h1>
                    ';
                    include '../partial/_dbConnect.php';
                    // session_start();
                    $email=$_POST['email'];
                    $sql="SELECT * FROM `book_slot` WHERE email='$email'";
                    $result=mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result)==1){
                        $row=mysqli_fetch_assoc($result);
                        
                        echo '

                        <input type="hidden" id="name" value="'.$row['name'].'">
                        <input type="hidden" id="age" value="'.$row['age'].'">
                        <input type="hidden" id="gender" value="'.$row['gender'].'">
                        <input type="hidden" id="idProof" value="'.$row['id_num'].'">
                        <input type="hidden" id="dose" value="'.$row['dose'].'">
                        <input type="hidden" id="date" value="'.$row['date'].'">
                        <input type="hidden" id="vacAddress" value="'.$row['vacCenter'].',&nbsp;'.$row['vacDist'].'">


                        <canvas id="canvas" height="450px" width="500px"></canvas>

                         <button onClick="download()" id="download_btn" class="btn">Download</button>
                        ';
                    }
                    else{
                        $alert="No vaccine details found for the email : `$email`.";
                        session_start();
                        $_SESSION['alert']=$alert;
                        header('Location: /project/home.php');
                    }
               
            }
            else{
                echo '
                <form method="post" action="/project/certificate/certi.php">
                    <input type="email" name="email" placeholder="Enter email">
                    <button type="submit" class="btn">Submit</button>
                </form>
                ';
            }
        ?>
    </div>
</body>


<script>
var canvas = document.getElementById('canvas')
var ctx = canvas.getContext('2d')
// var name = document.getElementById('name')
// var downloadBtn = document.getElementById('download_btn')

var image = new Image()
image.crossOrigin = "anonymous";
image.src = '1.png'
image.onload = function() {
    drawImage()
}

function drawImage() {
    var name = document.getElementById('name').value
    var age = document.getElementById('age').value
    var gender = document.getElementById('gender').value
    var idProof = document.getElementById('idProof').value
    var dose = document.getElementById('dose').value
    var date = document.getElementById('date').value
    var vacAddress = document.getElementById('vacAddress').value

    // ctx.clearRect(0, 0, canvas.width, canvas.height)
    ctx.drawImage(image, 0, 0, canvas.width, canvas.height)
    ctx.font = '22px monotype corsiva'
    ctx.fillStyle = '#29e'
    //ctx.fillText(nameInput.value, 95, 220)
    //ctx.fillText(dateInput.value, 95, 268)
    /*ctx.fillText("Samir Amin1", 125, 145)
    ctx.fillText("Samir Amin2", 105, 175)
    ctx.fillText("Samir Amin3", 135, 200)
    ctx.fillText("Samir Amin4", 170, 230)
    ctx.fillText("21/11/2001", 210, 298)
    ctx.fillText("Samir Amin", 205, 325)
    ctx.fillText("Samir Amin", 202, 355)
    ctx.fillText("Samir Amin", 222, 382)*/
    ctx.fillText(name, 225, 145)
    ctx.fillText(age, 225, 175)
    ctx.fillText(gender, 225, 200)
    ctx.fillText(idProof, 225, 230)
    ctx.fillText("Covaxin", 225, 298)
    ctx.fillText(dose, 225, 325)
    ctx.fillText(date, 225, 355)
    ctx.fillText(vacAddress, 225, 382)
}

function download() {
    var name = document.getElementById('name')
    var anchor = document.createElement('a');
    anchor.href = canvas.toDataURL('image/png'); // 'image/jpg'
    anchor.download = name.value + ' vaccination certificate.png'; // 'image.jpg'
    anchor.click();
}
</script>

</html>