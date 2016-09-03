<?php

// Incluimos a classe PHPExcel
include  'PHPExcel/Classes/PHPExcel.php';

// Instanciamos a classe
$objPHPExcel = new PHPExcel();


/*Setando as configurações da font*/
$objPHPExcel->getActiveSheet()
	->getStyle('A1:D1')
		->applyFromArray(
				array('font' =>array(
					'color' => array('rgb' => 'FFFFFF'),
					'bold' =>true,
					'size'  => 10,
					'name'  => 'Arial Unicode MS'
				    )));


// Centralizando as colunas na horizontal e vertical
$objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getAlignment()->applyFromArray(
	array(
	    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	    ));


/*Bordas da tabela */
$objPHPExcel->getActiveSheet()->getStyle('A1:D1')->applyFromArray(
	array('borders' => array(
		'allborders' => array(
		'style' => PHPExcel_Style_Border::BORDER_THIN
	    ))));		


// Adicionamos um cor na coluna de A1 até D1 
$objPHPExcel->getActiveSheet()->getStyle('A1:D1')->applyFromArray(array(		
			'fill' => array(
				'type' => PHPExcel_Style_Fill::FILL_SOLID,
				'color' => array('rgb' => '27408C')
			    ),	

			/*Aqui da para configurar a font tbm*/

			/*'font' =>array(
					'color' => array('rgb' => 'FFFFFF'),
					'bold' =>true,
					'size'  => 10,
					'name'  => 'Arial Unicode MS'
				    )*/
		));


// Criamos as colunas
$objPHPExcel->setActiveSheetIndex(0)
				/*->mergeCells('A1:D1') //Mesclando as colunas
			    ->mergeCells('A2:D2') //Mesclando as colunas
			    ->mergeCells('A4:D4') //Mesclando as colunas
			    ->mergeCells('A5:D5') //Mesclando as colunas
			    ->mergeCells('A6:D6') //Mesclando as colunas
			    ->mergeCells('A7:D7') //Mesclando as colunas		
			    ->mergeCells('A8:D8') //Mesclando as colunas

				->mergeCells("A1:A2") // Mesclando linhas
				->mergeCells("B1:B2") // Mesclando linhas
				->mergeCells("C1:C2") // Mesclando linhas*/
            ->setCellValue('A1', 'Titulo Coluna 1' )
            ->setCellValue('B1', "Titulo Coluna 2" )
            ->setCellValue("C1", "Titulo Coluna 3" )
            ->setCellValue("D1", "Titulo Coluna 4" );


// Configurando largura para cada coluna
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(90);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);

//Resultando das linhas
$objPHPExcel->setActiveSheetIndex(0)				
			  /*Usar um foreach para listar os resultados*/	
			  /*->setCellValue(COLUNA + LINHA, VALOR)*/	
			  /*->setCellValue("A". $linha, $resultado)*/
			    ->setCellValue("A". 2, 'Teste')
			    ->setCellValue("B". 2, 'Teste')
			    ->setCellValue("C". 2, 'Teste')
			    ->setCellValue("D". 2, 'Teste')

			    ->setCellValue("A". 3, 'Teste')
			    ->setCellValue("B". 3, 'Teste')
			    ->setCellValue("C". 3, 'Teste')
			    ->setCellValue("D". 3, 'Teste')

			    ->setCellValue("A". 4, 'Teste')
			    ->setCellValue("B". 4, 'Teste')
			    ->setCellValue("C". 4, 'Teste')
			    ->setCellValue("D". 4, 'Teste');





// Nome da Planilha
$objPHPExcel->getActiveSheet()->setTitle('nome da planilha');

// Cabeçalho do arquivo para ele baixar
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="nome_arquivo.xls"');
header('Cache-Control: max-age=0');
// Se for o IE9, isso talvez seja necessário
header('Cache-Control: max-age=1');

// Acessamos o 'Writer' para poder salvar o arquivo
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

// Salva diretamente no output, poderíamos mudar arqui para um nome de arquivo em um diretório ,caso não quisessemos jogar na tela
$objWriter->save('php://output'); 

exit;

?>