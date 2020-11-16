<?php
require ('fpdf/fpdf.php');

    class PDF extends FPDF
    {

        function Header()
        {   
            $this->Image('./img./cintillo_daa_reportes.png', 4, 5, 205);  //CINTILLO DEPARTAMENTAL
            $this->Ln(43);
            $this->SetFont('Arial', 'B', 18);
            $this->Cell(-5);
            $this->Cell(267, 10, utf8_decode('ACTA DE CALIFICACIONES'),0,0,'C');
            $this->Ln(7);
            $this->SetFont('Arial','B', 14);  //TIPO Y TAMAÑA DE LETRA
            $this->Cell(-5);    
            $this->Cell(267, 10, utf8_decode('PERÍODO ACADÉMICO:'),0,0,'C');

            $this->Ln(20);      //SALTO DE LINEA

            //$this->Cell(100,12,"Santa Ana de Coro; ". date('d/m/Y'));
            $this->SetFillColor(217, 217, 217); //COLOR DE RELLENO
            $this->SetFont('Arial','B', 10);  //TIPO Y TAMAÑA DE LETRA
            $this->SetLineWidth(0.4); // Ancho del borde (En mm)
            $this->Cell(-5);
            $this->MultiCell(60, 7, utf8_decode('UNIDAD CURRICULAR (U.C.):'), 1, 'C', 1);
            $this->MultiCell(23, 7, utf8_decode('CÓDIGO MATERIA:'), 1, 'C',  1);
            $this->MultiCell(23, 7, utf8_decode('SECCIÓN:'), 1, 'C', 1);
            $this->MultiCell(23, 7, utf8_decode('UNIDADES DE CRÉDITOS:'), 1, 'C', 1);
            $this->MultiCell(23, 7, utf8_decode(''), 1, 'C');
            $this->MultiCell(23, 7, utf8_decode(''), 1, 'C');
            $this->MultiCell(23, 7, utf8_decode(''), 1, 'C');
            $this->MultiCell(23, 7, utf8_decode(''), 1, 'C');
            $this->MultiCell(60, 7, utf8_decode('NOMBRE DEL DOCENTE: '), 1, 'C', 1);
            $this->MultiCell(23, 7, utf8_decode('CÉDULA DEL DOCENTE:'), 1, 'C',  1);
            $this->MultiCell(23, 7, utf8_decode('NOTA MÍNIMA APROBATORIA:'), 1, 'C', 1);
            $this->MultiCell(23, 7, utf8_decode('FECHA EMISIÓN:'), 1, 'C', 1);
            $this->MultiCell(23, 7, utf8_decode(''), 1, 'C');
            $this->MultiCell(23, 7, utf8_decode(''), 1, 'C');
            $this->MultiCell(23, 7, utf8_decode(''), 1, 'C');
            $this->MultiCell(23, 7, utf8_decode(''), 1, 'C');

            $this->Ln(3);      //SALTO DE LINEA

            $this->Cell(12, 7, '#', 1, 'C', 1);
            $this->MultiCell(35, 7, utf8_decode('Cédula de Identidad'), 1, 'C', 1);
            $this->MultiCell(23, 7, utf8_decode('Cód. Est.'), 1, 'C', 1);
            $this->MultiCell(70, 7, utf8_decode('Apellidos y Nombres'), 1, 'C', 1);
            $this->MultiCell(15, 7, utf8_decode('Calificación (Num.)'), 1, 'C', 1);
            $this->MultiCell(20, 7, utf8_decode('Calificación (Letra)'), 1, 'C', 1);
            $this->MultiCell(20, 7, utf8_decode('Aprobó)'), 1, 'C', 1);
        }

        function Footer()
        {
            $this->SetY(-15);   //posición: a 1,5 cm del Final
            $this->SetFont('Arial','B', 8);  //Tipo de Letra o Fuente
            $this->Cell(0, 10, utf8_decode('Página ').$this->PageNo().'de {nb}',0,0,'C');  // Numeración de la Página
        }
    }

//require ('libreria.php');


//$consulta = "SELECT * FROM alumnos";
//$resultado = $mysqli->query($consulta);

// Creación del objeto de la clase heredada
    $pdf = new PDF('P','mm','Letter');
    $pdf->AliasNbPages();  //Genera el numero de paginas finales
    $pdf->AddPage();  //Agrega una nueva Página
    $pdf->SetFont('Arial','B',12);

//    while ($row = $resultado->fetch_assoc()){
//        $pdf->Cell(10, 10, $row['cod_estud'], 1, 0, 'C', 0);
//        $pdf->Cell(90, 10, $row['nombres'], 1, 0, 'C', 0);
//        $pdf->Cell(90, 10, $row['apellidos'], 1, 0, 'C', 0);
//        $pdf->Cell(20, 10, $row['cedula'], 1, 0, 'C', 0);
//        $pdf->Cell(10, 10, $row['trayecto'], 1, 0, 'C', 0);
//        $pdf->Cell(10, 10, $row['turn_solicitado'], 1, 0, 'C', 0);    
//        $pdf->Cell(10, 10, $row['seccion_asignada'], 1, 0, 'C', 0);
//        $pdf->Cell(15, 10, $row['telf_celular'], 1, 0, 'C', 0);
//        $pdf->Cell(30, 10, $row['email'], 1, 1, 'C', 0);
//    }

//$header = array('#','Cod. Est.','Apellidos','Nombres','Cédula de Identidad','Trayecto a Activar','Turno Solicitado','Sección/Insertar','Teléfono Contacto','E-Mail','Observación (es)')
    $pdf->Output();  //Salida del navegador

?>