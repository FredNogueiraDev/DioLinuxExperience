# Dio Linux Expercience
O Bootcamp Linux Experience é um programa voltado para as tecnologias Linux desde o iniciante ao avançado. Contendo cursos, desafios de código e projeto e mentorias com os instrutores.

## Projetos
- Desafio 1 - Script de criação de estrutura de usuários, diretórios e permissões
- Desafio 2 - Script de provisionamento de um servidor web (apache)
- Desafio 3 - Docker: Utilização prática no cenário de Microsserviços

## Comandos Linux

## **Instalação e atualizações dos programas**

- `sudo apt i [programa]`: Instala um programa.
- `sudo apt update`: Atualiza os pacotes necessários.
- `sudo apt upgrade`: Atualiza os pacotes do sistema.
- `sudo apt clean`: Remove cache de programas.
- `sudo apt cache [busca]`: Busca um programa.
- `sudo apt remove [pacote] --purge`: Remove programas e configs.
* Obs. Se for usuário root, não é necessário o uso do 'sudo'.

## **Exibir diretório atual**

`pwd`: Exibe o caminho de diretório atual.

## **Copiando diretórios ou arquivos**

`cp [opções] [arquivo] [destino]`
- `r`: Copia diretórios de forma recursiva.
- `p`: Preserva as permissões originais do arquivo (proprietário, grupo, etc.).
- `n`: Não sobrescreve um arquivo já existente.

## **Movendo e renomeando arquivos e pastas**

`mv [opções] [arquivo] [destino]`
- `b`: Cria um backup de cada arquivo destino existente.
- `f`: Apaga destinos existente sem perguntar ao usuário.
- `n`: Não sobrescreve um arquivo destino já existente.

O comando mv também pode ser usado para renomear arquivos.

- `mv [nomeAtual] [novoNome]`

## **Excluíndo diretórios e arquivos**

`rm [opções] [arquivo]`
- `d`: Remove somente diretórios vazios.
- `f`: Exclui arquivos.
- `r`: Exclui o diretório e os arquivos na direção recursiva.

## **Buscando por arquivos**

- `find .`: Lista todos os arquivos contidos em um diretório ou subdiretório.
- `find . -name [arquivo]`: Busca um arquivo com um nome especifico.
- `find [diretório] -iname [arquivo]`: Procura ignorando letras maiúsculas e minúsculas.

## Manipulando Arquivos
### Listagem

- `a`: Lista todos os arquivos e diretórios, inclusive os ocultos.
- `l`: Exibe todos os detalhes necessários.
- `R`: Lista os arquivos e pastas recursivamente.

### Entrando e saindo dos diretórios

`cd`
- `cd ..`: Volta um diretório.
- `cd /`: Vai para o diretório raiz.
- `cd ~`: Vai para o diretório home.
- `cd -`: Retorna para o último diretório acessado.
- `cd [destino]`: Parte do local até o diretório passado como referência.
- `cd /[destino]`: Parte da raiz até o último diretório passado como referência.

## **Criando diretórios**

`mkdir [nome]`
- `mkdir pasta1 pasta2 pasta3`: Cria todas as pastas separadamente no diretório atual.
- `mkdir -p 1/2/3`: Cria as pastas uma dentro da outra. No caso a 3 dentro da 2 e a 2 dentro da 1.

## **Criando arquivos**

`touch [opção] [arquivo]`
- `a`: Altera a hora de acesso.
- `m`: Altera a hora de modificação.
- `c`: Altera a hora de acesso sem criar um novo arquivo.

## **Processos**

- `htop`: Exibe os processos que estão rodando no sistema ("Q" para parar).
- `kill pid`: Mata o processo com o id de processo pid.
- `killall [nome]`: Mata todos os processo especificados.
- `pkill [nome]`: Mata todos os processo que tenha o nome.

`ps [opções]`: Exibe as informações sobre os processos que estão em execução.

- `a`: Exibe os processos de todos os usuários.
- `f`: Exibe a árvore de execução de comandos.
- `g [grupo]`: Exibe os processos de um determinado grupo.
- `x`: Exibe os processos que não foram iniciados no console.
- `u`: Fornece o nome do usuário e a hora de início do processo.













