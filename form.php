<?php echo "</BR><div align ='center'><font color ='#CC0033' size='5'>Proses Konversi Satuan Panjang dari meter</font></div></BR>" ?>

<FORM name="frm_hitung" action="proses.php" method="post">
	<input type="text" name="angka"/>
	<select name="cmbop">
		<option value="inc">inc</option>
		<option value="cm">cm</option>
		<option value="mil">mil</option>
		<option value="ft">ft</option>
		<option value="km">km</option>
		<option value="us">us</option>	
		<option value="fmi">fmi</option>
		<option value="fm">fm</option>
		<option value="angs">angs</option>
		<option value="tc">tc</option>
		<option value="pc">pc</option>
	</select>
	<input type="submit" value="="/>
</FORM>