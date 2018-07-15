<?php
			$this->load->library('pdf');
			$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->Open();
			$pdf->SetTitle('Laporan Pendaftaran');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('Author');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			
			$html='  
					<h3>DisaKerja</h3>
					<h4>Situsnya Para Pencari Kerja untuk Disabilitas</h4>
					<table>';
					$i = 0;
					foreach($profil->result() as $row){ $i++;
/*			$html.= '
						<tr bgcolor="#ffffff">
							<th width="35%" align="center">Nama Lengkap : </th>
							<th width="45%" align="center"></th>
						</tr>
						
						<tr bgcolor="#ffffff">
							<th width="35%" align="center">Alamat : </th>
							<th width="45%" align="center">'.$row->alamat.'</th>
						</tr>
						
						<tr bgcolor="#ffffff">
							<th width="35%" align="center">Keahlian : </th>
							<th width="45%" align="center">'.$row->keahlian.'</th>
						</tr>
						
						<tr bgcolor="#ffffff">
							<th width="35%" align="center">Email : </th>
							<th width="45%" align="center">'.$row->email.'</th>
						</tr>
						
						<tr bgcolor="#ffffff">
							<th width="35%" align="center">No Hp : </th>
							<th width="45%" align="center">'.$row->no_hp.'</th>
						</tr>
						
						<tr bgcolor="#ffffff">
							<br/><br/>
							<p>Tempat Pelamaran</p>
						</tr>
						
						<tr bgcolor="#ffffff">
							<th width="35%" align="center">Nama Lengkap Pewawancara: </th>
							<th width="45%" align="center">'.$row->kontak.'</th>
						</tr>
						
						<tr bgcolor="#ffffff">
							<th width="35%" align="center">Perusahaan : </th>
							<th width="45%" align="center">'.$row->perusahaan.'</th>
						</tr>
						
						<tr bgcolor="#ffffff">
							<th width="35%" align="center">Definisi : </th>
							<th width="45%" align="center">'.$row->definisi.'</th>
						</tr>
						
						<tr bgcolor="#ffffff">
							<th width="35%" align="center">Lowongan : </th>
							<th width="45%" align="center">'.$row->lowongan.'</th>
						</tr>';
					}
			$html.='</table>';
			$html.='<br/><br/>
					<h1 style= align: center>Jangan lupa untuk membawa CV dan Portofolio</h1>
					';
					*/
					}
			$pdf->writeHTML($html, true, false, true, false, '');
			$pdf->Output('Laporan_Pendaftaran.pdf', 'I');
?>