<?php
include_once "checked_function.php";


// checked func
$technologys = $_POST['technologys'] ?? array();
if(count($technologys) > 0){
	echo "Your Technology : ".join($technologys,',');
}
print_r($technologys);
$tech = ['Laravel','node.js','sql','PHP','JS'];

$photos = $_FILES['photo'] ?? "";
print_r($photos);

$allowType = ['image/png','image/jpg','image/jpeg'];
if($photos != ""){
	$count = count($photos) - 1;
	$pass = 0;
	for($i = 0;$i < $count; $i++){
		if(in_array($photos['type'][$i],$allowType) && $photos['size'][$i] < 5 * 1024 *1024){
			$pass += 1;
		}else{

			echo "<span>Error to upload <span>";
		}
	}

	if(4 == $pass){
		for($i = 0;$i < $count; $i++){
			move_uploaded_file($photos['tmp_name'][$i],'files/'.mt_rand().".".pathinfo($photos['name'][$i], PATHINFO_EXTENSION));
			
		}
	}


	
}


$photomultipe = $_FILES['photomultipe'] ?? "";

print_r($photomultipe);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">


	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">


	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">


</head>
<body>
	<div class="container">
		<div class="row">
			<div class="column column-60 column-offset-20">
				<h2>NIK Form</h2>
				
			<?php if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['bio'])): ?> 
				<p>
					Name : <?=filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING) ?>
					Age : <?=filter_input(INPUT_POST,'age',FILTER_SANITIZE_NUMBER_INT)?>
					Bio : <?=filter_input(INPUT_POST,'bio',FILTER_SANITIZE_STRING)?>

					<?php

					

					?>
				</p>
			<?php endif; ?>

			<?php
				$checked = '';
				$checkValue = filter_input(INPUT_POST,'check');
				if($checkValue == 1){
					$checked = 'checked';
				}
			?>
			</div>
		</div>
		<div class="row">
			<div class="column column-60 column-offset-20">
				<form action="" method="POST" enctype="multipart/form-data">
				  <fieldset>
				    <label for="nameField">Name</label>
				    <input type="text" name="name" placeholder="CJ Patoilo" id="nameField">
				    <input type="text" name="data">
				    <label for="ageRangeField">Age Range</label>
				    <select id="ageRangeField" name="age">
				      <option value="0-13">0-13</option>
				      <option value="14-17">14-17</option>
				      <option value="18-23">18-23</option>
				      <option value="24+">24+</option>
				    </select>
				    <label for="commentField" >Comment</label>
					<textarea placeholder="Hi CJ …" name="bio" id="commentField"></textarea>
					<label for="photo" >Upload Photo</label>
					<input type="file" name="photo[]" id="photo">
					<input type="file" name="photo[]" id="photo">
					<input type="file" name="photo[]" id="photo">
					<input type="file" name="photo[]" id="photo">
					<input type="file" name="photomultipe[]" id="photo">


					
				      <input type="checkbox" name="check" value="1" id="confirmField" <?=$checked?>>
					  <label class="label-inline" for="confirmField">Send a copy to yourself</label>
					  
					  <label>Choese Which php Tag are abalible in php 7.4</label>
					  <input <?php echo isChecked('tags', 'standerd') ?>  type="checkbox" name="tags[]" value="standerd" id="confirmField">
					  <label class="label-inline" for="confirmField"><em>&lt;?php</em>  <em>?&gt;</em></label>
					  <br />
					  <input <?php echo isChecked('tags', 'short') ?> type="checkbox" name="tags[]" value="short" id="confirmField">
					  <label class="label-inline" for="confirmField"><em>&lt;?= ?&gt;</em></label>
					  <br />
					  <input <?php echo isChecked('tags', 'asp') ?> type="checkbox" name="tags[]" value="asp" id="confirmField">
					  <label class="label-inline" for="confirmField">&lt;% %&gt;</label>
					  <br />
					  <input <?php echo isChecked('tags', 'short1') ?> type="checkbox" name="tags[]" value="short1" id="confirmField">
					  <label class="label-inline" for="confirmField">&lt;? ?&gt;</label>
					  <br />

					<br />


					<label for="selectTec">Select Yout Techonology</label>
					<select name="technologys[]" id="" multiple style="height: 200px">
						<option value="">Select multiple</option>
						<?php selectOptoins($tech,'technologys') ;?>
					</select>
				    <input class="button-primary" type="submit" value="Send">

				    
				  </fieldset>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>