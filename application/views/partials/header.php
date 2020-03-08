<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
	<script type="text/javascript" src="<?= base_url('assets/js/script.js');?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript" src="<?= base_url('assets/js/ckeditor/ckeditor.js'); ?>"></script>
	<title></title>

	<script>
		$(document).ready(function () {
			$('#emoticon1').click(function () {
        let value = parseInt($('#e1').text())
        value+=50
        return $('#e1').html(value);
      });
      $('#emoticon2').click(function () {
        let value = parseInt($('#e2').text())
        value+=25
        $('#e2').html(value)
      });
      $('#emoticon3').click(function () {
        let value = parseInt($('#e3').text())
        value+=12
        $('#e3').html(value)
      });
      $('#emoticon4').click(function () {
        let value = parseInt($('#e4').text())
        value+=6
        $('#e4').html(value)
      });
      $('#emoticon5').click(function () {
        let value = parseInt($('#e5').text())
        value+=3
        $('#e5').html(value)
			});
    });
	</script>

</head>
