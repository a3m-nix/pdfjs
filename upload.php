<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $file = $_FILES["file"];
    $response = [];

    if ($file["error"] == UPLOAD_ERR_OK) {
        $uploadDir = "uploads/";
        $uploadFile = $uploadDir . basename($file["name"]);

        if (move_uploaded_file($file["tmp_name"], $uploadFile)) {
            $response["success"] = true;
            $response["message"] = "File uploaded successfully.";
        } else {
            $response["success"] = false;
            $response["message"] = "Failed to move uploaded file.";
        }
    } else {
        $response["success"] = false;
        $response["message"] = "Error uploading file.";
    }

    if ($_POST["want"] == "json") {
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        if ($response["success"]) {
            header("Location: viewer.php?file=" . $uploadFile);
        } else {
            header("Location: index.php?msg=" . urlencode($response["message"]));
        }
    }
} else {
    $response["success"] = false;
    $response["message"] = "Invalid request method or file not provided";

    if ($_POST["want"] == "json") {
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        header("Location: index.php?msg=" . urlencode($response["message"]));
    }
}
