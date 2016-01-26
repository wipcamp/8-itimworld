<table class="table table-hover">
    <tr>
      <th>Name</th>
      <th>Number</th>
      <th>Sex</th>
    </tr>

    @foreach ($data as $user)
      <tr>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['number'] }}</td>
        <td>{{ $user['sex'] }}</td>
      </tr>
    @endforeach


</table>
