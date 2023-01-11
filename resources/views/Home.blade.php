<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Apply Lamaran</h1>

        <form action="dataInsert" method="post" enctype="multiplpart/form-data">
            

            <label for="name" class="control-label">Nama lengkap :</label>
            <input type="text" name="name" class="form-control"> <br>

            <label for="job_id" class="control-label">Jabatan :</label>
            <input type="text" name="job_id" class="form-control"> <br>
            
            <label for="phone" class="control-label">Telepon :</label>
            <input type="number" name="phone" class="form-control"> <br>

            <label for="email" class="control-label">Email :</label>
            <input type="text" name="email" class="form-control"> <br>

            <label for="year" class="control-label">Tahun Lahir :</label>
            <input type="number" name="year" class="form-control"> <br>

            <label for="skills" class="control-label">Skill Set:</label>
            <input type="text" name="skills" class="form-control"> <br>

            <input type="submit" class="btn btn-primary">

        </form>
    </div>
</body>
</html>