<div align="right">
	<form  id="form1" method="post" action="<?php echo site_url('buatakun/insert')?>">
				<table>
				<br>
				<br>
				<br>
				<tr>
				<td><input type="text" name="username" class="form-control" placeholder="Masukan username"/></td>
				</tr>
				<tr>
				<td><input type="Password" name="password" class="form-control" placeholder="Masukan Password"/></td>
				</tr>
				<tr>
				<td><input type="text" name="email" class="form-control" placeholder="Masukan E-mail"/></td>
				</tr>
            	<tr>
				<td><input type="text" name="nomerhp" class="form-control" placeholder="Masukan No.HP"/></td>
				</tr>
				<tr>
                   	<td><select name="jeniskelamin" class="form-control">
                        <option selected="selected">===Jenis Kelamin===</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
            			</select>
            		</td>
            	</tr>
				<tr>
				<td>
					<div align="center">
					<input name="Submit" type="submit" value="Buat User" class="btn btn-success btn-small" />
					<input type="reset" name="reset" value="Reset" class="btn btn-warning btn-small"/>
					</div>
				</td>
				</tr>
				</table>
				</form>
			</div>
		</div> 
	</div> 