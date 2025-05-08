# 🐘 PHP OOP – Projeto de Programação Orientada a Objetos

Este repositório contém o projeto desenvolvido durante o curso de Programação Orientada a Objetos (POO) com PHP da plataforma Alura. O objetivo é aplicar os conceitos fundamentais de POO utilizando PHP moderno, com foco em boas práticas e organização de código.

---

## 📁 Estrutura do Projeto

```
php-oop/
├── autoload.php
├── src/
│   ├── Classes/
│   │   └── Pessoa.php
│   └── index.php
└── LICENSE
```

- **`autoload.php`**: Responsável por carregar automaticamente as classes do projeto.
- **`src/Classes/Pessoa.php`**: Define a classe `Pessoa` com atributos e métodos relacionados.
- **`src/index.php`**: Script principal que instancia objetos e demonstra o uso da classe `Pessoa`.

---

## 🧠 Conceitos Abordados

- **Classes e Objetos**: Criação e instância de classes em PHP.
- **Encapsulamento**: Uso de modificadores de acesso (`private`, `public`) para proteger dados.
- **Métodos e Atributos**: Definição e utilização de métodos e atributos em classes.
- **Autoloading**: Implementação de carregamento automático de classes para melhor organização do código.

---

## 🚀 Como Executar

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/nataliataira/php-oop.git
   ```

2. **Navegue até o diretório do projeto:**

   ```bash
   cd php-oop
   ```

3. **Execute o script principal:**

   ```bash
   php src/index.php
   ```

   Certifique-se de ter o PHP instalado em sua máquina. Você pode verificar a versão instalada com:

   ```bash
   php -v
   ```

---

## 📄 Exemplo de Uso

```php
<?php

require_once __DIR__ . '/../autoload.php';

use Classes\Pessoa;

$pessoa = new Pessoa('João', 30);
$pessoa->apresentar();
```

Este exemplo demonstra a criação de uma instância da classe `Pessoa` e a chamada do método `apresentar`.

---

## 📜 Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo [LICENSE](LICENSE) para mais informações.

---

> Projeto desenvolvido por [Natalia Taira](https://github.com/nataliataira) durante o curso de PHP Orientado a Objetos da Alura.
