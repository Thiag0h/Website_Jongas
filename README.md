# 🌐 Website Jongas

Este repositório contém o código-fonte de um site desenvolvido como projeto acadêmico. O objetivo do projeto foi aplicar conhecimentos em **HTML**, **CSS**, **JavaScript** e **PHP**, promovendo uma experiência web interativa e organizada.

## 📁 Estrutura do Projeto

```
📦 Website_Jongas
 ┣ 📂 CSS              → Arquivos de estilo (CSS)
 ┣ 📂 fontes           → Fontes utilizadas no site
 ┣ 📂 Imagens          → Recursos visuais (imagens)
 ┣ 📂 Javascript       → Scripts de interatividade
 ┣ 📂 php              → Scripts do lado do servidor
 ┣ 📂 database         → Scripts SQL dos bancos de dados
 ┣ 📄 Index            → Página principal
 ┣ 📄 LandingPage      → Página de introdução/apresentação
 ┣ 📄 contatos         → Página de contato
 ┣ 📄 game             → Página com jogo
 ┣ 📄 novidades        → Página de novidades
 ┣ 📄 servicos         → Página com os serviços oferecidos
 ┗ 📄 Sobre            → Página "Sobre nós"
 ┗ 📄 README.md
```

- `html`: As Páginas do site.
- `assets/css`: Arquivos de estilo (CSS).
- `assets/js`: Scripts em JavaScript.
- `assets/img`: Imagens utilizadas no site.

## 🛠️ Tecnologias Utilizadas

- **HTML5**
- **CSS3**
- **JavaScript**
- **PHP**
- **SQL**
- [Font Awesome](https://fontawesome.com/)
- [Google Fonts](https://fonts.google.com/)

## 📌 Funcionalidades

- Layout responsivo
- Navegação por seções
- Animações básicas com CSS
- Scripts JS simples para interatividade
- Banco de dados com SQL
- Backend simples com PHP

## 📂 Banco de Dados

Este projeto utiliza dois bancos de dados MySQL. Os scripts estão na pasta `database/`:

### 1. `cadastroprodutos`
- Script: `database/script_cadastroprodutos.sql`
- Tabela: `servicos`
- Descrição: Contém os serviços oferecidos pelo site.

### 2. `newsletter`
- Script: `database/script_newsletter.sql`
- Tabela: `newsletters`
- Descrição: Armazena os e-mails cadastrados para a newsletter.

### Como importar

Você pode importar via phpMyAdmin ou executar pelo terminal:

```bash
mysql -u seu_usuario -p < database/script_cadastroprodutos.sql
mysql -u seu_usuario -p < database/script_newsletter.sql
```
## 🎯 Objetivo

Este projeto foi desenvolvido com fins educacionais, promovendo o aprendizado em desenvolvimento web front-end e back-end, além de fortalecer o trabalho em equipe.

## 👨‍💻 Desenvolvedores

- Thiago de Andrade
- Rebeca
- Matheus
- Gabriel
