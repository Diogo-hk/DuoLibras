# 📖 VDFLibras: Dicionário Colaborativo de Libras

Um projeto que visa expandir e tornar mais acessível o dicionário da Língua Brasileira de Sinais (Libras) através de uma plataforma web intuitiva e colaborativa. Usuários podem pesquisar sinais existentes, sugerir novos sinais para a comunidade e contribuir ativamente para o crescimento do acervo.

## 🌟 Funcionalidades Principais

- **Navegação por Categoria**: Explore sinais organizados em categorias temáticas (Cumprimentos, Cores, Roupas, etc.).
- **Pesquisa Dinâmica**: Encontre rapidamente o sinal desejado através da barra de pesquisa.
- **Sugestão de Novos Sinais**: Usuários logados podem preencher um formulário simples para sugerir novos sinais, com detalhes sobre o nome, categoria e descrição do movimento.
- **Área Administrativa (Admin)**: Administradores têm acesso a uma seção para verificar e gerenciar as sugestões pendentes, garantindo a curadoria e qualidade do conteúdo.  
  **Nota**: O badge na navegação de Admin exibe o número de sugestões pendentes.
- **Perfil do Usuário**: Acesso rápido ao perfil e funcionalidade de logout.
- **Design Responsivo**: Interface construída com Tailwind CSS, garantindo uma ótima experiência em desktops e dispositivos móveis.

## 🛠️ Tecnologias Utilizadas

Este projeto foi desenvolvido utilizando o framework Laravel e o utility-first CSS framework Tailwind CSS.

- **Backend**: PHP (com Laravel)
- **Frontend**: Blade Templates (Laravel), Tailwind CSS, JavaScript (Vanilla)
- **Estrutura de Componentes**: Utilização de `x-app` (Laravel Blade Component) para o layout principal.
- **Autenticação**: Sistema de autenticação nativo do Laravel (`auth()->user()`).

## 📂 Estrutura de Arquivos (Visão Geral)

Os arquivos fornecidos demonstram a estrutura base da aplicação:

| Arquivo                           | Função Principal                                                                                      |
|-----------------------------------|------------------------------------------------------------------------------------------------------|
| `app.blade.php`                   | Layout principal (`<x-app>`), inclui a barra de navegação e a lógica de menu dropdown.               |
| `dashboard.blade.php`             | Tela inicial após o login, exibindo as categorias de sinais e o botão de Favoritos.                   |
| `formularioSugestao.blade.php`    | Formulário para que o usuário sugira um novo sinal.                                                   |
| `User.php`                        | Modelo Eloquent (`User`) para o banco de dados, incluindo a flag `is_admin` para controle de acesso administrativo. |

## ⚙️ Configuração e Instalação

Para configurar e rodar o projeto em seu ambiente local, siga os passos abaixo:

1. Clone o repositório:

    ```bash
    git clone https://github.com/SEU_USUARIO/VDFLibras.git
    cd VDFLibras
    ```

2. Instale as dependências do Composer (PHP):

    ```bash
    composer install
    ```

3. Instale as dependências do NPM (Node.js/Frontend):

    ```bash
    npm install
    ```

4. Configure o ambiente:
   
    Copie o arquivo de exemplo `.env`:

    ```bash
    cp .env.example .env
    ```

    Gere a chave da aplicação:

    ```bash
    php artisan key:generate
    ```

    Configure as credenciais do seu banco de dados no arquivo `.env`.

5. Execute as migrações (Criação das tabelas no DB):

    ```bash
    php artisan migrate
    ```

6. Compile os assets do frontend (CSS/JS):

    ```bash
    npm run dev
    # ou 'npm run watch' para desenvolvimento em tempo real
    ```

7. Inicie o servidor de desenvolvimento do Laravel:

    ```bash
    php artisan serve
    ```

    A aplicação estará disponível em `http://127.0.0.1:8000` (ou porta similar).

## 🤝 Contribuições

Este é um projeto colaborativo e agradecemos qualquer tipo de contribuição! Siga o workflow padrão:

1. Faça um fork do projeto.
2. Crie uma branch para sua funcionalidade (`git checkout -b feature/minha-feature`).
3. Faça o commit das suas alterações (`git commit -m 'feat: Adiciona Xyz'`).
4. Faça o push para a branch (`git push origin feature/minha-feature`).
5. Abra um Pull Request.

## 👨‍💻 Criadores

Este projeto foi desenvolvido como parte de um trabalho de Análise e Modelagem de Sistemas (AMS) por:

| Nome                   | GitHub                                      |
|------------------------|---------------------------------------------|
| Diogo Silva de Carvalho | [@diogo-hk](https://github.com/diogo-hk)    |
| Victor Perim            | [@victorperim123](https://github.com/victorperim123) |
| Fernando Dzazio Reis    | [fernandoreis03](https://github.com/fernandoreis03)  |
