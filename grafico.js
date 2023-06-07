// Obtém uma referência ao elemento <canvas>
var canvas = document.getElementById('meuGrafico');

// Cria um objeto de contexto 2D para o gráfico
var ctx = canvas.getContext('2d');

// Dados para o gráfico
var data = {
  labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
  datasets: [{
    label: 'Vendas',
    data: [12, 19, 3, 5, 2],
    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Cor de fundo das barras
    borderColor: 'rgba(54, 162, 235, 1)', // Cor da borda das barras
    borderWidth: 1 // Largura da borda das barras
  }]
};

// Configurações do gráfico
var options = {
  responsive: true, // Torna o gráfico responsivo
  scales: {
    y: {
      beginAtZero: true // Começa o eixo Y a partir de zero
    }
  }
};

// Cria o objeto de gráfico de barras
var meuGrafico = new Chart(ctx, {
  type: 'bar', // Tipo de gráfico (no caso, de barras)
  data: data, // Dados do gráfico
  options: options // Configurações do gráfico
});
