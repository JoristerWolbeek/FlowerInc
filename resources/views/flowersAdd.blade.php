<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <a href="{{ route('flowers')}}"><button type="button" class="btn btn-secondary" >back</button></a>
        <div class="space-y-4 center">
            <div class="card" style="margin-top:15px">
                <div class="card-header"> Add a flower type
                </div>
                <div class="card-body">
                    <form method="POST" action="../flowers/create">
                    @csrf  
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Flower name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Roze">
                        </div>
                        <input class="btn btn-success" type="submit" value="add">
                        </form>
                </div>
            </div>
        </div>
</x-app-layout>

