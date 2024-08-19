<?php include 'component/header.php' ?>
</head>

<body>

    <header>
        <?php include_once "component/page/navbar.php" ?>
    </header>

    <main>
        <div id="container_main">
            <div id="content-main">
                <div id="container-desp-cat">
                    <div>
                        <p>Despesas por categoria</p>
                    </div>

                    <div id="container_graphic_desp_cat">
                        <div id="graphic_desp_cat">
                            <canvas id="myPieChart"></canvas>
                        </div>

                        <div id="legend-desp-cat">

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