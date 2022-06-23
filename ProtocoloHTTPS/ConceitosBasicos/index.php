<!--

CRIPTOGRAFIA POR CHAVE -

Você altera a "fechadura da porta" para que só você tenha conhecimento da chave.
Fazendo assim um mapeamento de quem pode ou não pode ler aqueles dados.
Dentro do contexto, existem dois tipos de Criptografia por Chave

1 - Assimétrica
    - Chave Privada
        Assinatura - Ou seja, somente a pessoa que tem realmente a chave poderá ler os dados, e quando terminado, a fechadura irá trancar novamente.
    - Chave Pública
        Verificação de autenticidade - Ou seja, tecnicamente será feita um verificação para testar se você pode ou não pode, destrancar o cadeado.
2 - Simétrica (cifra de césar)
    - Chave única privada
        - Conhecimento prévio da chave.
        - Como transferir a chave?
            - Funcionamento 
                - Substituição da letra pela k-ésima do alfabeto. k = [1,26]
                - Rotatividade do alfabeto
    - Tipos 
        - Cifra de fluxo (F(x))
            - Sequência de bits pseudo-aleatório (01011010010101110)
            - Mapeamento 1 para 1
        - Cifra de bloco (Tabela de permutação)
            - SSL, PGP, Ipsec


CERTIFICADO DIGITAL -

1 - Certificação da Chave Pública
    - Comprovar autenticidade
    - Entidade certificadora
        - Verificação de identidade
        - Emissão de certificados
            - Padrões de autoridades certificadoras
            - IETF - Recomendações ITUX.509
                - Especificação de um serviço de autenticação e sintaxe de  certificados
            - RFC 1422
                - Gerenciamento de chaves baseado em CA em emails seguros.

 -->