<?php
$conn = mysqli_connect("localhost", "root", "", "osp_website");

$errors = []; // Initialize an array to store validation errors

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $comment = $_POST["comment"];

  // Validate the form fields
  if (empty($name)) {
    $errors[] = "Name is required";
  }
  if (empty($comment)) {
    $errors[] = "Comment is required";
  }

  // If there are no validation errors, insert the data into the database
  if (empty($errors)) {
    $date = date('F d Y, h:i:s A');
    $reply_id = $_POST["reply_id"];

    $query = "INSERT INTO forum_data VALUES('', '$name', '$comment', '$date', '$reply_id')";
    mysqli_query($conn, $query);

    // Redirect the user to a different page after form submission
    header("Location: forum_index.php");
    exit();
  }
}
?>
<html>
  <head>
    <style>
      * {
        margin: 0px;
        padding: 0px;
      }
      body {
        background: #212523;
      }
      .container {
        background: white;
        width: 700px;
        margin: 0 auto;
        padding-top: 1px;
        padding-bottom: 5px;
      }
      .comment, .reply {
        margin-top: 5px;
        padding: 10px;
        border-bottom: 1px solid black;
      }
      .reply {
        border: 1px solid #ccc;
      }
      p {
        margin-top: 5px;
        margin-bottom: 5px;
      }
      form {
        margin: 10px;
      }
      form h3 {
        margin-bottom: 5px;
      }
      form input,
      form textarea {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
      }
      form button.submit,
      button {
        background: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px 20px;
        width: 100%;
      }
      button.reply {
        background: orange;
      }
      .errors {
        color: red;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <?php
      // Display validation errors, if any
      if (!empty($errors)) {
        echo '<div class="errors">';
        foreach ($errors as $error) {
          echo '<p>' . $error . '</p>';
        }
        echo '</div>';
      }
      ?>

      <?php
      $datas = mysqli_query($conn, "SELECT * FROM forum_data WHERE reply_id = 0"); // only select comment and not select reply
      foreach ($datas as $data) {
        require 'forum_comment.php';
      }
      ?>

      <form action="" method="post" id="commentForm">
        <h3 id="title">Leave a Comment</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <input type="text" name="name" id="name" placeholder="Your name">
        <span id="nameError"></span>
        <textarea name="comment" id="comment" placeholder="Your comment"></textarea>
        <span id="commentError"></span>
        <button class="submit" type="submit" name="submit">Submit</button>
      </form>
    </div>

    <script>
      function reply(id, name) {
        title = document.getElementById('title');
        title.innerHTML = "Reply to " + name;
        document.getElementById('reply_id').value = id;
      }

      // Validate the form fields before submitting
      document.getElementById('commentForm').addEventListener('submit', function(event) {
        var nameField = document.getElementById('name');
        var commentField = document.getElementById('comment');
        var nameError = document.getElementById('nameError');
        var commentError = document.getElementById('commentError');
        var isValid = true;

        // Reset error messages
        nameError.textContent = '';
        commentError.textContent = '';

        // Validate name field
        if (nameField.value.trim() === '') {
          nameError.textContent = 'Name is required';
          isValid = false;
        }

        // Validate comment field
        if (commentField.value.trim() === '') {
          commentError.textContent = 'Comment is required';
          isValid = false;
        }

        // Prevent form submission if validation fails
        if (!isValid) {
          event.preventDefault();
        }
      });
    </script>
  </body>
</html>