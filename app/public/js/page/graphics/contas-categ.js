const ctx = document.getElementById('myPieChart').getContext('2d');
const data = {
    labels: ['Categoria 1', 'Categoria 2', 'Categoria 3', 'Categoria 4'],
    datasets: [{
        label: 'Despesas',
        data: [10, 20, 30, 40],
        backgroundColor: [
            'rgba(255, 99, 132)',
            'rgba(54, 162, 235)',
            'rgba(255, 206, 86)',
            'rgba(75, 192, 192)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1,
        hoverOffset: 4,
        cutout: '50%'  // Isso cria a abertura no meio
    }]
};

const config = {
    type: 'doughnut', // Tipo de gráfico para criar uma abertura no meio
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false, // Esconde a legenda padrão
            }
        }
    },
    plugins: [{
        id: 'customLegend',
        afterUpdate: function (chart) {
            const legendContainer = document.getElementById('legend-desp-cat');
            const items = chart.options.plugins.legend.labels.generateLabels(chart);
            let legendHTML = '';
            items.forEach(item => {
                legendHTML += `<div class="legend-item">
                    <span class="legend-color" style="background-color:${item.fillStyle};"></span>
                    ${item.text}
                </div>`;
            });
            legendContainer.innerHTML = legendHTML;
        }
    }]
};

const myPieChart = new Chart(ctx, config);