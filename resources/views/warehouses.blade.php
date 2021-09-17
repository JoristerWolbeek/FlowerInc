<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <a href="{{ route('warehouses/add')}}"><button type="button" class="btn btn-success" >Add</button></a>
            <div class="space-y-4 center">
            @foreach ($warehouses as $warehouse)
                <div class="card" style="margin-top:15px">
                    <div class="card-header d-flex justify-content-between">
                        {{$warehouse->name}} - located in {{$warehouse->location}} - Total flowers: {{$warehouse->stock->sum('amount')}}
                        <form method="post" action="../warehouses/delete">
                         @csrf  
                            <input type="submit"  value="Delete warehouse" class="btn btn-danger"><input name="delete" hidden value="{{$warehouse->id}}">
                        </form>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse{{$warehouse->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Details
                        </a>
                        <div class="collapse" id="collapse{{$warehouse->id}}">
                            <div class="card card-body">
                            <ul class="list-group list-group-flush">
                            @foreach ($flowers as $flower)
                                <li class="list-group-item">{{$flower->name}}
                                @foreach ($warehouse->stock as $stock) 
                                @if(($stock->amount > 0 && $stock->flower_id == $flower->id))
                                : {{$stock->amount}}
                                    @break
                                @endif
                                @endforeach
                                <div class="list-group list-group-flush">
                                <form method="post" action="../stock/add">
                                @csrf  
                                    <input type="number" name="amount" class="form-control" id="exampleInputPassword1" placeholder="NUMBER HERE">
                                    <input class="btn btn-success" value="Update" type="submit" class="form-control" id="exampleInputPassword1" placeholder="">
                                    <input type="number" hidden name="flower_id" value="{{$flower->id}}">
                                    <input type="number" hidden name="warehouse_id" value="{{$warehouse->id}}">
                                    </div>
                                </form>

                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
</x-app-layout>

