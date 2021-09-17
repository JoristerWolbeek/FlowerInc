<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <a href="{{ route('flowers/add')}}"><button type="button" class="btn btn-success" >Add</button></a>
            <div class="space-y-4 center">
            @foreach ($flowers as $flower)
                <div class="card" style="margin-top:15px">
                    <div class="card-header">
                        {{$flower->name}}
                    </div>
                    <div class="card-body">
                        <form method="post" action="../flowers/delete">
                         @csrf  
                            <input type="submit"  value="Delete flower type" class="btn btn-danger"><input name="delete" hidden value="{{$flower->id}}">
                        </form>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
</x-app-layout>

