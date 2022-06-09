<?php
					
								$sql = "UPDATE accomodation SET acc_slot = acc_slot - data.slot WHERE acc_id = 1"; 
								$qry = mysqli_query($conn, $sql) or die ("wrong ");
									$count = mysqli_num_rows($qry);
							

						?>