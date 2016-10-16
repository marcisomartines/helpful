$dataVenda   = new DateTime($reg['ve_data']);
$dataRecarga = new DateTime(date("Y-m-d"));


$intervalo = $dataVenda->diff($dataRecarga);


if($intervalo->d <= 2){
	
}