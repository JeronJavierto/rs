<!DOCTYPE html>
<html>
<link href='../../stylesheet/reservationform.css' rel='stylesheet' />
<body>
	<!-- The Modal -->
	<div id="myModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
			</div>
			<form action="insert_calendar2.php" method="POST" name="form1" autocomplete="OFF">
				<div class="modal-body">
					Title: <input type='text' name='title' id='name' class='text'><br>
					Number of participants: <input type='text' name='participants' id='parti' class='text'><br>
					Facility:<?php
								include("dropdown.php");
							?>												
					<input type='submit' name="submit" value='submit' id="myBtn"/>
				</div>				
			</form>
		</div>
	</div>

	<script type="text/javascript">
		var modal = document.getElementById("myModal");

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</body>
</html>