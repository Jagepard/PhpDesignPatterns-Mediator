## Table of contents

- [\Behavioral\Mediator\Colleague1](#class-behavioralmediatorcolleague1)
- [\Behavioral\Mediator\MediatorInterface (interface)](#interface-behavioralmediatormediatorinterface)
- [\Behavioral\Mediator\Handler](#class-behavioralmediatorhandler)
- [\Behavioral\Mediator\ListenerInterface (interface)](#interface-behavioralmediatorlistenerinterface)
- [\Behavioral\Mediator\Colleague3](#class-behavioralmediatorcolleague3)
- [\Behavioral\Mediator\Colleague2](#class-behavioralmediatorcolleague2)
- [\Behavioral\Mediator\HandlerInterface (interface)](#interface-behavioralmediatorhandlerinterface)
- [\Behavioral\Mediator\Mediator](#class-behavioralmediatormediator)

<hr />

### Class: \Behavioral\Mediator\Colleague1

| Visibility | Function |
|:-----------|:---------|
| public | <strong>onEvent()</strong> : <em>void</em> |

*This class implements [\Behavioral\Mediator\ListenerInterface](#interface-behavioralmediatorlistenerinterface)*

<hr />

### Interface: \Behavioral\Mediator\MediatorInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addListener(</strong><em>\string</em> <strong>$name</strong>, <em>array</em> <strong>$listener</strong>)</strong> : <em>void</em> |
| public | <strong>dispatch(</strong><em>\string</em> <strong>$name</strong>, <em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)/null/[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler=null</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \Behavioral\Mediator\Handler

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getMessage()</strong> : <em>string</em> |
| public | <strong>setMessage(</strong><em>\string</em> <strong>$message</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)*

<hr />

### Interface: \Behavioral\Mediator\ListenerInterface

| Visibility | Function |
|:-----------|:---------|

<hr />

### Class: \Behavioral\Mediator\Colleague3

| Visibility | Function |
|:-----------|:---------|
| public | <strong>onEvent(</strong><em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Mediator\ListenerInterface](#interface-behavioralmediatorlistenerinterface)*

<hr />

### Class: \Behavioral\Mediator\Colleague2

| Visibility | Function |
|:-----------|:---------|
| public | <strong>onEvent(</strong><em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\Mediator\ListenerInterface](#interface-behavioralmediatorlistenerinterface)*

<hr />

### Interface: \Behavioral\Mediator\HandlerInterface

| Visibility | Function |
|:-----------|:---------|

<hr />

### Class: \Behavioral\Mediator\Mediator

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addListener(</strong><em>\string</em> <strong>$name</strong>, <em>array</em> <strong>$listener</strong>)</strong> : <em>void</em> |
| public | <strong>dispatch(</strong><em>\string</em> <strong>$name</strong>, <em>[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)/null/[\Behavioral\Mediator\HandlerInterface](#interface-behavioralmediatorhandlerinterface)</em> <strong>$handler=null</strong>)</strong> : <em>mixed</em> |

*This class implements [\Behavioral\Mediator\MediatorInterface](#interface-behavioralmediatormediatorinterface)*

