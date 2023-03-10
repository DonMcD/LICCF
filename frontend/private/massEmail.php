<?php
require '../../backend/authenticatePage.php'
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name= "author" content= "Donavon McDowell">
    <title>LICCF Login</title>
    <link rel="stylesheet" href="../../css/styles.css">
	<link rel="stylesheet" href="../../css/mass-email.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
	<script src="https://cdn.tiny.cloud/1/3ixd8xadl4obkb31b97r2gtqs2olb4p3vcf03l10xohr9cd8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

	<style>
		.textarea-container {
			position: relative;
		}
		.formatting-btns {
			position: absolute;
			top: 0;
			left: 0;
		}
		textarea {
			padding-top: 30px;
			font-family: Arial, sans-serif;
			font-size: 14px;
			width: 100%;
			height: 400px;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
	</style>

</head>
<body class="backgrounds">
<?php
require '../headers/header.php';
require '../headers/topBar.php';
?>
<body>
<div class="center">
	<form action="../../backend/massEmail.php" method="POST" id="mass-email-form" class="mass-email-form">
		<input name='subject' type='text'placeHolder="Subject"/>
		<textarea id="mytextarea" name="content" placeHolder="Email Content"></textarea>
    <br>
		<input type="button" id="submit-btn" value="Send Mass Email"/>
	</form>
</div>

<script>
  tinymce.init({
    selector: 'textarea',
	  height: 550,
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ]
  });

  //Used to submit
  document.getElementById('submit-btn').addEventListener('click', function(e) {
    e.preventDefault(); // prevent the form from submitting in the traditional way
    var content = tinymce.get('mytextarea').getContent();
    // Send an AJAX request to the server to submit the form data
    $.ajax({
      type: "POST",
      url: "../../backend/massEmail.php",
      data: {
        subject: $("input[name='subject']").val(),
        content: content
      },
      success: function(data) {
        toastr.success(data);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        toastr.error("An error occurred while sending the email.");
      }
    });
  });
</script>
<script src="../../js/sidebar.js"></script>
</body>
</html>

