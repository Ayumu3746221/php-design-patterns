<?php
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Design Patterns</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            max-width: 800px; 
            margin: 0 auto; 
            padding: 20px; 
            background-color: #f4f4f4; 
        }
        .container { 
            background-color: white; 
            padding: 30px; 
            border-radius: 8px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
        }
        h1 { color: #333; }
        .info { 
            background-color: #e7f3ff; 
            padding: 15px; 
            border-radius: 5px; 
            margin: 20px 0; 
        }
        .success { 
            background-color: #d4edda; 
            color: #155724; 
            padding: 15px; 
            border-radius: 5px; 
            margin: 20px 0; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🐘 PHP Design Patterns Project</h1>
        
        <div class="success">
            ✅ Docker環境が正常に動作しています！
        </div>
        
        <div class="info">
            <h3>📋 環境情報</h3>
            <ul>
                <li><strong>PHP Version:</strong> <?php echo phpversion(); ?></li>
                <li><strong>Server:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></li>
                <li><strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
                <li><strong>Current Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></li>
            </ul>
        </div>
        <div class="info">
            <h3>🛠️ 便利なコマンド</h3>
            <pre>
# コンテナに入る
docker-compose exec php-web bash

# Composerを使用
docker-compose exec php-web composer install

# ログを確認
docker-compose logs -f
            </pre>
        </div>
    </div>
</body>
</html>
