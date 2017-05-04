<div align="center">
		<div id="list-data" class="well">
		  <h2><u>MASUKAN PENGADUAN </u></h2>
		      <table width="621" height="355" border="0">
		          <form id="form1" method="post" action="<?php echo site_url('pengaduan/insert')?>">
                    <tr>
                    <td>Kode Laporan </td>
                    <td>:</td>
                    <td><input name="kode_laporan" type="text"  size="15" class="form-control"/></td>
                    </tr>   
            		<tr>
                    <td>Tanggal Melapor </td>
                    <td>:</td>
                    <td><input type="date" class="form-control" id="tgl_melapor" name="tgl_melapor" required/>
            		</tr>
            		<tr>
                    <td>Dinas </td>
                    <td>:</td>
                    <td><select name="divisi" class="form-control">
                        <option selected="selected">===Pilih===</option>
                        <option>Kesehatan</option>
                        <option>Pertamanan</option>
                        <option>Sosial dan Tenaga Kerja</option>
                        <option>Pariwisata</option>
                        <option>Tataruang dan Ciptakarya</option>
                        <option>Pendidikan</option>
            			</select>
            		</td>
            		</tr>
            		<tr>
                    <td>Judul Laporan </td>
                    <td>:</td>
                    <td><input name="judul_laporan" type="text"  size="15" class="form-control"/></td>
            		</tr>
            		<tr>
                    <td>Tuliskan Laporan Anda </td>
                    <td>:</td>
                    <td><textarea type="text" name="laporan" class="form-control"/></textarea></td>
            		</tr> 
            		<tr>
                    <td colspan="3"><div align="center">
                        <input name="submit" type="submit" value="Submit" class="btn btn-success btn-small" />
                        <input type="reset" name="reset" value="Reset" class="btn btn-warning btn-small"/>
            			
            			</div></td>
		            </tr>
                    </table>
                    </form>
            </div>
        </div>
