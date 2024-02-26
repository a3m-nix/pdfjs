<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF Upload</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f2f2f2;
    }

    form {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    input[type="file"] {
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 10px;
      padding: 8px;
      width: calc(100% - 22px);
    }

    button[type="submit"] {
      background-color: #007bff;
      border: none;
      border-radius: 4px;
      color: #fff;
      cursor: pointer;
      font-size: 16px;
      padding: 10px;
      width: 100%;
    }

    button[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <form id="uploadForm" enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="file" id="pdfFile" name="file" accept=".pdf" required />
    <button type="submit">Upload</button>
  </form>
</body>

</html>