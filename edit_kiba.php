<?
include "lib/koneksi.php";
$kueri = mysql_query("SELECT * FROM kib_a WHERE id = '$_GET[id]'");
$row = mysql_fetch_array($kueri);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sarpras | Inventaris</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<link href="assets/css/datepicker_jqui.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="assets/css/jquery.autocomplete.css" type="text/css" rel="stylesheet"/>
	<link href="assets/css/smoothness/jquery-ui-1.8.2.custom.css" rel="stylesheet" /> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body data-spy="scroll" data-target=".subnav" data-offset="50">


  <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./index.html">Sarpras</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
			  <li class="active"><a href="inventaris.php">Inventaris</a></li>
			  <li><a href="barang.php">Barang</a></li>
			  <li><a href="lokasi.php">Lokasi</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">	  
			  <h2>Edit KIB A</h2>
			  <form action="proses_edit_kiba.php" method="post">
				<input type="hidden" name="id" value="<?echo $row['id'];?>">
				<table>
					<tr>
						<td  width="130px">Kode Barang</td>
						<td><input type="text" class="span3" id="kode1" name="kode_barang" placeholder="Kode Barang" value="<?echo $row['kode_barang'];?>"></td>
					</tr>
					<tr>
						<td>Nama Barang</td>
						<td><input type="text" class="span3" id="search1" name="nama_barang" placeholder="Nama Barang" value="<?echo $row['nama_barang'];?>"></td>
					</tr>
					<tr>
						<td>Tahun Pengadaan</td>
						<td>
							<select class="span2" name="thn_pengadaan">
							  <?for($i=1990;$i<=2020;$i++){?>
							  <option><?echo $i;?></option>
							  <?}?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Luas</td>
						<td><input type="text" class="span3" name="luas" placeholder="Luas" value="<?echo $row['luas'];?>"></td>
					</tr>
					<tr>
						<td>Tanggal Pengadaan</td>
						<td><input type="text" class="span3" value="02/08/2011" id="jqui1" name="tgl_pengadaan"></td>
					</tr>
					<tr>
						<td>Letak/Alamat</td>
						<td><textarea row="3" class="span3" name="letak" placeholder="Letak/Alamat"><?echo $row['letak'];?></textarea></td>
					</tr>
					<tr>
						<td>Penggunaan</td>
						<td><input type="text" class="span3" name="penggunaan" placeholder="Penggunaan" value="<?echo $row['penggunaan'];?>"></td>
					</tr>
					<tr>
						<td>Asal-Usul</td>
						<td><input type="text" class="span3" name="asal" placeholder="Asal-Usul" value="<?echo $row['asal'];?>"></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td><input type="text" class="span3" name="harga" placeholder="Harga (Rp)" value="<?echo $row['harga'];?>"></td>
					</tr>
					<tr>
						<td>Hak</td>
						<td><input type="text" class="span3" name="hak" placeholder="Hak" value="<?echo $row['hak'];?>"></td>
					</tr>
					<tr>
						<td>Tanggal Sertifikat</td>
						<td><input type="text" class="span3" name="tgl" placeholder="Tanggal Sertifikat" value="<?echo $row['tgl'];?>"></td>
					</tr>
					<tr>
						<td>No Sertifikat</td>
						<td><input type="text" class="span3" name="nomor" placeholder="No Sertifikat" value="<?echo $row['nomor'];?>"></td>
					</tr>
					<tr>
						<td>Keterangan</td>
						<td><textarea row="3" class="span3" name="ket" placeholder="Keterangan"><?echo $row['ket'];?></textarea></td>
					</tr>
				</table>
				<button type="submit" class="btn btn-primary">Selesai</button>
			  </form>

     <!-- Footer
      ================================================== -->
      <footer class="footer">
	  <p class="nav pull-right">&copy; 2013 <a target="_blank" href="https://twitter.com/apikhost">@apikhost</a>. Made with <a target="_blank" href="http://getbootstrap.com">Bootstrap.</a> <a href="#">Back to top</a></p>
      </footer>

    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/application.js"></script>
	<script src="assets/js/mootools-core.js" type="text/javascript"></script>
	<script src="assets/js/mootools-more.js" type="text/javascript"></script>
	<script src="assets/js/Locale.en-US.DatePicker.js" type="text/javascript"></script>
	<script src="assets/js/Picker.js" type="text/javascript"></script>
	<script src="assets/js/Picker.Attach.js" type="text/javascript"></script>
	<script src="assets/js/Picker.Date.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/jquery-1.4.2.min.js"></script> 
	<script type="text/javascript" src="assets/js/jquery-ui-1.8.2.custom.min.js"></script>
	
	<script>
		window.addEvent('domready', function(){
			new Picker.Date('jqui1', {
				pickerClass: 'datepicker_jqui'
			});
		});
		
		jQuery(document).ready(function(){
			var ac_config = {
				source: "autocomplete_barang.php",
				select: function(event, ui){
					$("#kode1").val(ui.item.kode);
				},
				minLength:1
			};
			$("#search1").autocomplete(ac_config);
		});
		
		jQuery(document).ready(function(){
			var ac_config = {
				source: "autocomplete_lokasi.php",
				minLength:1
			};
			$("#lokasi").autocomplete(ac_config);
		});
	</script>

  </body>
</html>
