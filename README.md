# PHP Design Patterns Project

このプロジェクトは、PHPのデザインパターンを学習するためのプロジェクトです。

## Docker環境での実行

### 必要な環境
- Docker
- Docker Compose

### 環境の起動

```bash
# Docker環境を起動
docker-compose up -d

# ログを確認
docker-compose logs -f

# 環境を停止
docker-compose down
```

### アクセス方法
- ブラウザで http://localhost:8080 にアクセス

### 開発について
- プロジェクトファイルは自動的にコンテナにマウントされているため、コードの変更は即座に反映されます
- コンテナ内でComposerを使用する場合：
  ```bash
  docker-compose exec php-web composer install
  ```

### ディレクトリ構造
```
.
├── docker/
│   └── Dockerfile
├── docker-compose.yml
└── README.md
```