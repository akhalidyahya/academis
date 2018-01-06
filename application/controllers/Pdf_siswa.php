<?php
Class Pdf_siswa extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(270,7,'Data Siswa',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(270,7,'@Aflowz Performance',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(30,10,'NIS',1,0);
        $pdf->Cell(50,10,'Nama Lengkap',1,0);
        $pdf->Cell(85,10,'Alamat',1,0);
        $pdf->Cell(40,10,'TTL',1,1);
        $pdf->SetFont('Arial','',10);
        $guru = $this->db->get('siswa')->result();
        foreach ($guru as $row){
            $pdf->Cell(30,10,$row->nis,1,0);
            $pdf->Cell(50,10,$row->nama_depan." ".$row->nama_tengah." ".$row->nama_belakang,1,0);
            $pdf->Cell(85,10,$row->alamat." ".$row->kelurahan,1,0);
            $pdf->Cell(40,10,$row->tempat_lahir.", ".$row->tanggal_lahir,1,1);
        }
        $pdf->Output();
    }
}
