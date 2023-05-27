function passaModalAlterar(id, nome, descricao, duracao, url) {

	document.getElementById("id2").value = id;
	document.getElementById("nome2").value = nome;
	document.getElementById("descricao2").value = descricao;
	document.getElementById("duracao2").value = duracao;
	document.getElementById("arquivo").src = url;


}
function passaModalDeletar(id, nome) {
	document.getElementById("idDelete").value = id;
	document.getElementById("nomeDelete").value = nome;

	document.getElementById("labelValue").innerText = ` ID: ${id} \n Nome: ${nome}`;
	
	
}