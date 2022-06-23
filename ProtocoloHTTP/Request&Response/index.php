<!--

Mensagens HTTP Request = Escrito em ASCII

1 - Estrutura   

Get:/somedir/page.html HTTP/1.1 == Request Line
Host: www.someschool.edu == Header Line
Connection: close == Header Line 
User-Agent: Mozilla/5.0 == Header Line
Accept-language: fr == Header Line

METÓDOS HTTP Request =
GET - Solicita um recurso do servidor = = Método Seguro (Read-Only)
HEAD - GET sem corpo de resposta = = Método Seguro (Read-Only)
POST - Submete uma entidade a um recurso do servidor
PUT - Substituição parcial de recursos pelos dados da requisição
DELETE - Remoção de um recurso
TRACE - Chamada de loop-back a um determinado recurso
Option - Opções de comunicação com recurso = Método Seguro (Read-Only)
Connect - Tunelamento identificado pelo recurso
Patch - Modificação parcial (RFC 5789)


Mensagens HTTP Response = Escrito em ASCII

HTTP/1.0 200 OK == Status Line
Connection : close == Header Line
Date: Tue, 26 Mar 2015 21:02:52 GMT == Header Line 
Server : Apache/2.2.3(CentOS) == Header Line
Last-Modified: Thu, 26 Mar 2015 21:02:52 GMT == Header Line
Content-Length:6821 == Header Line
Content-Type: application/json; charset=utf-8; == Header Line
(data... github initial page) == Entity Body

METÓDOS HTTP Response =

200 OK - Request bem sucedida e objeto enviado
301 Moved Permanently - Objeto realocado nova URL no campo Location 400 Bad Request - resposta genérica - servidor não entendeu a msg.
404 Not Found - O documento solicitado é inexistente
505 HTTP Version Not Supported - Versão do protocolo não suportada pelo servidor.

Classificação dos Status Code =
- Information response (100-199)
- Sucessful response (200-299)
- Redirection response (300-399)
- Client error response (400-499)
- Server error response (500-599)

 -->