<?php
	session_start();
	$_SESSION["table"] .= "";
?>

<!DOCTYPE html>

<head>
	<title>web1</title>
	<link rel="icon" href="images/frog.jpg">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<style>
	body{
		background-color: #DCEDC8;
		font-family: "Open Sans", "Arial", sans-serif;
	}
	#main_table {
		border-spacing: 10px;
		width: 100%;
	}
	.vertical-elements{

	}
	#head-element{
		font-size: 25px;
		background-color: #689F38;
	}
	
	#left-header {
		width: 50%;
		text-align: left;
	}
	
	#right-header {
		width: 50%;
		text-align: right;
	}
	
	#middle-headers{
		text-align: center;
		background-color: #8BC34A;
		font-size: 20px;
	}
	
	#middle-content{
		background-color: white;
	}
	
	img{
		display: block;
		margin-left: auto;
		margin-right: auto 
	}
	
	#input-grid {
		width: 95%;
		margin: auto;
		text-align: center;
    }

    .input-grid-label {
		width: 12%;
		font-weight: bold;
    }
    #y-textinput {
		width: 75%;
		height: 20px;
		margin: 2% 0;
    }

    .text-error {
		border: 1px solid #ff0000;
    }

    .box-error {
		color: #ff0000;
    }

    .text-error::placeholder {
		color: #ff0000;
    }

    .form-subtext {
		padding-bottom: 2%;
		font-size: 14px;
    }

    .center-labeled {
		display: inline-block;
		position: relative;
		margin: 0 1% 5%;
		font-size: 14px;
    }

    .center-labeled label {
		position: absolute;
		top: 18px;
		left: 6px;
    }

    .center-labeled .negative-labled {
		left: 7px;
    }

    .center-labeled .add-labeled {
		left: 7px;
    }

    .buttons {
		margin-top: 3%;
    }

    .button {
		height: 27px;
		width: 70px;
		color: #ffffff;
		background-color: #8BC34A;
		border: none;
    }

    .button:hover {
		background-color: #CDDC39;
    }
	
	#result-table {
		width: 100%;
		background-color: white;
	}
	.table-collumn {
		width: 16.6%;
	}
	
	#header-row {
		background-color: #8BC34A;
		text-align: center;
	}
	
	#result-table tr:nth-child(2n+3) {
		background-color: #8FCF4F;
	}
	#result-table tr:nth-child(2n+2) {
		background-color: #DCEDC8;
	}
	
	#result-table tr:nth-child(2n+2):hover {
		background-color: #BDBDBD;
	}
	#result-table tr:nth-child(2n+3):hover {
		background-color: #757575;
	}
	</style>
</head>

