Projeto Discografia da Dupla Caipira Tião Carreiro e Pardinho

Este é um projeto PHP Laravel que consiste em criar interfaces acessíveis por meio de um navegador para permitir aos usuários gerenciar a discografia da dupla caipira Tião Carreiro e Pardinho. A aplicação permite visualizar a lista de álbuns e faixas, pesquisar álbuns por nome, adicionar novos álbuns e faixas, além de excluir faixas e álbuns.

Requisitos
Antes de começar, certifique-se de ter os seguintes requisitos instalados em seu ambiente de desenvolvimento:

PHP >= 7.4
Composer
Laravel Framework

## Arquivos de Estilo e Scripts

O projeto faz uso dos seguintes arquivos de estilo e scripts:

- `style.css`: Arquivo de estilo personalizado para o projeto.
- `script.js`: Arquivo JavaScript que contém lógica do lado do cliente.
- `index.html`: Página principal do projeto.

Além disso, o projeto utiliza o framework de CSS chamado Tailwind CSS para facilitar o desenvolvimento de interfaces. O arquivo `tailwind.css` contém as configurações e estilos do Tailwind CSS.

Configuração do projeto
Siga as etapas abaixo para configurar e executar o projeto em seu ambiente:

Clone o repositório do projeto:

git clone git@github.com:carloseduardobertucio/teste_discografia.git
Acesse o diretório do projeto:

cd teste_discografia
Instale as dependências do Composer:

composer install
Crie um arquivo de configuração .env na raiz do projeto. Você pode copiar o arquivo .env.example e renomeá-lo para .env. Certifique-se de configurar as informações do banco de dados corretamente.

Gere uma nova chave de aplicativo:

php artisan key:generate
Execute as migrações do banco de dados para criar as tabelas necessárias:

php artisan migrate
Inicie o servidor de desenvolvimento:

php artisan serve
Abra seu navegador e acesse http://localhost:8000 para acessar o projeto.

Funcionalidades
O projeto permite realizar as seguintes ações:

Ver lista de álbuns e faixas: Navegue pela discografia da dupla e visualize os álbuns e suas respectivas faixas.

Pesquisar álbuns por nome: Utilize a função de pesquisa para encontrar álbuns específicos pelo seu nome.

Adicionar um novo álbum: Adicione um novo álbum à discografia fornecendo as informações necessárias, como título, ano de lançamento, entre outros.

Adicionar uma nova faixa em um álbum: Adicione uma nova faixa a um álbum existente, fornecendo o título da faixa e outras informações relevantes.

Excluir uma faixa: Remova uma faixa específica de um álbum.

Excluir um álbum: Remova um álbum inteiro da discografia, incluindo todas as faixas associadas.

Contribuição
Se você deseja contribuir para este projeto, siga as etapas abaixo:

Faça um fork deste repositório.

Crie uma branch para sua contribuição:
git checkout -b minha-contribuicao
Faça as alterações e adições necessárias.

Faça commit das suas alterações:
git commit -m "Minha contribuição"
Faça push das alterações para o seu repositório fork:

git push origin minha-contribuicao
Abra um pull request neste repositório para que suas alterações sejam revisadas.

Conclusão
Este projeto Laravel oferece uma maneira fácil e intuitiva de gerenciar a discografia da dupla caipira Tião Carreiro e Pardinho. Sinta-se à vontade para explorar as funcionalidades e adicionar novos recursos conforme necessário. Divirta-se! 🎵🤠