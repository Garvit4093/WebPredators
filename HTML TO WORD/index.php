<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Html To Word File</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="favicon.ico" rel="shortcut icon">
    <script type="text/javascript" src="jszip-master/dist/jszip.min.js"></script>
    <script type="text/javascript" src="jszip-master/vendor/FileSaver.js"></script>
   
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300&family=Poppins&family=Roboto:wght@300&display=swap"
      rel="stylesheet">
  </head>
  <body>
    <nav class="navbar bg-dark border-bottom border-body " data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h3>HTML TO WORD</h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">About</a>
            </li>
          </div>
        </div>
      </nav>

      <div class="maincontent">
        <div>
          <img
            class="image"
            src="images/1.png"
            alt="Image" />
        </div>
        <div class="topinfo">
          <h1>Convert HTML to DOCX...</h1>
          <div class="wrapper">
            <div class="fileform">
              Upload or drag and drop your HTML file to convert to docx
              <form method="post" action="upload.php" enctype="multipart/form-data">
              <div class="upload my-2">
                <input type="file" name="file" accept=".html" type="file"  />
                <output id="list"></output>
              </div>
              <button class="btn btn-primary my-2" type="submit" name="submit" value="upload" >Submit</button>
            </form>
            </div>
          </div>
        </div>
      </div>

      <footer class="fixed-bottom">
        <span>@converter Ltd 2023</span>
        <span>Terms and conditions</span>
        <span>Privacy Policy</span>
      </footer>

          <script src="https://kit.fontawesome.com/e83cfb84b5.js"
            crossorigin="anonymous"></script>
          <script src="script.js"></script>
          <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>

            
        </body>
      </html>