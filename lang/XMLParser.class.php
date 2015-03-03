<?php
class XMLParser{

	var $file;
	
	function XMLParser(){
	}
	
	// ABRE EL ARCHIVO XML
	function openXML($fileName){
		$this->file = fopen($fileName,"r");
		if ($this->file)
			return true;
		else
			return false;
	}
	
	function rewindFile(){
		rewind($this->file);
	}
	
	function getElement2($element,$rewind=false){
		$elemento = "";
		$c = "";
		// VOY AL INICIO DEL ARCHIVO
		if($rewind==true)
			rewind($this->file);
		// MIENTRAS NO LO ENCUENTRE Y NO SEA EL feof
		$element="<".$element.">";
		while (strcmp($element,$elemento)!=0 && !feof($this->file)){
			$elemento="";
			// MIENTRAS EL CARACTER LEIDO NO SEA '<' Y NO SEA feof
			while(($c != '<') && (!feof($this->file)))
				$c = fgetc($this->file);
				
			$elemento .= $c;
			
			// MIENTRAS EL CARACTER LEIDO NO SEA '>' Y NO SEA feof
			while($c!='>' && !feof($this->file)){
				$c = fgetc($this->file);
				$elemento .= $c;
			}
		}
		
		// GRABO EL DATO REQUERIDO EN $dato Y LO DEVUELVO
		$c=fgetc($this->file);
		while(($c != '<') && (!feof($this->file))){
			$dato.=$c;
			$c=fgetc($this->file);
		}				
		return $dato;
	}
	
	// BUSCA EL ELEMENTO $element EN $file Y LO DEVUELVE
	function getElement($element){
		
		$elemento = "";
		$dato="";
		$c = "";
		// VOY AL INICIO DEL ARCHIVO
		rewind($this->file);
		// MIENTRAS NO LO ENCUENTRE Y NO SEA EL feof
		$finElemento="</".$element.">";
		$element="<".$element.">";
		while (strcmp($element,$elemento)!=0 && !feof($this->file)){
			$elemento="";
			// MIENTRAS EL CARACTER LEIDO NO SEA '<' Y NO SEA feof
			while(($c != '<') && (!feof($this->file)))
				$c = fgetc($this->file);
				
			$elemento .= $c;
			
			// MIENTRAS EL CARACTER LEIDO NO SEA '>' Y NO SEA feof
			while($c!='>' && !feof($this->file)){
				$c = fgetc($this->file);
				$elemento .= $c;
			}
			//echo $elemento;
		}
		
		// GRABO EL DATO REQUERIDO EN $dato Y LO DEVUELVO
		/* VIEJO
		$c=fgetc($this->file);
		while(($c!='<') && (!feof($this->file))){
			$dato.=$c;
			$c=fgetc($this->file);
		}
		return $dato;
		*/
		return stream_get_line($this->file, 1000000, $finElemento);
	}
}
?>