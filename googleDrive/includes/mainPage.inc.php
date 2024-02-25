<?php  
session_start();


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
    <link rel="stylesheet" href="../view/mainPage.css">
    <title>google drive project</title>
</head>

<body>

    <sidebar class="sidebar">
        <div class="container bg-danger position-absolute w-25 h-100">
            <div class="img">
                <img src="https://picsum.photos/id/237/200/150" class="rounded-circle m-3"
                    alt="this is a user picture">
                <p class="text-light">Hello <?php echo $_SESSION['username']; ?> !</p>
            </div>
            <div class="list-group-flush">
                <a href="../core/mycloud.php" class="button list-group-item m-3"><span><i
                            class="bi bi-person-fill m-2 text-light"></i></span>My cloud</a>
                <a href="../core/upload.php" class="button list-group-item m-3" id="uploadfiles"><span><i
                            class="bi bi-upload m-2 text-light"></i></span>Upload Files</a>
                <a href="../includes/logout.inc.php"
                    class="button list-group-item position-absolute bottom-0 m-3"><span><i
                            class="bi bi-box-arrow-right m-2 text-light"></i></span>Log out</a>
            </div>
        </div>
    </sidebar>


    <section>
        <div class="container">
            <div class="title position-absolute top-0 start-50 translate-middle mt-5 mx-5 text-white">
            <h1>Emad Drive</h1>
            </div>
            <form action="./upload.inc.php" method="POST" enctype="multipart/form-data">
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