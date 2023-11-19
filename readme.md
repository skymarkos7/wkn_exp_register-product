# Projeto Mercado - README

## Versão
v1.0.0

## Descrição
Este projeto consiste em um sistema para gerenciar as operações de um mercado, seguindo a arquitetura Model-View-Controller (MVC). O sistema permite o cadastro de produtos, tipos de produtos e valores percentuais de imposto para cada tipo. Além disso, oferece uma tela de venda, onde é possível informar os produtos e as quantidades adquiridas, apresentando o valor de cada item, a quantidade de imposto paga em cada item, o total da compra e o total de impostos.

## Estrutura de Diretórios
- mercado
    - controllers
        - ProdutoController.php
        - TipoProdutoController.php
        -  VendaController.php
    - models
        - ProdutoModel.php
        - TipoProdutoModel.php
        - VendaModel.php
    - routes
        - api.php
    - index.php

## Seguindo padrões recomendados
   - PSR`s do PHP: 
      - funções e classes tem a chave aberta na próxima linha
      - variáveis são escrita em snakeCase
      - Classes são escritas com suas inicias em maiusculo
   - Git
      - Para cada nova funcionalidade é desenvolvida em sua propria branch. no padrão feature/nome-Da-Branch
      - Não se desenvolve código na main/master. Todo código é mergiado posteriormente na developer que por sua vez vai para a main/master
      - Novas branchs se derivam da develop.



## Funcionalidades
1. **Cadastro de Produtos:**
   - Permite adicionar produtos ao sistema.

2. **Cadastro de Tipos de Produtos:**
   - Permite registrar os tipos de cada produto.

3. **Cadastro de Valores Percentuais de Imposto:**
   - Permite definir os valores percentuais de imposto para cada tipo de produto.

4. **Tela de Venda:**
   - Informa os produtos e quantidades adquiridas.
   - Apresenta o valor de cada item multiplicado pela quantidade adquirida.
   - Mostra a quantidade paga de imposto em cada item.
   - Totaliza o valor da compra e o valor dos impostos.

5. **Salvamento de Vendas:**
   - As vendas realizadas são salvas no sistema.

## Instruções de Uso
1. **Clone o repositório:**
   ```bash
   git clone https://github.com/seu-usuario/mercado.git


## Execute o servidor PHP embutido:
``php -S localhost:8000``

## Execute a imagem docker:
``docker-compose up -d --build``

## Acesse o sistema no navegador:
``http://localhost:8000``


