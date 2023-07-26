<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        User Information Status , {{Auth::user()->name}}
       
        </h2>
    </x-slot>

    <div class="py-12">
       <div class= "container">
        <div class="row">
            <div class="col-md-8">
                @if (session("success"))
                <div class="alert alert-success">{{session('success')}}</div> 
                @endif
                <div class="card">
                    <div class="card-header">
                        ตารางข้อมูลแผนก
                </div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">ชื่อแผนก</th>
      <th scope="col">User</th>
    </tr>
  </thead>
  <tbody>
  @php($i=1)
  @foreach ($departments as $row )
  <tr>
    <th>{{$i++}}</th>
    <td>{{$row ->department_name}}</td>
    <td>{{$row -> user_id}}</td>
  </tr>
  @endforeach
  </tbody>
</table>
            </div>

    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                แบบฟอร์ม
                </div>
                <div class="card-body">
                    <form action="{{route('addDepartment')}}"method="post">
                        @csrf
                    <div class="form-group">
                        <label for="department_name">
                        ชื่อแผนก
                        </label>
                        </div>
                        @error('department_name')
                            <span class="text-danger my-2">{{$message}}</span>
                        @enderror
                        <br>
                            <input typet="text" class="form-control" name="department_name">
                            <input type="submit" value="Okay" class="btn btn-primary">
                        </label>
                    </form>
            </div>
</x-app-layout>
