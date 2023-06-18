const cpfInput = document.getElementById("cpf");

cpfInput.addEventListener("input", formatCPF);

function formatCPF() {
  let cpf = cpfInput.value;
  cpf = cpf.replace(/\D/g, ""); // Remove todos os caracteres não numéricos

  if (cpf.length > 3 && cpf.length <= 6) {
    cpf = cpf.replace(/(\d{3})(\d+)/, "$1.$2"); // Adiciona o primeiro ponto
  } else if (cpf.length > 6 && cpf.length <= 9) {
    cpf = cpf.replace(/(\d{3})(\d{3})(\d+)/, "$1.$2.$3"); // Adiciona o segundo ponto
  } else if (cpf.length > 9) {
    cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d+)/, "$1.$2.$3-$4"); // Adiciona o traço
  }

  cpfInput.value = cpf;
}

const telefoneInput = document.getElementById("celular");

telefoneInput.addEventListener("input", formatTelefone);

function formatTelefone() {
  let telefone = telefoneInput.value;
  telefone = telefone.replace(/\D/g, ""); // Remove todos os caracteres não numéricos

  if (telefone.length > 2 && telefone.length <= 6) {
    telefone = telefone.replace(/(\d{2})(\d+)/, "($1) $2"); // Adiciona o primeiro traço
  } else if (telefone.length > 6) {
    telefone = telefone.replace(/(\d{2})(\d{5})(\d+)/, "($1) $2-$3"); // Adiciona o traço
  }

  telefoneInput.value = telefone;
}