
	<t1>Liste des formations disponibles</t1>

</div>

<?php

while($info = $data->fetch()){

	if($n % 2 == 0){
		$class = 'trainingBox1';
		$class2 = 'trainingContent1';
	}
	else{
		$class = 'trainingBox2';
		$class2 = 'trainingContent1';
	}

	echo '<div class=' . $class . '>
			<div class=' . $class2 . '>
				<t2>' . $info[1] . '</t2>
				<p>' . $info[2] . '</p>
				<a class=moreInfos href=' . $info[3] . ' target=_blank >Plus d\'informations</a>
			</div>
		</div>';

	$n++;
}