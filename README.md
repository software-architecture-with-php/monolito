### ✅ 1. Monolito
---
##### ➡️ O que é?
Uma aplicação monolítica é construída como um único bloco. Todo o código — backend, frontend, regras de negócio, e acesso ao banco de dados — está junto no mesmo projeto e processo.

##### ➡️ Exemplo prático:
Imagine um sistema de e-commerce onde:

* Cadastro de produtos.

* Processamento de pagamentos.

* Emissão de nota fiscal.

* Tudo está no mesmo projeto PHP, por exemplo, dentro de um index.php com várias rotas e classes.

``` bash
/ecommerce
  ├── index.php
  ├── ProdutoController.php
  ├── PagamentoController.php
  ├── NotaFiscalController.php
  ├── ProdutoModel.php
  ├── views/
```

➡️ Como funciona?
Quando você atualiza uma funcionalidade, por exemplo, o pagamento, precisa testar todo o sistema, pois tudo está interligado.

✅ Vantagens:

* Fácil de iniciar.

* Simples para projetos pequenos.

❌ Desvantagens:

* Dificuldade de manutenção conforme cresce.

* Deploy e escalabilidade complicados.


--- 

### ✅ Características Comuns da Arquitetura de Sistemas Legados:

##### Arquitetura Monolítica:

* A maior parte dos sistemas legados foi construída com uma estrutura monolítica, ou seja, todas as funcionalidades estão agrupadas em um único bloco de código.

* Alterações em uma parte do sistema podem impactar outras partes, tornando a manutenção complexa e arriscada.

##### Baixa Modularização:

* Separação insuficiente de responsabilidades.

* Código fortemente acoplado, dificultando reaproveitamento e evolução.

##### Tecnologias Obsoletas:

* Linguagens e frameworks antigos (ex.: COBOL, Delphi, Visual Basic, Java antigo).

* Bancos de dados relacionais com acesso direto, sem abstrações (ex.: Oracle, DB2, MySQL legado).

##### Foco na Persistência e Regras de Negócio Embutidas:

* Muitas vezes as regras de negócio estão diretamente embutidas nas telas ou no código de persistência, sem separação clara.

* Camadas de Arquitetura pouco definidas:

* Pode até existir separação entre "apresentação", "negócio" e "dados", mas de forma inconsistente.

* Falta de padrões como MVC, MVP ou arquiteturas hexagonais.

##### Integrações via Arquivos ou Serviços Simples:

* Comunicação com outros sistemas feita por troca de arquivos, EDI ou web services SOAP.

* Dificuldade de integração com APIs REST modernas.

* Baixo uso de Testes Automatizados:

* Testes feitos majoritariamente de forma manual, com pouca cobertura automatizada.

* Dependência de conhecimento tácito da equipe.

##### Deploy manual:

* Processos de entrega e atualização realizados manualmente ou por scripts simples, sem pipelines de CI/CD.

* Alto risco de erro.

### ✅ Exemplo esquemático de arquitetura de sistema legado:

``` csharp
[Interface de Usuário - Forms/Web] 
          ↓
[Regras de Negócio Embutidas]
          ↓
[Acesso direto ao Banco de Dados]
          ↓
[Banco de Dados Relacional]
```

→ Integrações: trocas de arquivos via FTP, chamadas SOAP, ou mensagens por filas proprietárias.

---

### ✅ Desafios típicos:

* Manutenção difícil: Cada modificação exige grande esforço para entender impactos.

* Falta de documentação: Conhecimento muitas vezes só existe na mente de veteranos.

* Incompatibilidade com novas tecnologias: Difícil migrar para nuvem, APIs modernas, microsserviços.

* Problemas de escalabilidade: Arquitetura monolítica limita a distribuição de carga.

---

# ✅ Por que conhecer essa arquitetura?
Modernização: Para planejar a evolução para arquiteturas mais modernas, como microsserviços, serverless, ou DDD.

Manutenção: Para reduzir riscos em mudanças.

Integração: Para conectar sistemas legados a novas aplicações.

---

### ✅ 1. Falta de Documentação e Especificações

* Dificuldade em compreender o comportamento esperado.

* Dependência de conhecimento tácito (informal) de desenvolvedores antigos ou usuários.

* Necessidade de realizar "engenharia reversa" para descobrir regras de negócio.

---

### ✅ 2. Baixa Testabilidade

* Arquitetura monolítica e código altamente acoplado dificultam a criação de testes unitários ou automatizados.

* Falta de pontos claros de injeção de dependências ou mocks.

* Dependência de dados reais, ambientes específicos ou configurações complexas.

---

### ✅ 3. Ausência de Testes Automatizados

* Sistema geralmente não possui cobertura automatizada.

* Alto esforço para introduzir automação, que pode exigir refatoração prévia.

* Dependência de testes manuais extensivos e demorados.

---

### ✅ 4. Ambiente Complexo ou Instável

* Ambientes de homologação ou testes frequentemente espelham parcialmente a produção.

* Dificuldade em criar dados de teste representativos.

* Dependência de sistemas externos legados para integração, muitas vezes com pouca ou nenhuma sandbox.

---

### ✅ 5. Alto Risco de Regressão

* Mudanças aparentemente pequenas podem causar efeitos colaterais em áreas não relacionadas.

* Dificuldade em garantir que novas alterações não quebrem funcionalidades existentes.

---

### ✅ 6. Processos de Deploy Manuais e Demorados

* Entregas não automatizadas dificultam a validação contínua.

* Muitas vezes, a janela de testes é curta e sob pressão.

---

### ✅ 7. Falta de Padrões e Convenções

* Código e fluxos de negócios podem ser inconsistentes, fruto de anos de manutenção por diferentes pessoas.

* Dificulta a criação de testes padronizados e reusáveis.

---

### ✅ 8. Integrações Antigas ou Opostas a Boas Práticas

* Troca de arquivos via FTP, integrações via SOAP ou sistemas proprietários complicam testes automatizados e de integração.

* Mockar ou isolar essas integrações pode ser difícil ou inviável.

---

### ✅ 9. Dependência de Interfaces Gráficas Antigas

* Sistemas baseados em interfaces desktop legadas (ex.: Delphi, Forms) dificultam a automação via ferramentas modernas.

* Testes podem exigir ferramentas específicas ou automação baseada em reconhecimento visual (mais frágil).

---

### ✅ 10. Resistência à Mudança

* Muitas vezes há resistência organizacional para mexer ou testar o sistema, com medo de quebrar algo.

* Cultura "não mexa no que está funcionando".

---

### ✅ 11. Dificuldade em Aplicar Práticas Ágeis e DevOps

* Falta de pipelines de CI/CD.

* Testes de regressão não podem ser executados automaticamente em cada entrega.

* QA atua de forma mais reativa do que preventiva.

---

### ✅ 12. Complexidade no Diagnóstico de Defeitos

* Logs insuficientes ou inexistentes.

* Dificuldade para reproduzir bugs encontrados em produção.

* Falta de ferramentas modernas para monitoração e análise.

---

# ✅ Como o QA pode lidar com esses desafios?

* Priorizando testes baseados em risco.

* Foco em testes exploratórios e de regressão.

* Trabalhar com desenvolvedores para criar pontos de testabilidade (ex.: APIs, logs).

* Introduzir automação gradualmente, começando por testes de interface ou APIs mais estáveis.

* Colaborar na definição de estratégias de modernização.