 
function enviardados(){ 
	// Nome 
	if(dados.name.value =="" || dados.name.value.length < 8) {
		alert( "Preencha campo NOME por favor!" ); 
		dados.name.focus(); 
		return false;
	} 
	//email
	if( dados.email.value=="" || dados.email.value.indexOf('@')==-1 || dados.email.value.indexOf('.')==-1 ) { 
		alert( "Preencha campo E-MAIL por favor!" );
		dados.email.focus(); 
		return false; 
	} 
	//data
	if( dados.bday.value=="") { 
		alert( "Preencha campo DATA por favor!" );
		dados.bday.focus(); 
		return false; 
	}
	// CPF
	if (dados.cpf.value=="" || dados.cpf.value==0 ) {
		alert( "Preencha o campo CPF por favor!" );
		dados.cpf.focus(); 
		return false; 
	} 			
	// celular
	if (dados.usrtel.value=="" || dados.usrtel.value==0 || dados.usrtel.value==" ") {
		alert( "Preencha o campo Celular por favor!" );
		dados.usrtel.focus(); 
		return false; 
	}
	// sexo
	if (dados.gender.value=="") {
		alert( "Preencha o campo SEXO por favor!" ); 
		return false; 
	}
	// cursos
	if (dados.cursos.value=="") {
		alert( "Preencha o campo CURSOS por favor!" );
		dados.cursos.focus(); 
		return false; 
	} 
	return true; 
}  