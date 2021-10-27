@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Rafael Londoño Botero</h1>
   <br>
   <a class="btn btn-primary" href="{{ route('answers.create')}}" role="button">Link</a>
   <br>
   <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Pregunta</th>
        <th scope="col">Respuesta</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($answers as $answer)
    <tr>
        <th scope="row">1</th>
        <td>Si S es un subtipo de T que queremos introducir de forma segura en el programa. <br> 
            ¿Qué requiere el principio de Liskov que cumpla S?</td>
        <td>{{ $answer->answer1 }}</td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td>Queremos diseñar un sistema siguiendo el Dependency Inversion Principle. <br>
            El módulo principal es HealthService, que recomienda a usuarios hábitos saludables en función de sus características. <br> 
            Este módulo necesita autenticar usuarios y por eso usa los servicios de un módulo de bajo nivel: AuthenticationService. <br>
            Actualmente el código de HealthService tiene referencias directas a AuthenticationService. <br>
            ¿Qué cambio deberíamos hacer para cumplir con el Dependency Inversion Principle?</td>
        <td>{{ $answer->answer2 }}</td>
      </tr>

      <tr>
        <th scope="row">3</th>
        <td>Verdadero o falso. Nuestras entidades, bien sean, clases, módulos, funciones, deben ser abiertas para la modificación y cerradas para la extensión. <br>
            Siendo un sistema modificable, sin extender el código existente, evitando errores.</td>
        <td>{{ $answer->answer3 }}</td>
      </tr>

      <tr>
        <th scope="row">4</th>
        <td>El Dependency Inversion Principle recomienda que los módulos de alto nivel no dependan de los de bajo nivel. <br>
            ¿Qué estrategia usa para conseguirlo?</td>
        <td>{{ $answer->answer4 }}</td>
      </tr>

      <tr>
        <th scope="row">5</th>
        <td>Según el principio sw Dependency Inversion Principle, los módulos de alto nivel no deben depender de los módulos de bajo nivel, <br>
            ambos deben depender de abstracciones, las cuales no deben depender de los detalles, son estos los que dependen de las abstracciones. <br>
            Normalmente esto aplica en una arquitectura de 3 capas. La imagen que mejor representa esta afirmación es:</td>
        <td>{{ $answer->answer5 }}</td>
      </tr>

      <tr>
        <th scope="row">6</th>
        <td>¿Qué método no debería formar parte de la clase Cesta según el Single Responsibility Principle?</td>
        <td>{{ $answer->answer6 }}</td>
      </tr>

      <tr>
        <th scope="row">7</th>
        <td>Hemos implementado una clase MailSender que envía correos de distintos tipos, representados como subclases de una interface genérica Mail. <br>
            Cada vez que se introduce tipo de Mail nuevo modificamos la clase MailSender para adaptar el envío a este nuevo tipo de email. <br>
            ¿Qué principio SOLID estamos violando?</td>
        <td>{{ $answer->answer7 }}</td>
      </tr>

      <tr>
        <th scope="row">8</th>
        <td>Determina el caso de violación a que principio pertenece: En un mismo método mezclamos lógica del negocio, con lógica de presentación.</td>
        <td>{{ $answer->answer8 }}</td>
      </tr>

      <tr>
        <th scope="row">9</th>
        <td>Qué principio se estaría violando en el siguiente diagrama de clases, si llega un nuevo cliente que desea enviar mensajes sin encriptarlos. <br>
             Recuerda el principio que menciona que los clientes NO DEBEN estar forzados a depender de métodos que ellos no utilizan:</td>
        <td>{{ $answer->answer9 }}</td>
      </tr>

      <tr>
        <th scope="row">10</th>
        <td>(Verdadero o Falso). El principio de responsabilidad única trata de que si cada clase tiene una única responsabilidad, <br>
            esta será más fácil de mantener. Si un módulo agrupa funcionalidades muy dispersas, su cohesión es baja, <br>
            si un módulo tiene una única funcionalidad, su cohesión es alta.</td>
        <td>{{ $answer->answer10 }}</td>
      </tr>
      <tr>
        <th scope="row">#</th>
        <td><a href="{{ route('answers.edit',$answer->id) }}" class="btn btn-warning mt-3">Editar</a></td>
        
      </tr>
      

    @endforeach
      

    </tbody>
  </table>
</div>
@endsection