<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Cluedo Notes</title>
		
		<style>
		#title {font-family: Fantasy; font-size: 170%}

		table {
		border-collapse: collapse;
		width: 100%;
		border: 1px solid #ddd;
		}

		th, td {
		text-align: center;
		padding: 16px;
		border: 1px solid #000000;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
	</head>
	<body>
		<?php
			$data = explode(",",$_GET['data']);
		?>
		
		<div class="content">
			<label id="title">Cluedo Notes</label>
			<br><br>
			<table id="table">
			  <tr>
				<th>Ποιος;</th>
				<?php
					for ($i = 2; $i <= sizeof($data); $i = $i+2) { //numberOfPlayers, name1, color1, name2, color2, ...
						echo "<th style=\"color:" . $data[$i] . ";\">" . $data[$i-1] . "</th>";
					}
				?>
			  </tr>
			  <tr>
				<td>Πράσινος</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Μουστάρδας</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Ορχιδέα</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Παγώνη</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Δαμασκηνός</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Φλόγα</td>
				<<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td style="font-weight: bold;">Τι;</td>
			  </tr>
			  <tr>
				<td>Κηροπήγειο</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Στιλέτο</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Σωλήνας</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Περίστροφο</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Σχοινί</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Εργαλείο</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td style="font-weight: bold;">Που;</td>
			  </tr>
			  <tr>
				<td>Αίθουσα Χωρού</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Αίθουσα Μπιλιάρδου</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Θερμοκήπειο</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Τραπεζαρία</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Χολ</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Κουζίνα</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Βιβλιοθήκη</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Σαλόνι</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			  <tr>
				<td>Δωμάτιο Μελέτης</td>
				<?php
					for ($j = 1; $j <= $data[0]; $j++) {
						echo "<td></td>";
					}
				?>
			  </tr>
			</table>
		</div>
	</body>
	<script>
		var table = document.getElementById("table");
		
		if (table != null) {
			for (var i = 1; i < table.rows.length; i++) {
				for (var j = 0; j < table.rows[i].cells.length; j++)
					if (j == 0) {
						table.rows[i].cells[j].addEventListener("click", cross);
					}
					else {
						table.rows[i].cells[j].addEventListener("click", pos);
					}
			}
		}
		
		var c = 1;
		
		function cross() {
			if (c == 1) {
				c = 2;
				this.style.backgroundColor = "#ffff80";
			}
			else if (c == 2) {
				c = 3;
				this.style.backgroundColor = "#ff8080";
			}
			else if (c == 3) {
				c = 1;
				this.style.backgroundColor = "#99e699";
			}
		}
		
		var p = 1;
																		
		function pos() {
			if (p == 1) {
				this.style.backgroundColor = "#ffff80";
				this.innerHTML = "???";
				p = 2;
			}
			else if (p == 2) {
				this.style.backgroundColor = "#ff8080";
				this.innerHTML = "NO";
				p = 3;
			}
			else if (p == 3) {
				this.style.backgroundColor = "#99e699";
				this.innerHTML = "YES";
				p = 1;
			}
		}
	</script>
</html>
