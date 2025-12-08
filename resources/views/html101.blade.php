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

                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-4">
                            <label for="birthdate" class="form-label">วัน/เดือน/ปีเกิด</label>
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <input 
                                    id="birthdate"
                                    type="text"
                                    class="form-control"
                                    placeholder="dd / mm / yyyy"
                                    readonly
                                >
                                <span class="input-group-text">
                                    <i class="bi bi-calendar-event"></i>
                                </span>
                            </div>
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

                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">รูป</lael> 
                        </div>
                            <div class="col">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">ที่อยู่</lael> 
                        </div>
                            <div class="col">
                                <textarea id="address2" class="form-control" rows="5"></textarea>
                            </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">สีที่ชอบ</lael> 
                        </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Color</option>
                                    <option value="1">ชมพู</option>
                                    <option value="2">เหลือง</option>
                                    <option value="3">ฟ้า</option>
                                    </select>
                            </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-sm-12 col-md-4">
                            <label for="lname">แนวเพลงที่ชอบ</lael> 
                        </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Music</option>
                                    <option value="1">K-Pop</option>
                                    <option value="2">ลูกทุ่ง</option>
                                    <option value="3">สากล</option>
                                    </select>
                            </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                            <label class="form-check-label" for="checkDefault">
                                ยินยอนให้เก็บข้อมูล
                            </label>
                    </div>

                    <div class="col-12">
                        <button type="reset" class="btn btn-primary--bs-border-color">Reset</button>
                        
                        <label style="margin-left: 200px;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </label>
                    </div>
                </form>    
        </div>
    </body>
    
</html>