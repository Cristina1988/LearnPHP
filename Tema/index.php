<?php
echo 'Rezultatul este: '.((5+5)/(2+3));
echo "<br>";
echo 'Rezultatul este: '.(2+((5+5)+(5+5)));
echo "<br>";
echo 'Rezultatul este: '. 2*(4+4);
echo "<br>";
echo 'Rezultatul este: '. (5*5)+6;
echo "<br>";
echo 'Rezultatul este: '. pow(2,2);
echo "<br>";
echo 'Rezultatul este: '. 2*pow(2,2)+2;
echo "<br>";
echo 'Rezultatul este: '. ((10*2)+(3%2));
echo "<br>";
echo 'Rezultatul este: '. number_format((10*pow(2,3)+pow(2,3)+(3+2)));
echo "<br>";
echo 'Rezultatul este: ' . number_format(4.10);
echo "<br>";
$name="Cristina";
echo $name;
echo "<br>";
$name_1="Cristina";
$name_2="Salut";
echo "$name_2 " . $name_1;
echo "<br>";
$n="Mircea cel Batran";
$d="Salut";
echo $d." ".$n;
echo "<br>";
echo <<<Sofia
Sofi este o fetita frumoasa si "lipicioasa".
Sofia;
echo"<br>";
echo <<<'Cristina'
Cocosul striga: 'Cucurigu boieri mari, dati punguta cu doi bani'.
Cristina;
echo "<br>";
$member=[
    'id'=>1,
    'name'=>'Cristian',
    'country'=>'Romania',
];
echo 'Numele este: '.$member['name'];
echo "<br>";
echo 'Provine din tara: '.$member['country'];
echo "<br>";
$list=['Paine','Oua','Faina'];
echo $list[0];
echo "<br>";
echo "<pre>";
var_dump($list);
echo "<br>";
$lista_masini=array(
    array('Model'=>'BMW','TOYOTA'),
    array('Model'=>'Honda','Nissan'),
    array('Model'=>'BMW','Ford','sub_array'=>array('roti'=>4),'sub_sub_array'=>array('usi'=>5)) 
);
echo $lista_masini[0]['Model'];
echo"<br>";
echo $lista_masini[2]['sub_array']['roti'];
echo "<br>";
$familie=array('Mama','Tata', 'Bunica');
echo $familie[0];
echo "<br>";
echo $familie[0]="Sora";
echo "<br>";
echo $familie[2]="Frate";
echo"<pre>";
var_dump($familie);


?>