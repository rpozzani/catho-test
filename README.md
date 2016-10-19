Catho test
==========

Projeto BackEnd Catho.  
por: Ramiro Pozzani  

Pré requisitos:  
	Servidor WEB (Windows/Linux) rodando uma versão atualizada (>5) do PHP  
  
Geral:  
	API retorna um Json baseado em filtros que o usuário escolheu  
	
Exemplo utilização:  
	index.php?cidade=S%C3%A3o  
	index.php?texto=empregada  
	index.php?texto=analista&cidade=S%C3%A3o  
	index.php?texto=analista&ordem=asc  
	  
	Pode ser testado online em:  
		http://ramiropo.webfactional.com/catho/index.php?ordem=des  
		
Arquivos:  
	index.php - Adiciona todas as classes e responde com o Json correto  
	cidade.php - Filtro por cidade  
	data.php - Classe para fazer o load da data.  
	filter_int.php - Interface de filtros  
	functions.php - Funções necessárias para o funcionamento da API  
	sort.php - Classe que faz a ordenação do Json  
	texto.php - Classe para busca baseada num texto  
	/test/CathoTest.php - Classe para os testes unitários utilizando PHPUnit  
	
Considerações:  

	Segurança: Filtro nos parametros GET  
			   Limite para a busca textual com tamanho > 3 .  Evitando que   
			   um usuário faça consecutivas buscas que retornem um grande número de resultados  
			   
	Manutenção: Utilização da interface de busca para criar novos filtros  
	Json:       Cuidado ao abrir os arquivos desse projeto em editores Windows, pois a formatação  
				pode ser modificada para UTF com BOM, o que pode gerar um Json inválido como resposta.  
	
Testes:  
	Para rodar os testes unitários é necessário a utilização do framework PHPUnit.  
	A forma mais simples de instalar o PHPUnit é utilizando o composer.  
	
	Instalação composer:  
		https://jtreminio.com/2013/03/unit-testing-tutorial-introduction-to-phpunit/
		OBS: Executar os comandos na pasta onde se encontra o arquivo index.php do projeto  
		
	Instalação PHPUnit  
		https://jtreminio.com/2013/03/unit-testing-tutorial-introduction-to-phpunit/  
		OBS: Os arquivos .xml estão adicionados no pull  
		
	Após a instalação basta rodar na pasta root do projeto o comando:  
		vendor\bin\phpunit    
	  
