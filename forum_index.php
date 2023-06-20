<?php
// Connection to phpmyadmin. Change the details depending on database schema.
$conn = mysqli_connect("localhost", "root", "", "osp_website");

$errors = []; // Initialize an array to store validation errors

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $topic = $_POST["topic"];
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

    $query = "INSERT INTO forum_data (name, topic, comment, date, reply_id) VALUES ('$name', '$topic', '$comment', '$date', '$reply_id')";
    mysqli_query($conn, $query);

    // Redirect the user to a different page after form submission
    header("Location: forum_index.php");
    exit();
  }
}

// Sort the main topics by alphabetical order or by the newest topic
$sortOption = isset($_GET['sort']) ? $_GET['sort'] : 'newest';
$orderBy = ($sortOption === 'alphabetical') ? 'topic' : 'date DESC';

// Retrieve the main topics from the database
$datas = mysqli_query($conn, "SELECT * FROM forum_data WHERE reply_id = 0 ORDER BY $orderBy");
?>

<html>
  <head>
    <meta charset="utf-8">
    <link href="css/forum_style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Khairul Aming Brand</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'navbar.php'?>
    <section class="hero-section hero-50 d-flex justify-content-center align-items-center" id="section_1">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12 text-center">
                            <h1 class="text-white mb-1 pb-2">Cooking Concerns</h1>
                            
                            <h4 class="text-white mb-4  span">Discuss and Share Your Worries!</h4>

                            <a href="#margin_bt_50" class="btn custom-btn smoothscroll me-3">Create Inquiries</a>
                        </div>
                    </div>
                </div>
                <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
            </section>

    <div class="container" id="margin_bt_50" style="width: 50%;>
      <p id="disc_topic">Cooking Forum</p>
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

      <div class="sort-options">
        <span>Sort by:</span>
        <a href="forum_index.php?sort=alphabetical">Alphabetical</a>
        <a href="forum_index.php?sort=newest">Newest</a>
      </div>

      <?php
      foreach ($datas as $data) {
        require 'forum_comment.php';
      }
      ?>

      <form action="" method="post" id="commentForm">
        <h3 id="title">Create New Topic</h3>
        <input type="hidden" name="reply_id" id="reply_id">
        <input type="text" name="name" id="name" placeholder="Your name">
        <span id="nameError"></span>
        <input type="text" name="topic" id="topic" placeholder="Topic">
        <span id="topicError"></span>
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
        document.getElementById('topic').style.display = "none";
        document.getElementById('topicError').textContent = '';
      }

      // Validate the form fields before submitting
      document.getElementById('commentForm').addEventListener('submit', function(event) {
        var nameField = document.getElementById('name');
        var topicField = document.getElementById('topic');
        var commentField = document.getElementById('comment');
        var nameError = document.getElementById('nameError');
        var topicError = document.getElementById('topicError');
        var commentError = document.getElementById('commentError');
        var isValid = true;

        // Reset error messages
        nameError.textContent = '';
        topicError.textContent = '';
        commentError.textContent = '';

        // Validate name field
        if (nameField.value.trim() === '') {
          nameError.textContent = 'Name is required';
          isValid = false;
        }

        // Validate topic field only for main topic
        if (topicField.style.display !== "none" && topicField.value.trim() === '') {
          topicError.textContent = 'Topic is required';
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

    <?php include 'footer.php' ?>
  </body>
</html>
