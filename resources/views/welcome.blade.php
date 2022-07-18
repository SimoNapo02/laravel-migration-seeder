<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Trains</title>
    </head>
    <body class="bg-slate-900">
    {{-- {{dd($alltrains)}} --}}
        <main>
            <h1 class="uppercase text-3xl text-center py-8 text-white">tabella treni odierni</h1>
            <div class="container mx-auto">
                <ul >
                    @foreach ($today_trains as $train)
                    <li class="p-2 border bg-black text-orange-500">
                        <div class="card flex justify-start gap-4">
                            <span class="w-2/12">Codice treno: {{$train->codice_treno}}</span>
                            <p class="w-5/12">Partenza da <span class="text-blue-400 font-bold">{{$train->stazione_partenza}}</span> alle ore: <span class="text-blue-400 font-bold">{{date('H:m',strtotime( $train->orario_partenza))}}</span> </p>
                            <p class="w-5/12">Arrivo a <span class="text-blue-400 font-bold">{{$train->stazione_arrivo}}</span> alle ore: <span class="text-blue-400 font-bold">{{date('H:m',strtotime( $train->orario_arrivo))}}</span> </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </main>

    </body>
</html>