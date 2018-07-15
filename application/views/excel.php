<?php
	include(base_url("assets/PHPExcel-1.8/Classes/PHPExcel.php"));
	$obj = new PHPExcel();
	
	$rslt = mysql_query("Select * from (pengguna as p inner join transaksi_1 as t on t.email=p.email) inner join
						lowongan as l on l.idlo = t.id_lo");
	
	 $obj->setActiveSheetIndex(0)->setCellValue('A1','Email')
								 ->setCellValue('B1','Nama Lengkap')
								 ->setCellValue('C1','Alamat')
								 ->setCellValue('D1','Pewawancara')
								 ->setCellValue('E1','Perusahaan')
								 ->setCellValue('F1','Definisi');
	$i=2;
	while($rec = mysqli_fetch_assoc($rslt)){
			
			$obj->setActiveSheetIndex(0)->setCellValue("A$i",$rec['email'])
								 ->setCellValue("B$i",$rec['nama'])
								 ->setCellValue("C$i",$rec['alamat'])
								 ->setCellValue("D$i",$rec['kontak'])
								 ->setCellValue("E$i",$rec['perusahaan'])
								 ->setCellValue("F$i",$rec['definisi']);
		$i++;
	}
	
	$penulis = PHPExcel_IOFactory::createWriter($obj,'Excel2007');
	$penulis-> save('datariwayat.xlsx');
	
	header("Location:index.php"); 
?>