<body>
	<table id="main_table">
		<tr id="head-element" class="vertical-elements">
			<td id="left-header">
				Кальвияйнен Ярослав, P3232
			</td>
			<td id="right-header">
				Вариант 32006
			</td>
		</tr>
		<tr class="vertical-elements" id="middle-headers">
			<td>
				График (Только показываю)
			</td>
			<td>
				Данные
			</td>
		</tr>
		<tr class="vertical-elements" id="middle-content">
			<td>
				<img src="images/grafic.png" alt="Потерял график(((">
			</td>
			<td>
				<form id="input-form" action="" method="GET">
				  <table id="input-grid">
					<!-- X Value -->
					<tr>
					  <td class="input-grid-label">
						<label>X:</label>
					  </td>

					  <td class="input-grid-value">
						<div class="center-labeled">
						  <label class="negative-labled x-box-label" for="x-checkbox1">-4</label>
						  <input class="x-checkbox" id="x-checkbox1" type="checkbox" name="xval" value="-4">
						</div>

						<div class="center-labeled">
						  <label class="negative-labled x-box-label" for="x-checkbox2">-3</label>
						  <input class="x-checkbox" id="x-checkbox2" type="checkbox" name="xval" value="-3">
						</div>

						<div class="center-labeled">
						  <label class="negative-labled x-box-label" for="x-checkbox3">-2</label>
						  <input class="x-checkbox" id="x-checkbox3" type="checkbox" name="xval" value="-2">
						</div>

						<div class="center-labeled">
						  <label class="negative-labled x-box-label" for="x-checkbox4">-1</label>
						  <input class="x-checkbox" id="x-checkbox4" type="checkbox" name="xval" value="-1">
						</div>

						<div class="center-labeled">
						  <label class="x-box-label" for="x-checkbox5">0</label>
						  <input class="x-checkbox" id="x-checkbox5" type="checkbox" name="xval" value="0">
						</div>
						<div class="center-labeled">
						  <label class="x-box-label" for="x-checkbox6">1</label>
						  <input class="x-checkbox" id="x-checkbox6" type="checkbox" name="xval" value="1">
						</div>
						<div class="center-labeled">
						  <label class="x-box-label" for="x-checkbox7">2</label>
						  <input class="x-checkbox" id="x-checkbox7" type="checkbox" name="xval" value="2">
						</div>
						<div class="center-labeled">
						  <label class="x-box-label" for="x-checkbox8">3</label>
						  <input class="x-checkbox" id="x-checkbox8" type="checkbox" name="xval" value="3">
						</div>
						<div class="center-labeled">
						  <label class="x-box-label" for="x-checkbox9">4</label>
						  <input class="x-checkbox" id="x-checkbox9" type="checkbox" name="xval" value="4">
						</div>
					  </td>
					</tr>

					<!-- Y Value -->
					<tr>
					  <td class="input-grid-label">
						<label for="y-textinput">Y:</label>
					  </td>

					  <td class="input-grid-value">
						<input id="y-textinput" type="text" name="yval" maxlength="5" autocomplete="off" placeholder="Число от -3 до 3">
					  </td>
					</tr>

					<!-- R Value -->
					<tr>
					  <td class="input-grid-label">
						<label>R:</label>
					  </td>
					  
					  <td class="input-grid-value">
						<div class="center-labeled">
						  <label class="r-box-label" for="r-checkbox1">1</label>
						  <input class="r-checkbox" id="r-checkbox1" type="checkbox" name="rval" value="1">
						</div>

						<div class="center-labeled">
						  <label class="r-box-label" for="r-checkbox2">2</label>
						  <input class="r-checkbox" id="r-checkbox2" type="checkbox" name="rval" value="2">
						</div>

						<div class="center-labeled">
						  <label class="r-box-label" for="r-checkbox3">3</label>
						  <input class="r-checkbox" id="r-checkbox3" type="checkbox" name="rval" value="3">
						</div>

						<div class="center-labeled">
						  <label class="r-box-label" for="r-checkbox4">4</label>
						  <input class="r-checkbox" id="r-checkbox4" type="checkbox" name="rval" value="4">
						</div>

						<div class="center-labeled">
						  <label class="r-box-label" for="r-checkbox5">5</label>
						  <input class="r-checkbox" id="r-checkbox5" type="checkbox" name="rval" value="5">
						</div>
					  </td>
					</tr>

					<!-- Buttons -->
					<tr>
					  <td colspan="2">
						<div class="buttons">
						  <input class="button" type="submit" value="Submit">
						  <input class="button" type="reset" value="Reset">
						</div>
					  </td>
					</tr>
				  </table>
				</form>
			</td>
		</tr>
		<tr class="vertical-elements">
			<td colspan="2">
				<table  id="result-table">
					<tr id="header-row">
						<td class="table-collumn">X</td>
						<td class="table-collumn">Y</td>
						<td class="table-collumn">R</td>
						<td class="table-collumn">Время запроса</td>
						<td class="table-collumn">Время выполнения запроса</td>
						<td class="table-collumn">Результат запроса</td>
					</tr>
					<?php
						echo $_SESSION["table"];
					?>
				</table>
			</td>
		</tr>
	</table>
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>
	
</body>