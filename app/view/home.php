<?php include 'component/header.php' ?>
<link rel="stylesheet" href="path/to/your/css/styles.css">
</head>

<body>

    <header>
        <div class="nav-bar-one d-flex">
            <div>
                <i class="bi bi-person-circle"></i>
                <i>Luiggi </i>
            </div>


        </div>
        <nav>
            <div class="Container_Content">
                <div class="Container_Panel">
                    <div class="panel-content-real">
                        <p class="legend-m">Resumo total</p>
                        <p>R$ -2.000,00</p>
                    </div>

                    <div class="panel-second d-flex">
                        <div class="pattern-panel-info-container">
                            <div class="pattern-info">
                                <p>Receita</p>
                            </div>
                            <div class="value-pattern-panel">
                                <i class="bi bi-caret-up-fill arrows-up"></i>
                                <i>20000</i>
                            </div>
                        </div>

                        <div class="pattern-panel-info-container">
                            <div class="pattern-info">
                                <p>Despesas</p>
                            </div>
                            <div class="value-pattern-panel">
                                <i class="bi bi-caret-down-fill arrows-down"></i>
                                <i>10000</i>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </nav>
    </header>

    <main>
        <div class="container_main">
            <div class="content-main">
                <div class="contas-grafico">
                    <div>
                        <h4>Grafico Contas</h4>
                    </div>

                    <div class="grafic-contas">
                        <div class="grafic-content">
                            <canvas id="myDoughnutChart"></canvas>
                        </div>
                        <div class="legend-content" id="chartLegend">
                            <!-- Legends will be dynamically inserted here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="Menu_Fixed_Bottom_Container">
        <nav class="nav-content-menu">
            <div class="Content-menu-ul">
                <ul>
                    <li class="li-pattern">
                        <div>
                            <i class="bi bi-currency-dollar"></i>
                        </div>

                    </li>

                    <li class="li-item-center">
                        <div class="Item-Center">
                            <i class="bi bi-plus-circle"></i>
                        </div>

                    </li>

                    <li class="li-pattern">
                        <div class="">
                            <i class="bi bi-file-earmark-bar-graph-fill"></i>
                        </div>

                    </li>
                </ul>
            </div>
        </nav>
    </div>



<!--TEMPORARIO ABAIXO-->


    <script>
        function checkResolution() {
            if (window.innerWidth > 600) {
                document.body.classList.add('blocked');
                document.body.innerHTML = '<h1>Este site não está disponível para resoluções superiores a 600px de largura.</h1>';
            }
        }

        window.onload = checkResolution;
        window.onresize = checkResolution;
    </script>




    <script>
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
    </script>

    <?php include 'component/footer-script.php' ?>
    <?php include 'component/footer.php' ?>
</body>

</html>