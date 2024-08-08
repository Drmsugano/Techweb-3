function deletarUser() {
    let text = "Deseja Excluir o Funcionario";
    if (confirm(text) == true) {
      
    } else {
      alert("Nada foi Excluido");
    }
    document.getElementById("demo").innerHTML = text;
  }