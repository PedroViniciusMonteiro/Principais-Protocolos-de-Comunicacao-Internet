<!-- 

HTTP = HyperText Transfer Protocol = Faz a intermediação entre cliente e servidor.

- Definido pelos RFCs 1945 e 2116
- Protocolo de comunicação
- Browser -> implementa o cliente HTTP 
- Servidor -> Hospeda os objetos WEB que o cliente solicita


- Cliente -> Mensagens - Requests HTTP - Objetos WEB
- Servidor -> Mensagens - Responses HTTP - Protocolo TCP

Arquitetura Client-Server = Cliente/Servidor

Cliente faz o Request

Get : https://github.com/
Host : github.com
Connection : close
User-Agent : Mozilla/5.0 

Servidor faz o Response

HTTP/1.0 200 OK
Connection : close
Date: Tue, 26 Mar 2015 21:02:52 GMT 
Server : Apache/2.2.3(CentOS)
Last-Modified: Thu, 26 Mar 2015 21:02:52 GMT
Content-Length:6821
Content-Type: application/json; charset=utf-8;
(data... github initial page)



Cliente faz um POST (enviar um formulario, não só buscar a page, mas enviar dados)

Post: https://github.com/cadastro
Host: github.com
Connection: close
User-Agent:Mozilla/5.0 
Data: nome,data de nascimento, contato, etc...

Servidor recebe o POST, atualiza o SGBD e responde se pode ou não seguir com proximos passos.

HTTP/1.0 200 OK
Connection : close
Date: Tue, 26 Mar 2015 21:02:52 GMT 
Server : Apache/2.2.3(CentOS)
Last-Modified: Thu, 26 Mar 2015 21:02:52 GMT
Content-Length:6821
Content-Type: application/json; 
(data... Update Sucess) // mensagem que as informações foram alteradas com sucesso.                                                                   
                                                                           
FORMATOS DE ESTRUTURAÇÃO DE DADOS (mais utilizados)                        
OBJETIVOS - Armazenamento - Transmissão - Reconstrução                     
1 - XML                                                                    
2 - JSON - application/json                                                
                                                                           
Definir o modelo no "Content-Type"


-->