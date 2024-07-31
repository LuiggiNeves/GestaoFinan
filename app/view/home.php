<?php include 'component/header.php' ?>
</head>

<body>

    <header>
        <?php include_once "component/page/navbar.php" ?>
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


    <?php include 'component/menu-bottom.php' ?>
    <?php include 'component/footer-script.php' ?>
    <?php include 'component/footer.php' ?>
</body>

</html>