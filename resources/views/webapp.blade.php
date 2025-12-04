<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин чая</title>
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: var(--tg-theme-bg-color, #ffffff);
            color: var(--tg-theme-text-color, #000000);
            padding: 16px;
        }

        .header {
            text-align: center;
            margin-bottom: 24px;
        }

        .header h1 {
            font-size: 24px;
            margin-bottom: 8px;
            color: var(--tg-theme-text-color, #000000);
        }

        .header p {
            color: var(--tg-theme-hint-color, #999999);
            font-size: 14px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }

        .product-card {
            background: var(--tg-theme-secondary-bg-color, #f0f0f0);
            border-radius: 12px;
            padding: 12px;
            text-align: center;
            transition: transform 0.2s;
        }

        .product-card:active {
            transform: scale(0.98);
        }

        .product-image {
            width: 100%;
            height: 120px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 8px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
        }

        .product-name {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 4px;
            color: var(--tg-theme-text-color, #000000);
        }

        .product-description {
            font-size: 12px;
            color: var(--tg-theme-hint-color, #999999);
            margin-bottom: 8px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-price {
            font-size: 16px;
            font-weight: 700;
            color: var(--tg-theme-button-color, #3390ec);
        }

        .loading {
            text-align: center;
            padding: 40px;
            color: var(--tg-theme-hint-color, #999999);
        }

        .error {
            text-align: center;
            padding: 40px;
            color: #ff3333;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🍵 Магазин чая</h1>
        <p>Выберите понравившийся чай</p>
    </div>

    <div id="products-container" class="loading">
        Загрузка товаров...
    </div>

    <script>
        const tg = window.Telegram.WebApp;
        tg.ready();
        tg.expand();

        async function loadProducts() {
            const container = document.getElementById('products-container');
            
            try {
                const response = await fetch('/api/products');
                const data = await response.json();
                
                if (data.success && data.products.length > 0) {
                    container.className = 'products-grid';
                    container.innerHTML = data.products.map(product => `
                        <div class="product-card">
                            <div class="product-image">🍵</div>
                            <div class="product-name">${escapeHtml(product.name)}</div>
                            <div class="product-description">${escapeHtml(product.description)}</div>
                            <div class="product-price">${product.price} ₽</div>
                        </div>
                    `).join('');
                } else {
                    container.className = 'error';
                    container.textContent = 'Товары не найдены';
                }
            } catch (error) {
                container.className = 'error';
                container.textContent = 'Ошибка загрузки товаров';
                console.error('Error loading products:', error);
            }
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        loadProducts();
    </script>
</body>
</html>

