var ctx = document.getElementById('myDoughnutChart').getContext('2d');
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Category A', 'Category B', 'Category C', 'Category D', 'Category E', 'Category F'],
        datasets: [{
            data: [20, 15, 25, 10, 20, 10],
            backgroundColor: ['#ff9999', '#66b3ff', '#99ff99', '#ffcc99', '#c2c2f0', '#ffb3e6'],
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false, // Disable the default legend
            },
            tooltip: {
                enabled: true,
            }
        }
    }
});

// Generate custom legend
var chartLegend = document.getElementById('chartLegend');
var labels = myDoughnutChart.data.labels;
var bgColor = myDoughnutChart.data.datasets[0].backgroundColor;

labels.forEach((label, index) => {
    var legendItem = document.createElement('div');
    legendItem.classList.add('legend-item');

    var colorBox = document.createElement('span');
    colorBox.classList.add('legend-color-box');
    colorBox.style.backgroundColor = bgColor[index];

    var text = document.createElement('span');
    text.innerText = label;

    legendItem.appendChild(colorBox);
    legendItem.appendChild(text);
    chartLegend.appendChild(legendItem);
});