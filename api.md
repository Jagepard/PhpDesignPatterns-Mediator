## Table of contents

- [\Behavioral\Mediator\AbstractListener (abstract)](#class-behavioralmediatorabstractlistener-abstract)
- [\Behavioral\Mediator\Colleague1](#class-behavioralmediatorcolleague1)
- [\Behavioral\Mediator\Colleague2](#class-behavioralmediatorcolleague2)
- [\Behavioral\Mediator\Colleague3](#class-behavioralmediatorcolleague3)
- [\Behavioral\Mediator\Handler](#class-behavioralmediatorhandler)
- [\Behavioral\Mediator\HandlerInterface (interface)](#interface-behavioralmediatorhandlerinterface)
- [\Behavioral\Mediator\Mediator](#class-behavioralmediatormediator)
- [\Behavioral\Mediator\MediatorInterface (interface)](#interface-behavioralmediatormediatorinterface)

<hr />

### Class: \Behavioral\Mediator\AbstractListener (abstract)

| Visibility | Function |
|:-----------|:---------|
| public | <strong>setMediator(</strong><em>[\Behavioral\Mediator\MediatorInterface](#interface-behavioralmediatormediatorinterface)</em> <strong>$mediator</strong>)</strong> : <em>void</em> |
| public | <strong>toGreet(</strong><em>[\Behavioral\Mediator\AbstractListener](#class-behavioralmediatorabstractlistener-abstract)</em> <strong>$listener</strong>, <em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\Mediator\Colleague1

| Visibility | Function |
|:-----------|:---------|
| public | <strong>toAnswer(</strong><em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |

*This class extends [\Behavioral\Mediator\AbstractListener](#class-behavioralmediatorabstractlistener-abstract)*

<hr />

### Class: \Behavioral\Mediator\Colleague2

| Visibility | Function |
|:-----------|:---------|
| public | <strong>toReact(</strong><em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |

*This class extends [\Behavioral\Mediator\AbstractListener](#class-behavioralmediatorabstractlistener-abstract)*

<hr />

### Class: \Behavioral\Mediator\Colleague3

| Visibility | Function |
|:-----------|:---------|
| public | <strong>sendToHell()</strong> : <em>void</em> |

*This class extends [\Behavioral\Mediator\AbstractListener](#class-behavioralmediatorabstractlistener-abstract)*

<hr />

### Class: \Behavioral\Mediator\Handler

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMessage()</strong> : <em>string</em> |
| public | <strong>setMessage(</strong><em>\string</em> <strong>$message</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)*

<hr />

### Interface: \Behavioral\Mediator\HandlerInterface

| Visibility | Function |
|:-----------|:---------|

<hr />

### Class: \Behavioral\Mediator\Mediator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addListener(</strong><em>[\Behavioral\Mediator\AbstractListener](#class-behavioralmediatorabstractlistener-abstract)</em> <strong>$listener</strong>, <em>\string</em> <strong>$method</strong>)</strong> : <em>void</em> |
| public | <strong>notify(</strong><em>[\Behavioral\Mediator\AbstractListener](#class-behavioralmediatorabstractlistener-abstract)</em> <strong>$listener</strong>, <em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)/null/[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler=null</strong>)</strong> : <em>mixed</em> |

*This class implements [\Behavioral\Mediator\MediatorInterface](#interface-behavioralmediatormediatorinterface)*

<hr />

### Interface: \Behavioral\Mediator\MediatorInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addListener(</strong><em>[\Behavioral\Mediator\AbstractListener](#class-behavioralmediatorabstractlistener-abstract)</em> <strong>$listener</strong>, <em>\string</em> <strong>$method</strong>)</strong> : <em>void</em> |
| public | <strong>notify(</strong><em>[\Behavioral\Mediator\AbstractListener](#class-behavioralmediatorabstractlistener-abstract)</em> <strong>$listener</strong>, <em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)/null/[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler=null</strong>)</strong> : <em>mixed</em> |

