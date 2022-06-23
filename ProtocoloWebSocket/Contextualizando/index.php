<!-- 

É UMA API QUE OPERA DANDO UM UPGRADE NO HTTP.

Conexão BIDIRECIONAL entre cliente/servidor.

Tecnicamente em HTTP fazemos um requisição e esperamos uma resposta do servidor de destino, sem saber se vai demorar ou não, imaginando esse cenário em larga escala, como 20 000 requisições por minuto, aconteceria um catastrofe levando em consideração que o servidor não daria conta de Responder a tantas Requisições.
Pois bem, para conter esse possível problema, foi criada o WebSocket, onde o cliente faz apenas 1 requisição e o servidor a mantém no BD, fazendo com que o tempo de resposta para cada Request, seja em milisegundos.

Entretanto todavia, o WebSocket roda "por trás" do HTTP, dando um upgrade por assim dizer.


-->
