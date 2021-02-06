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

			echo $data;
		?>
		
		<div class="content">
			<label id="title">Cluedo Notes</label>
			<br><br>
			<table id="table">
			  <tr>
				<th>Ποιος;</th>
				<?php
					//for ($i = 0; $i <= $data[0]; $i++;) {
						echo "<th style="color:$data[2];">$data[1]</th>"
					//}
				?>
			  </tr>
			  <tr>
				<td>Πράσινος</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Μουστάρδας</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Ορχιδέα</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Παγώνη</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Δαμασκηνός</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Φλόγα</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td style="font-weight: bold;">Τι;</td>
			  </tr>
			  <tr>
				<td>Κηροπήγειο</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Στιλέτο</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Σωλήνας</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Περίστροφο</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Σχοινί</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Εργαλείο</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td style="font-weight: bold;">Που;</td>
			  </tr>
			  <tr>
				<td>Αίθουσα Χωρού</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Αίθουσα Μπιλιάρδου</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Θερμοκήπειο</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Τραπεζαρία</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Χολ</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Κουζίνα</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Βιβλιοθήκη</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Σαλόνι</td>
				<td></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr>
				<td>Δωμάτιο Μελέτης</td>
				<td></td>
				<td></td>
				<td></td>
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
				this.innerHTML = "ΔΕΝ";
				p = 3;
			}
			else if (p == 3) {
				this.style.backgroundColor = "#99e699";
				this.innerHTML = "ΕΧΕΙ";
				p = 1;
			}
		}
	</script>
</html>
