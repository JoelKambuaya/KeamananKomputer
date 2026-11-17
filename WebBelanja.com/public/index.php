
<?php

require_once __DIR__ . '/../app/controllers/AuthController.php';

// Routing sederhana
$url = $_GET['url'] ?? '';

if ($url === 'auth/login') {
    $auth = new AuthController();
    $auth->login();
    exit;
}

// Halaman utama
include __DIR__ . '/../app/views/partials/head.php';
?>

<body>

    <?php include __DIR__ . '/../app/views/Template/navbar.php'; ?>

    <main class="container-fluid mt-4">

    <section class="container my-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="section-title">Game Terbaru</h3>
            <a href="#" class="view-all">Lihat Semua</a>
        </div>

        <div class="row g-3">

            <!-- Game Card 1 -->
            <div class="col-4">
                <div class="game-card">
                    <div class="game-image">
                        <img src="/WebBelanja.com/public/assets/img/games/eldenring.jpg" alt="Elden Ring">
                        <span class="discount-badge">-20%</span>
                    </div>

                    <div class="game-info">
                        <span class="game-platform">PC · Action RPG</span>
                        <h5>Elden Ring</h5>

                        <div class="game-price">
                            <span class="current-price">Rp 399.000</span>
                            <span class="old-price">Rp 499.000</span>
                        </div>

                        <button class="buy-button">+ Keranjang</button>
                    </div>
                </div>
            </div>

            <!-- Game Card 1: Darkest Dungeon -->
            <div class="col-4">
                <div class="game-card">
                    <div class="game-image">
                        <img src="/WebBelanja.com/public/assets/img/games/darkest-dungeon.jpg" alt="darkest dungeon">
                        <span class="discount-badge">-20%</span>
                    </div>
                    <div class="game-info">
                        <span class="game-platform">PC · Roguelike RPG</span>
                        <h5>Darkest Dungeon</h5>
                        <div class="game-price">
                            <span class="current-price">Rp 75.000</span>
                            <span class="old-price">Rp 95.000</span>
                        </div>
                        <button class="buy-button">+ Keranjang</button>
                    </div>
                </div>
            </div>

            <!-- Game Card 2: Persona 3 -->
            <div class="col-4">
                <div class="game-card">
                    <div class="game-image">
                        <img src="/WebBelanja.com/public/assets/img/games/p3.jpg" alt="p3">
                        <span class="discount-badge">-15%</span>
                    </div>
                    <div class="game-info">
                        <span class="game-platform">PC · JRPG</span>
                        <h5>Persona 3 Reload</h5>
                        <div class="game-price">
                            <span class="current-price">Rp 450.000</span>
                            <span class="old-price">Rp 530.000</span>
                        </div>
                        <button class="buy-button">+ Keranjang</button>
                    </div>
                </div>
            </div>

            <!-- Game Card 3: Bully -->
            <div class="col-4">
                <div class="game-card">
                    <div class="game-image">
                        <img src="/WebBelanja.com/public/assets/img/games/bully.jpg" alt="Bully">
                        <span class="discount-badge">-25%</span>
                    </div>
                    <div class="game-info">
                        <span class="game-platform">PC · Action Adventure</span>
                        <h5>Bully: Scholarship Edition</h5>
                        <div class="game-price">
                            <span class="current-price">Rp 75.000</span>
                            <span class="old-price">Rp 100.000</span>
                        </div>
                        <button class="buy-button">+ Keranjang</button>
                    </div>
                </div>
            </div>

            <!-- Game Card 4: Stardew Valley -->
            <div class="col-4">
                <div class="game-card">
                    <div class="game-image">
                       <img src="/WebBelanja.com/public/assets/img/games/OIP.jpg" alt="stardew valley">
                        <span class="discount-badge">-10%</span>
                    </div>
                    <div class="game-info">
                        <span class="game-platform">PC · Simulation RPG</span>
                        <h5>Stardew Valley</h5>
                        <div class="game-price">
                            <span class="current-price">Rp 85.000</span>
                            <span class="old-price">Rp 95.000</span>
                        </div>
                        <button class="buy-button">+ Keranjang</button>
                    </div>
                </div>
            </div>

            <!-- Game Card 5: To the Moon -->
            <div class="col-4">
                <div class="game-card">
                    <div class="game-image">
                        <img src="/WebBelanja.com/public/assets/img/games/ttm.jpg" alt="TTM">
                        <span class="discount-badge">-20%</span>
                    </div>
                    <div class="game-info">
                        <span class="game-platform">PC · Adventure RPG</span>
                        <h5>To the Moon</h5>
                        <div class="game-price">
                            <span class="current-price">Rp 48.000</span>
                            <span class="old-price">Rp 60.000</span>
                        </div>
                        <button class="buy-button">+ Keranjang</button>
                    </div>
                </div>
            </div>

            <!-- Game Card 6: Danganronpa 1 -->
            <div class="col-4">
                <div class="game-card">
                    <div class="game-image">
                        <img src="public/assets/img/games/danganronpa.jpg" alt="Danganronpa">
                        <span class="discount-badge">-15%</span>
                    </div>
                    <div class="game-info">
                        <span class="game-platform">PC · Mystery Visual Novel</span>
                        <h5>Danganronpa: Trigger Happy Havoc</h5>
                        <div class="game-price">
                            <span class="current-price">Rp 120.000</span>
                            <span class="old-price">Rp 140.000</span>
                        </div>
                        <button class="buy-button">+ Keranjang</button>
                    </div>
                </div>
            </div>

            <!-- Game Card 7: Terraria -->
            <div class="col-4">
                <div class="game-card">
                    <div class="game-image">
                        <img src="public/assets/img/games/terraria.jpg" alt="Terraria">
                        <span class="discount-badge">-20%</span>
                    </div>
                    <div class="game-info">
                        <span class="game-platform">PC · Sandbox Adventure</span>
                        <h5>Terraria</h5>
                        <div class="game-price">
                            <span class="current-price">Rp 70.000</span>
                            <span class="old-price">Rp 88.000</span>
                        </div>
                        <button class="buy-button">+ Keranjang</button>
                    </div>
                </div>
            </div>

            <!-- Game Card 8: Minecraft -->
            <div class="col-4">
                <div class="game-card">
                    <div class="game-image">
                        <img src="public/assets/img/games/minecraft.jpg" alt="Minecraft">
                        <span class="discount-badge">-10%</span>
                    </div>
                    <div class="game-info">
                        <span class="game-platform">PC · Sandbox Survival</span>
                        <h5>Minecraft</h5>
                        <div class="game-price">
                            <span class="current-price">Rp 350.000</span>
                            <span class="old-price">Rp 390.000</span>
                        </div>
                        <button class="buy-button">+ Keranjang</button>
                    </div>
                </div>
            </div>
        
        </div>
    </section>

</main>

    <?php include __DIR__ . '/../app/views/partials/foot.php'; ?>

</body>
</html>
