<?php
	include 'ceklogin.php';
	include 'function.php';
	
	$id = $_GET["id"];

	if ( hapusbuku($id) > 0 ) {
		echo "
			<script>
          		alert('Buku Berhasil Dihapus!');
          		window.location = 'managebuku.php';
        	</script>
		";
	} else {
		echo "
			<script>
          		alert('Buku Berhasil Ditambah!');
          		window.location = 'managebuku.php';
        	</script>
		";
	}
?>