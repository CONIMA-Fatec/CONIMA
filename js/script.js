
/* Script do Calendário */
var conteudo20 = document.getElementById("d20");
var conteudo21 = document.getElementById("d21");
var conteudo22 = document.getElementById("d22"); // Corrigido para d22
var botao20 = document.getElementById("b20");
var botao21 = document.getElementById("b21");
var botao22 = document.getElementById("b22");

// Função para mostrar o conteúdo e definir o botão padrão
function mostrarConteudo(botaoClicado, conteudoMostrar) {
  // Esconder todos os conteúdos
  conteudo20.style.display = "none";
  conteudo21.style.display = "none";
  conteudo22.style.display = "none";

  // Mostrar o conteúdo clicado
  conteudoMostrar.style.display = "block";

  // Definir o botão padrão (adicionando uma classe)
  botao20.classList.remove("botao-padrao");
  botao21.classList.remove("botao-padrao");
  botao22.classList.remove("botao-padrao");
  botaoClicado.classList.add("botao-padrao");
}

// Adicionar eventos de clique aos botões
botao20.addEventListener("click", function() {
  mostrarConteudo(botao20, conteudo20);
});

botao21.addEventListener("click", function() {
  mostrarConteudo(botao21, conteudo21);
});

botao22.addEventListener("click", function() {
  mostrarConteudo(botao22, conteudo22);
});

// Definir o botão 20 como padrão inicialmente (adicionando uma classe)
botao20.classList.add("botao-padrao");

/*
Contador
 */

let dataFinal = new Date();
let teste = document.getElementById("dayscont");
console.log(dataFinal)
/*Carrossel Passador*/
    let slide = document.querySelectorAll('.slide-container');
    let carousel = 0;
    
    function next(){
        slide[carousel].classList.remove('active');
        carousel = (carousel + 1) % slide.length;
        slide[carousel].classList.add('active');
    }
    
    function prev(){
        slide[carousel].classList.remove('active');
        carousel = (carousel - 1 + slide.length) % slide.length;
        slide[carousel].classList.add('active');
    }

