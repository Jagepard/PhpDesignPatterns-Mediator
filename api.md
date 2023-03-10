## Table of contents
- [Behavioral\Mediator\Colleague1](#behavioral_mediator_colleague1)
- [Behavioral\Mediator\Colleague2](#behavioral_mediator_colleague2)
- [Behavioral\Mediator\Colleague3](#behavioral_mediator_colleague3)
- [Behavioral\Mediator\ListenerInterface](#behavioral_mediator_listenerinterface)
- [Behavioral\Mediator\Mediator](#behavioral_mediator_mediator)
- [Behavioral\Mediator\MediatorInterface](#behavioral_mediator_mediatorinterface)
<hr>

<a id="behavioral_mediator_colleague1"></a>

### Class: Behavioral\Mediator\Colleague1
##### implements [Behavioral\Mediator\ListenerInterface](#behavioral_mediator_listenerinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>toAnswer</strong>(): void</em><br>|


<a id="behavioral_mediator_colleague2"></a>

### Class: Behavioral\Mediator\Colleague2
##### implements [Behavioral\Mediator\ListenerInterface](#behavioral_mediator_listenerinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>toReact</strong>(): void</em><br>|


<a id="behavioral_mediator_colleague3"></a>

### Class: Behavioral\Mediator\Colleague3
##### implements [Behavioral\Mediator\ListenerInterface](#behavioral_mediator_listenerinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>sendToHell</strong>(): void</em><br>|


<a id="behavioral_mediator_listenerinterface"></a>

### Class: Behavioral\Mediator\ListenerInterface
| Visibility | Function |
|:-----------|:---------|


<a id="behavioral_mediator_mediator"></a>

### Class: Behavioral\Mediator\Mediator
##### implements [Behavioral\Mediator\MediatorInterface](#behavioral_mediator_mediatorinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>addListener</strong>( string $listenerName  string $methodName ): void</em><br>Adds the name of the listener class and the method to be called when dispatch is called<br>Добавляет имя класса слушателя и метод, который будет вызван при обращении dispatch|
|public|<em><strong>dispatch</strong>( string $listenerName )</em><br>Calls the installed addListener listener method<br>Вызывает установленный addListener метод слушателя|


<a id="behavioral_mediator_mediatorinterface"></a>

### Class: Behavioral\Mediator\MediatorInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>addListener</strong>( string $listenerName  string $methodName ): void</em><br>|
|abstract public|<em><strong>dispatch</strong>( string $listenerName )</em><br>|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
