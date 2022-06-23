<!--

Operações do SSL - Secure Socket Layer

Separado em 3 fases :

1 - Handshake
    - Estabelecendo conexão TCP
        - TCP starts
        - TCP response
        - TCP confirmation
    - Verificação de Autenticidade
        - SSL Hello
        - SSL Certificate (chave publica)
    - Envio da Master Secret Key (só é enviada com a chave pública)
        - Utilizada para descriptografar o arquivo de dados, ou seja, abrir o cadeado. Só funciona para respectiva sessão em que foi criada.

2 - Key Derivation
    - Master Secret Key (chave publica)
        - Ea = SEK = SessionEncryptionKey
        - Ma = MAC = Verificação da chave MS

3 - Data Transfer
    - Operação - Fases
        - Transferência efetiva de dados
        - Record + MAC
            - Verificação de integridade da mensagem



HTTPS = HTTP + SSL
- Segurança na comunicação - HTTP
    - Over TCP
- Verificação da autenticidade por certificados digitais
    - Porta 443


LGPD - Lei Geral de Proteção de Dados
    - Define o tratamento de dados
        - Diversos tipos de operações
    - Livre conssentimento
    - Direitos do titular das informações
    - Dados de identificação dos usuários
    - Dados sensíveis(etnia, sexo, etc...)
    - Sações aos que descumprirem as regras.
GDPR - General Data Protection Regulation (Legislação europeia)
Legislação do estado da Califórnia - EUA



 -->