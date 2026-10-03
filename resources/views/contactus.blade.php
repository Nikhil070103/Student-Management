<html>
    <body>
        <h1>Contact Us</h1>
       <h2>Name: {{$name}}</h2>
        <h3>Id : {{$id}}</h3>

        
    @for ($i=0; $i<10; $i++)
            <p>{{ $i }}</p>

           @if ($i==5)
                <h1>Hi there is {{$i}}</h1>
                     
           @endif 
    @endfor
    </body>
</html>