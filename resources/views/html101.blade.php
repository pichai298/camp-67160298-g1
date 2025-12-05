<!--file : resources/viwes/html101.blade.php -->
<decoct html>
    <html>
        <head>
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

                <style>
                body {
                    font-family: "Sarabun", sans-serif;
                }
            </style>
        </head>

    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FORM</h1>
                <form>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">ชื่อ</lael> 
                        </div>
                            <div class="col">
                                <input id="lname" class="form-control">
                            </div>
                        </div>
                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">สกุล</label> 
                        </div>
                            <div class="col">
                                <input id="lname" class="form-control">
                            </div>
                        </div>
                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">วัน/เดือน/ปีเกิด</lael> 
                        </div>
                            <div class="col">
                                <input class="form-control" type="text" value="dd / mm / yyyy" aria-label="readonly input example" readonly>
                            </div>
                        </div>
                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">อายุ</lael> 
                        </div>
                            <div class="col">
                                <input id="lname" class="form-control">
                            </div>
                        </div>
                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">เพศ</lael> 
                        </div>
                            <div class="col">
                                <label>
                                    <input type="radio" name="gender" value="male"> ชาย
                                </label>

                                <label style="margin-left: 20px;">
                                    <input type="radio" name="gender" value="female"> หญิง
                                </label>
                            </div>
                        </div>
                </form>    
        </div>
    </body>
    
</html>