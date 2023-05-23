 function passaModal(id,nome,descricao,duracao,url){
   
	 document.getElementById("id2").value=id;
	 document.getElementById("nome2").value=nome;
	 document.getElementById("descricao2").value=descricao;
	 document.getElementById("duracao2").value=duracao;
	 document.getElementById("arquivo").src=url;


	}
 function formCadastrar(){
	
	const formCad = document.getElementById("formCadastrar")
	formCad.style.display = "block"
	formCad.scrollIntoView({ behavior: 'smooth' });

} 
function formAlterar(){
	
	const formAlt = document.getElementById("formAlterar")
	formAlt.style.display = "block"
	formAlt.scrollIntoView({ behavior: 'smooth' });

}
function formDeletar(){
	
	const formDel = document.getElementById("formDeletar")
	formDel.style.display = "block"
	formDel.scrollIntoView({ behavior: 'smooth' });

}