## Setup e Execução

Este repositório contém uma aplicação Laravel 12. Siga os passos abaixo para configurar e rodar o projeto localmente.

### 📌 Pré-requisitos

Certifique-se de ter instalado em sua máquina:
- [PHP 8.4+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/download/)
- [MySQL 8+](https://dev.mysql.com/downloads/)
- [Node.js e npm](https://nodejs.org/)

### 🚀 Passo a passo para configuração

#### 1 - Criação do arquivo de ambiente  
Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente conforme necessário:
```bash
cp .env.example .env
```
Edite o `.env` e ajuste os dados do banco de dados:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

#### 2 - Instale as dependências  
```bash
composer install
npm install
```

#### 3 - Gere a chave da aplicação  
```bash
php artisan key:generate
```

#### 4 - Execute as migrations  
```bash
php artisan migrate
```

#### 5 - Rode o servidor de desenvolvimento  
```bash
composer run dev
```
O servidor estará disponível em [http://localhost:8000](http://localhost:8000).