# Projeto Login com GOOGLE LARAVEL
Projeto para fins de estudos.

## Descrição

Nosso projeto Laravel com Autenticação via Google usando Socialite é uma aplicação web moderna e interativa que permite aos usuários fazerem login de forma rápida e segura usando suas contas do Google. Com a integração perfeita do Socialite, uma biblioteca de autenticação de terceiros do Laravel, simplificamos o processo de autenticação e acesso para os usuários, tornando a experiência do usuário mais conveniente e eficiente.

Recursos Principais:

Login Simples e Rápido: Os usuários podem fazer login com apenas alguns cliques, utilizando suas contas do Google. Não há necessidade de criar e lembrar senhas adicionais.

Integração com Socialite: Implementamos o Socialite, uma poderosa biblioteca de autenticação de terceiros do Laravel. Ele lida com a autenticação OAuth do Google de maneira elegante e segura.

Painel do Usuário Personalizado: Após o login bem-sucedido, os usuários têm acesso a um painel personalizado onde podem gerenciar suas informações, atualizar perfis e realizar outras ações relevantes.

Proteção de Rotas: Utilizamos os recursos de proteção de rotas do Laravel para garantir que apenas os usuários autenticados possam acessar determinadas páginas, proporcionando maior segurança aos dados e funcionalidades sensíveis.

Design Responsivo e Atraente: Desenvolvemos uma interface de usuário responsiva e moderna, garantindo que os usuários tenham uma experiência agradável em dispositivos móveis e desktops.

Gerenciamento de Conta: Os usuários podem gerenciar suas contas, atualizar informações de perfil, adicionar uma foto de perfil e controlar as configurações da conta.

Fluxo de Registro Simplificado: Novos usuários têm a opção de se registrar rapidamente usando suas contas do Google, evitando o processo tradicional de registro com campos complexos.

Monitoramento de Atividades: Administradores do sistema têm acesso a um painel de controle onde podem monitorar a atividade do usuário, gerenciar permissões e manter a segurança geral do aplicativo.


### Uso Permitido

Você está autorizado a utilizar este código-fonte apenas para fins de estudo e aprendizado. Isso inclui a análise, modificação e execução do software, desde que seja para fins educacionais e não comerciais.


### Responsabilidade

O autor deste projeto não assume nenhuma responsabilidade pelo uso indevido ou violação dos termos de licença. Você é o único responsável por garantir o uso adequado e ético deste código-fonte.

### Isenção de Garantia

Este projeto é fornecido "no estado em que se encontra", sem garantias de qualquer tipo. O autor não se responsabiliza por quaisquer danos ou consequências decorrentes do uso deste software.

## Instruções

PHP instalado no seu sistema
Composer instalado (gerenciador de dependências do PHP)
Banco de dados MySQL configurado
Conta do Google para configuração do OAuth

## Configuração do Google OAuth:

Acesse o Console de APIs do Google (https://console.developers.google.com/).
Crie um novo projeto ou selecione um projeto existente.
No menu lateral, vá para "Credenciais" e clique em "Criar credenciais".
Escolha "ID do cliente OAuth" e selecione "Aplicativo da Web".
Configure as origens autorizadas, incluindo a URL do seu aplicativo (por exemplo, http://localhost:8000).
Configure as URIs de redirecionamento autorizados, incluindo a URL de callback do Socialite (por exemplo, http://localhost:8000/auth/google/callback).
Copie o ID do Cliente e o Segredo do Cliente e adicione-os ao arquivo .env:



## Tecnologias utilizadas
<div align="left">
    <div align="left">
    <img align="center" alt="PHP" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
    <img align="center" alt="Laravel" src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
    <img align="center" alt="Google Cloud" src="https://img.shields.io/badge/Google_Cloud-4285F4?style=for-the-badge&logo=google-cloud&logoColor=white">
    <img align="center" alt="MySQL" src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
    <img align="center" alt="OAuth" src="https://img.shields.io/badge/OAuth-4285F4?style=for-the-badge">
    <img align="center" alt="Bootstrap" src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white">
</div>


## Ferramentas de desenvolvimento utilizadas
<div align="left">
   <img align="center" alt="Git" src="https://img.shields.io/badge/Git-%23F05033.svg?style=for-the-badge&logo=git&logoColor=white"> 
    <img align="center" alt="npm" src="https://img.shields.io/badge/npm-CB3837?style=for-the-badge&logo=npm&logoColor=white">
    <img align="center" alt="Composer" src="https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white">
    <img align="center" alt="phpMyAdmin" src="https://img.shields.io/badge/phpMyAdmin-4479A1?style=for-the-badge&logo=phpmyadmin&logoColor=white">
    <img align="center" alt="MySQL" src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
</div>

# Copyright ©
Copyright © Developed by: Caique Braga Sousa - Software Developer 2023.