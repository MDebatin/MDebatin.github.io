<?php

include ('server.php');
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'teste');
$username= $_SESSION['username'];
$sql = "SELECT * FROM files WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf'])) {
        echo "Você somente pode enviar arquivos em PDF!";
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
        echo "Arquivo ultrapassa peso permitido!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (username, name, size, downloads) VALUES ('$username', '$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {

            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }
}
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    // fetch file to download from database
    $sql = "DELETE FROM files WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if($sql){
        header("Refresh:0; downloads.php");
    } else {
        echo "<script type='javascript'>alert('Ocorreu um erro!');";
    }
}

