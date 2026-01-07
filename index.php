<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestor Pro - Gerenciamento de Estoque</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header class="sticky-top">
            <div class="container">
                <div class="row align-items-center justify-content-between py-3">
                    <div class="col-auto logo-section">
                        <h1 class="fs-3 mb-0"><a href="index.php">Gestor Pro</a></h1>
                        <h2>Gerenciamento de Estoque</h2>
                    </div>
                    <div class="col-auto">
                        <nav>
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link active" href="index.php">Início</a></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="fornecedores/listar.php">Fornecedores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="produtos/listar.php">Produtos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="lojas/listar.php">Lojas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="estoque/listar.php">Estoque</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <main class="container">
            <div class="main-container">
                <section>
                    <h3 class="section-title">Resumo Geral</h3>
                    <div class="row g-3">
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                                <h2 class="stat-number">0</h2>
                                <p class="stat-label">Produtos</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h2 class="stat-number">0</h2>
                                <p class="stat-label">Fornecedores</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="bi bi-shop"></i>
                                </div>
                                <h2 class="stat-number">0</h2>
                                <p class="stat-label">Lojas Ativas</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="bi bi-shop-window"></i>
                                </div>
                                <h2 class="stat-number">0</h2>
                                <p class="stat-label">Lojas sem Estoque</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="bi bi-exclamation-triangle"></i>
                                </div>
                                <h2 class="stat-number">0</h2>
                                <p class="stat-label">Estoque < 5</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="stat-card">
                                <div class="stat-icon">
                                    <i class="bi bi-calendar-x"></i>
                                </div>
                                <h2 class="stat-number">0</h2>
                                <p class="stat-label">Vencendo em 30 dias</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-5">
                    <h3 class="section-title">Relatórios</h3>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <a href="relatorios/produto-por-fornecedor.php" class="report-card">
                                <div class="report-icon">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h5>Produtos por Fornecedor</h5>
                                <p>Lista de produtos agrupados por fornecedor</p>
                                <i class="bi bi-arrow-right report-arrow"></i>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="relatorios/estoque-por-produto.php" class="report-card">
                                <div class="report-icon">
                                    <i class="bi bi-boxes"></i>
                                </div>
                                <h5>Estoque por Produto</h5>
                                <p>Quantidade disponível de cada produto</p>
                                <i class="bi bi-arrow-right report-arrow"></i>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="relatorios/estoque-baixo.php" class="report-card">
                                <div class="report-icon">
                                    <i class="bi bi-exclamation-triangle"></i>
                                </div>
                                <h5>Estoque Baixo</h5>
                                <p>Produtos abaixo do limite mínimo</p>
                                <i class="bi bi-arrow-right report-arrow"></i>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
