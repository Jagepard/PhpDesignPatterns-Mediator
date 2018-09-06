## Table of contents

- [\Behavioral\Mediator\ConcreteColleague2](#class-behavioralmediatorconcretecolleague2)
- [\Behavioral\Mediator\ConcreteColleague3](#class-behavioralmediatorconcretecolleague3)
- [\Behavioral\Mediator\MediatorInterface (interface)](#interface-behavioralmediatormediatorinterface)
- [\Behavioral\Mediator\ConcreteMediator](#class-behavioralmediatorconcretemediator)
- [\Behavioral\Mediator\ListenerInterface (interface)](#interface-behavioralmediatorlistenerinterface)
- [\Behavioral\Mediator\SomeHandler](#class-behavioralmediatorsomehandler)
- [\Behavioral\Mediator\ConcreteColleague1](#class-behavioralmediatorconcretecolleague1)
- [\Behavioral\Mediator\HandlerInterface (interface)](#interface-behavioralmediatorhandlerinterface)

<hr />

### Class: \Behavioral\Mediator\ConcreteColleague2

> Class ConcreteColleague2

| Visibility | Function |
|:-----------|:---------|
| public | <strong>onEvent(</strong><em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Mediator\ListenerInterface](#interface-behavioralmediatorlistenerinterface)*

<hr />

### Class: \Behavioral\Mediator\ConcreteColleague3

> Class ConcreteColleague3

| Visibility | Function |
|:-----------|:---------|
| public | <strong>onEvent(</strong><em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Mediator\ListenerInterface](#interface-behavioralmediatorlistenerinterface)*

<hr />

### Interface: \Behavioral\Mediator\MediatorInterface

> Interface MediatorInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addListener(</strong><em>\string</em> <strong>$key</strong>, <em>\string</em> <strong>$instance</strong>, <em>\string</em> <strong>$event</strong>)</strong> : <em>void</em> |
| public | <strong>dispatch(</strong><em>\string</em> <strong>$key</strong>, <em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)/null/[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$event=null</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \Behavioral\Mediator\ConcreteMediator

> Class ConcreteMediator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addListener(</strong><em>\string</em> <strong>$listener</strong>, <em>\string</em> <strong>$instance</strong>, <em>\string</em> <strong>$event</strong>)</strong> : <em>void</em> |
| public | <strong>dispatch(</strong><em>\string</em> <strong>$listener</strong>, <em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)/null/[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler=null</strong>)</strong> : <em>mixed</em> |

*This class implements [\Behavioral\Mediator\MediatorInterface](#interface-behavioralmediatormediatorinterface)*

<hr />

### Interface: \Behavioral\Mediator\ListenerInterface

> Interface ListenerInterface

| Visibility | Function |
|:-----------|:---------|

<hr />

### Class: \Behavioral\Mediator\SomeHandler

> Class SomeHandler

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMessage()</strong> : <em>string</em> |
| public | <strong>setMessage(</strong><em>\string</em> <strong>$message</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)*

<hr />

### Class: \Behavioral\Mediator\ConcreteColleague1

> Class ConcreteColleague1

| Visibility | Function |
|:-----------|:---------|
| public | <strong>onEvent(</strong><em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Mediator\ListenerInterface](#interface-behavioralmediatorlistenerinterface)*

<hr />

### Interface: \Behavioral\Mediator\HandlerInterface

> Interface HandlerInterface

| Visibility | Function |
|:-----------|:---------|

