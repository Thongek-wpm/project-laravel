<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        User Information Status , {{Auth::user()->name}}
        <b class="float-end">Number of Online Users {{count($user)}} Person</b>
        </h2>
    </x-slot>

    <div class="py-12">
       <div class= "container">
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Date register</th>
    </tr>
  </thead>
  <tbody>
  @php($i=1)
  @foreach ($user as $row )
  <tr>
    <th>{{$i++}}</th>
    <td>{{$row -> name}}</td>
    <td>{{$row -> email}}</td>
    <td>{{$row -> created_at->diffForHumans()}}</td>
  </tr>
  @endforeach
  </tbody>
</table>
        </div>
       </div>
    </div>
</x-app-layout>
