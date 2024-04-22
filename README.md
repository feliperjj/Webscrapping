Aplicativo PHP de Web Scraping

Este é um aplicativo simples em PHP para extrair informações de um arquivo HTML e escrevê-las em um arquivo CSV. Ele é projetado para extrair dados de cards de papel acadêmico de uma página HTML específica e salvá-los em um formato CSV para fácil análise.
Requisitos

    PHP 7 ou superior
    Extensão PHP dom habilitada

Instalação

    Clone ou faça o download deste repositório para o seu ambiente local.
    Certifique-se de ter o PHP instalado em seu sistema.
    Execute o aplicativo usando o servidor embutido do PHP ou configure-o em seu servidor web local.

Uso

    Abra o arquivo index.php em um navegador ou execute-o usando a linha de comando.
    O aplicativo irá extrair informações dos cards de papel acadêmico na página HTML especificada.
    Os dados extraídos serão salvos em um arquivo CSV especificado.

Como funciona

O aplicativo utiliza a classe Scrapper para realizar o scraping da página HTML fornecida. Ele busca por cards de papel acadêmico com a classe CSS específica e extrai as informações relevantes, como ID, título, tipo, autores e instituições. Em seguida, ele escreve essas informações em um arquivo CSV especificado.
Como usar

Para utilizar este aplicativo, siga estas etapas:

    Instale os requisitos listados acima.
    Configure o caminho do arquivo HTML de entrada e o caminho do arquivo CSV de saída no arquivo index.php.
    Execute o aplicativo e verifique o arquivo CSV gerado com os dados extraídos.
