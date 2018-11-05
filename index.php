<!DOCTYPE html>
<html lang="en">
    <head>
        <title>NS project</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="project.css">
        <?php include 'project.php'; ?>
    </head>
    <body>
        <form action="index.php" method="post">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <select name="cipher" class="custom-select-sm">
                            <option selected>Choose an algorithm</option>
                            <option value="cesar">Caesar cipher</option>
                        </select>
                    </div>                
                    <div class="col-lg-6">
                        <label for="key">KEY: </label>
                        <input type="text" class="key" name="key" id="key">
                    </div>    
                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-8">
                        <label for="origin">Origin text</label><br>
                        <textarea name="origin" id="origin"><?php if(isset($_POST['cipher']) && $_POST['cipher'] === "cesar" && $_POST['decrypt']) { decesar();}?></textarea>
                    </div>
                    <div class="col-lg-4 text-center">
                        <button class="btn btn-primary first" name="encrypt">Encrypt</button><br>
                    </div>                
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-8">
                        <label for="encrypted">Encrypted text</label><br>
                        <textarea name="encrypted" id="encrypted"><?php 
                        if(isset($_POST['cipher']) && $_POST['cipher'] === "cesar") {
                            cesar();
                        }?></textarea>
                    </div> 
                 
                    <div class="col-lg-4 text-center">
                        <button class="btn btn-danger" name="decrypt" value="1">Decrypt</button><br>
                    </div>  
              </div>        
           </div>
            
          
        <script src="jquery-3.3.1.js"></script>
        <script src="bootstrap.min.js"></script>
    </body>
</html>