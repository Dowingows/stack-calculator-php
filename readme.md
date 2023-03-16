# Stack Calculator

A Stack Calculator é uma biblioteca PHP que permite a criação de uma calculadora em pilha simples. O conceito de pilha é utilizado para realizar cálculos matemáticos básicos.

## Como usar
Para usar a biblioteca, você precisará ter o Composer instalado em seu sistema. Em seguida, siga as seguintes etapas:

1.  Adicione a biblioteca à sua lista de dependências usando o Composer:

```
composer require dowingows/calculator
```

2. Crie um arquivo PHP em seu projeto e importe a classe StackCalculator:

```
require __DIR__ . '/vendor/autoload.php';

use Dowingows\Calculator\StackCalculator;

$calculator = new StackCalculator;
```

3. Adicione valores e operadores à pilha usando os métodos push e <nome operação> da classe StackCalculator:

```
$calculator->push(2);
$calculator->push(3);
$calculator->add();
```

4. Continue adicionando valores e operadores à pilha e realizando operações até que apenas um valor permaneça na pilha.

```
$resultado = $calculator->getResult();
```


## Referência

Aqui estão os métodos disponíveis na classe StackCalculator:

- push($valor): Adiciona um valor à pilha.

- {nome_do_operador}($valor): Realizar a operação em dois valores da pilha.

- getResult(): Retorna o resultado final do cálculo.
