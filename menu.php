<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Recomendaciones</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-bg-dark: #0f172a;
            --color-bg-light: #1e293b;
            --color-accent-blue: #00bcd4;
            --color-accent-magenta: #ff00ff;
            --color-text-light: #e2e8f0;
            --color-text-dark: #cbd5e1;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--color-bg-dark);
            color: var(--color-text-light);
            margin: 0;
            padding: 2rem 1rem;
        }

        .top-right-button {
            position: absolute;
            top: 20px;
            right: 20px;
            text-decoration: none;
            color: var(--color-accent-blue);
            font-weight: 500;
            padding: 8px 16px;
            border: 1px solid var(--color-accent-blue);
            border-radius: 20px;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .top-right-button:hover {
            background-color: var(--color-accent-blue);
            color: var(--color-bg-dark);
            box-shadow: 0 0 10px var(--color-accent-blue);
        }

        .recommendation-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .recommendation-container h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            color: var(--color-accent-blue);
        }

        .recommendation-container .description {
            font-size: 1rem;
            color: var(--color-text-dark);
            margin-bottom: 2rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background-color: var(--color-bg-light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 1.5rem;
            text-align: left;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
        }

        .badge {
            display: inline-block;
            background-color: var(--color-accent-magenta);
            color: #fff;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .product-image {
            width: 100%;
            height: 140px;
            background-size: cover;
            background-position: center;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .product-name {
            font-size: 1.25rem;
            font-weight: 600;
            margin: 0.5rem 0;
            color: var(--color-accent-blue);
        }

        .product-category {
            font-size: 0.85rem;
            color: var(--color-text-dark);
        }

        .product-description {
            font-size: 0.9rem;
            color: var(--color-text-dark);
            margin: 1rem 0;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-text-light);
            text-align: right;
            margin-top: 1rem;
        }

        @media (max-width: 600px) {
            .recommendation-container h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <a href="chatbot/index.php" class="top-right-button">Chat bot</a>

    <div class="recommendation-container" role="main" aria-label="Productos altamente recomendados">
        <h1>Highly Recommended</h1>
        <p class="description">Basado en tus preferencias, estos productos son especialmente recomendados para ti.</p>
        <div class="products-grid">
            <article class="product-card" tabindex="0" aria-label="Laptop XYZ modelo 2025, categoría Electrónica, precio $1200">
                <div class="badge" aria-hidden="true">Highly Recommended</div>
                <div class="product-image" style="background-image: url('imagen.jpeg');"></div>
                <h2 class="product-name">Laptop XYZ modelo 2025</h2>
                <p class="product-category">Electrónica</p>
                <p class="product-description">Potente laptop con procesador de última generación, ideal para trabajo y gaming.</p>
                <p class="product-price">$1200.00</p>
            </article>

            <article class="product-card" tabindex="0" aria-label="Auriculares inalámbricos ProSound, categoría Audio, precio $150">
                <div class="badge" aria-hidden="true">Highly Recommended</div>
                <div class="product-image" style="background-image: url('descargar.jpeg');"></div>
                <h2 class="product-name">Auriculares inalámbricos ProSound</h2>
                <p class="product-category">Audio</p>
                <p class="product-description">Sonido envolvente y cancelación de ruido para una experiencia inmersiva.</p>
                <p class="product-price">$150.00</p>
            </article>

            <article class="product-card" tabindex="0" aria-label="Smartwatch FitPlus, categoría Wearables, precio $220">
                <div class="badge" aria-hidden="true">Highly Recommended</div>
                <div class="product-image" style="background-image: url('descargar (1).jpeg');"></div>
                <h2 class="product-name">Smartwatch FitPlus</h2>
                <p class="product-category">Wearables</p>
                <p class="product-description">Monitorea tu salud y actividad física con estilo y precisión.</p>
                <p class="product-price">$220.00</p>
            </article>
        </div>
    </div>
</body>
</html>


 
<a href="iniciodesesion.php" id="atras-btn">Atras</a>
<style>
  #atras-btn {
    position: fixed;
    bottom: 20px;
    right: 50px;
    background-color: #1641a8ff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }  #atras-btn:hover {
    background-color: #1641a8ff;
  }
</style>
</body>
</html>