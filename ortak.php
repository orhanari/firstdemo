<?php

// bar fonksiyonunu yasin ekledi
function bar($arguman) {
	echo "bar fonksiyonu - $arguman - argümanı ile çağırıldı";
	foo($arguman);
}


// buraya foo fonksiyonunu orhan ekleyecek
fuction foo($patateskizartmasi){
	echo "foo fonksiyonu '$patateskizartmasi' argümanı ile çağırıldı.";
}
