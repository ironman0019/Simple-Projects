<?php 
include_once '../core/sidebar.php';

include '../classes/dbconfig.class.php';
include '../classes/upload.class.php';
include '../classes/uploadControl.class.php';
include '../classes/uploadView.class.php';

$fetchData = new UploadView();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../view/mycloud.css">
    <title>mycloud</title>
</head>
<body>


   <div class="container-fluid">
        <div class="title position-absolute top-0 start-50 translate-middle mt-5 mx-5 text-light">
            <h1>This is my cloud</h1>
        </div>
        <div class="w-50 position-absolute top-0 start-50 translate-middle mx-5 " id="table">
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">created_at</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
                        $resaults = $fetchData->fetchAll($_SESSION['id']);
                        $i = 0;
                        foreach($resaults as $resault)
                        {
                            
                    ?>
                    <td><img src="<?php echo "../includes"."/". $resault['files'] ?>" alt="" class="w-25 border rounded"></td>
                    <td><?php echo $resault['created_at'] ?></td>
                    <td><a href="../includes/delete.inc.php?del=<?php echo $resault['files_id'] ?>"><button class="btn btn-danger" onclick="return confirm('آیا حذف انجام شود؟')"><i class="bi bi-trash"></i></button></a></td>
                </tr>
                <?php  
                    }
                    $i++;   
                ?>
            </tbody>
        </table>
    </div>
   </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        
    </script>
    <script src="./main.js"></script>

</body>
</html>