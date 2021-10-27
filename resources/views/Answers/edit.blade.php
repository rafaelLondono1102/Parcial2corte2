@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Responder Preguntas</h1>
        {{ Form::open(['route' => ['answers.update', $answer->id],'method' => 'put']) }}

            <div class="mb">
                {{ Form::label('answer1', 'Si S es un subtipo de T que queremos introducir de forma segura en el programa. <br> 
                ¿Qué requiere el principio de Liskov que cumpla S?', ['class'=> 'form-label']) }}
                {{ Form::text('answer1', $answer->answer1, ['class'=>'form-control']) }}
            </div>
            <div class="mb">
                {{ Form::label('answer2', 'Queremos diseñar un sistema siguiendo el Dependency Inversion Principle.
                El módulo principal es HealthService, que recomienda a usuarios hábitos saludables en función de sus características.
                Este módulo necesita autenticar usuarios y por eso usa los servicios de un módulo de bajo nivel: AuthenticationService.
                Actualmente el código de HealthService tiene referencias directas a AuthenticationService.', ['class'=> 'form-label']) }}
                {{ Form::text('answer2', $answer->answer2, ['class'=>'form-control']) }}
            </div>
            <div class="mb">
                {{ Form::label('answer3', 'Verdadero o falso. Nuestras entidades, bien sean, clases, módulos, funciones, deben ser abiertas para la modificación y cerradas para la extensión. <br>
                Siendo un sistema modificable, sin extender el código existente, evitando errores.', ['class'=> 'form-label']) }}
                {{ Form::text('answer3', $answer->answer3, ['class'=>'form-control']) }}
            </div>
            <div class="mb">
                {{ Form::label('answer4', 'El Dependency Inversion Principle recomienda que los módulos de alto nivel no dependan de los de bajo nivel.
                ¿Qué estrategia usa para conseguirlo?', ['class'=> 'form-label']) }}
                {{ Form::text('answer4', $answer->answer4, ['class'=>'form-control']) }}
            </div>
            <div class="mb">
                {{ Form::label('answer5', 'Según el principio sw Dependency Inversion Principle, los módulos de alto nivel no deben depender de los módulos de bajo nivel,
                ambos deben depender de abstracciones, las cuales no deben depender de los detalles, son estos los que dependen de las abstracciones.
                Normalmente esto aplica en una arquitectura de 3 capas. La imagen que mejor representa esta afirmación es:', ['class'=> 'form-label']) }}
                {{ Form::text('answer5', $answer->answer5, ['class'=>'form-control']) }}
            </div>
            <div class="mb">
                {{ Form::label('answer6', '¿Qué método no debería formar parte de la clase Cesta según el Single Responsibility Principle?', ['class'=> 'form-label']) }}
                {{ Form::text('answer6', $answer->answer6, ['class'=>'form-control']) }}
            </div>
            <div class="mb">
                {{ Form::label('answer7', 'Hemos implementado una clase MailSender que envía correos de distintos tipos, representados como subclases de una interface genérica Mail. <br>
                Cada vez que se introduce tipo de Mail nuevo modificamos la clase MailSender para adaptar el envío a este nuevo tipo de email. <br>
                ¿Qué principio SOLID estamos violando?', ['class'=> 'form-label']) }}
                {{ Form::text('answer7', $answer->answer7, ['class'=>'form-control']) }}
            </div>
            <div class="mb">
                {{ Form::label('answer8', 'Determina el caso de violación a que principio pertenece: En un mismo método mezclamos lógica del negocio, con lógica de presentación.', ['class'=> 'form-label']) }}
                {{ Form::text('answer8', $answer->answer8, ['class'=>'form-control']) }}
            </div>
            <div class="mb">
                {{ Form::label('answer9', 'Qué principio se estaría violando en el siguiente diagrama de clases, si llega un nuevo cliente que desea enviar mensajes sin encriptarlos. <br>
                Recuerda el principio que menciona que los clientes NO DEBEN estar forzados a depender de métodos que ellos no utilizan:', ['class'=> 'form-label']) }}
                {{ Form::text('answer9', $answer->answer9, ['class'=>'form-control']) }}
            </div>
            <div class="mb">
                {{ Form::label('answer10', '(Verdadero o Falso). El principio de responsabilidad única trata de que si cada clase tiene una única responsabilidad, <br>
                esta será más fácil de mantener. Si un módulo agrupa funcionalidades muy dispersas, su cohesión es baja, ', ['class'=> 'form-label']) }}
                {{ Form::text('answer10', $answer->answer10, ['class'=>'form-control']) }}
            </div>


            {{ Form::submit('Actualizar parcial',['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
        
    </div>
@endsection