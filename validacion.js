function confirmarborrado(){
	if (!confirm("¿Estás seguro/a de borrarlo?"))
		return false;
	if (!confirm("¿De verdad? Si acepta, se eliminará parte de la información."))
		return false;
		else
		return true;
}
