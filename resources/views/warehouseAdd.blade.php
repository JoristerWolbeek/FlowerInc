<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <a href="{{ route('warehouses')}}"><button type="button" class="btn btn-secondary" >back</button></a>
        <div class="space-y-4 center">
            <div class="card" style="margin-top:15px">
                <div class="card-header"> Add a warehouse
                </div>
                <div class="card-body">
                    <form method="POST" action="../warehouses/create">
                    @csrf  
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Warehouse name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Warenhuis Luis">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Warehouse loction</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="location" placeholder="Warenhuis ten broek">
                        </div>
                        <input class="btn btn-success" type="submit" value="add">
                        </form>
                </div>
            </div>
        </div>
</x-app-layout>

