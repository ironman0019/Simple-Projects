<?php include_once '../core/sidebar.php' ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../view/mainPage.css">
    <title>upload files</title>
</head>
<body>
<section>
        <div class="container">
            <div class="title position-absolute top-0 start-50 translate-middle mt-5 mx-5 text-white">
            <h1>Emad Drive</h1>
            </div>
            <form action="../includes/upload.inc.php" method="POST" enctype="multipart/form-data">
            <div class="w-75">
                <div class="input-group" id="upload">
                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                    <input type="file" class="form-control" name="img">
                </div>
                <div class="mb-3" id="dirname">
                    
                    <input type="submit" class="btn btn-primary mt-3" value="Submit">
                </div>
            </div>
            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        
    
    </script>

</body>
</html>



