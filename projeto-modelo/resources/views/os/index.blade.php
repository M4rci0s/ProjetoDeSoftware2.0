<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table tr th,
        table tr td {
            border: 1px solid #000;
            padding: .5rem;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th># OS</th>
            <th>Técnico</th>
            <th>Serviços</th>
            <th>Avaliações</th>
        </tr>
        @foreach($os as $o)
        <tr>
            <th>{{$o->id}}</th>
            <th>{{$o->tecnico->nome}}</th>
            <th>{{$o->servicos_executados}}</th>
            <th>
                @if ($o->nota == null)
                <a href="javascript:avaliar({{$o->id}}, 1)">⭐</a>
                <a href="javascript:avaliar({{$o->id}}, 2)">⭐</a>
                <a href="javascript:avaliar({{$o->id}}, 3)">⭐</a>
                <a href="javascript:avaliar({{$o->id}}, 4)">⭐</a>
                <a href="javascript:avaliar({{$o->id}}, 5)">⭐</a>
                <form id="avaliar-{{$o->id}}" action="/avaliar" method="post">
                    @csrf
                    <input type="hidden" name="osId" value="{{$o->id}}">
                    <input type="hidden" id="nota-{{$o->id}}" name="nota" value="">
                </form>
                @else
                {{$o->nota}}
                @endif
            </th>
        </tr>
        @endforeach
    </table>
    <script>
        function avaliar(os, nota) {
            const avaliar = document.getElementById("avaliar-" + os);
            const notaAvaliar = document.getElementById("nota-" + os);
            notaAvaliar.value = nota;
            avaliar.submit();
        }
    </script>
</body>

</html>