# Sistema de Formulários de Cadastro

Este é um sistema de formulários em PHP que permite o registro e autenticação de usuários, além da visualização dos dados registrados.

## Estrutura de Pastas

- `public/`: Arquivos acessíveis ao público, como scripts de front-end.
- `src/`: Código-fonte da aplicação.
- `storage/`: Armazenamento de dados dos usuários em formato JSON.
- `templates/`: Templates HTML para as páginas de formulário e visualização de dados.

## Arquivos Principais

- `index.php`: Inicializa a sessão e lida com a submissão do formulário de cadastro.
- `login.php`: Inicializa a sessão e lida com a autenticação do usuário.
- `view.php`: Verifica a autenticação e exibe os dados dos usuários cadastrados.
- `RegistrationForm.php`: Contém a lógica para o processamento do formulário de cadastro, validação dos dados, e operações de armazenamento.

## Utilização

Para utilizar o sistema, basta clonar o repositório, instalar as dependências do PHP e iniciar o servidor embutido do PHP ou utilizar um servidor como Apache ou Nginx.

### Nota

Certifique-se de substituir a lógica de autenticação em `login.php` para integrar com um sistema real de gerenciamento de usuários.

## Contribuições

Contribuições são bem-vindas! Por favor, crie um pull request para contribuir com melhorias ou correções.

---

# User Registration Forms System

This is a PHP form system that enables user registration and authentication, as well as the viewing of registered data.

## Folder Structure

- `public/`: Publicly accessible files, such as front-end scripts.
- `src/`: Application source code.
- `storage/`: Storage for user data in JSON format.
- `templates/`: HTML templates for the form and data viewing pages.

## Main Files

- `index.php`: Initiates the session and handles the registration form submission.
- `login.php`: Initiates the session and handles user authentication.
- `view.php`: Checks authentication and displays the registered user data.
- `RegistrationForm.php`: Contains the logic for processing the registration form, data validation, and storage operations.

## Usage

To use the system, simply clone the repository, install PHP dependencies, and start PHP's built-in server or use a server like Apache or Nginx.

### Note

Be sure to replace the authentication logic in `login.php` to integrate with an actual user management system.

## Contributions

Contributions are welcome! Please create a pull request to contribute improvements or fixes.
