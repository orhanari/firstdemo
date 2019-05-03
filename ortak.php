<?php

// bar fonksiyonunu yasin ekledi
function bar($arguman) {
	echo "bar fonksiyonu - $arguman - argümanı ile çağırıldı";
	foo($arguman);
}


// buraya foo fonksiyonunu orhan ekleyecek
function foo($patateskizartmasi){
	echo "foo fonksiyonu '$patateskizartmasi' argümanı ile çağırıldı.";
}

// istek sonrası eklenen bir satır
bar(date("Y-m-d h:i:s"));
