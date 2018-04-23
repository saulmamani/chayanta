<table class="table table-responsive" id="estudiantes-table">
    <thead>
        <tr>
        <th>Email</th>
        <th>Nombre</th>
        <th>Cargo</th>
        <th>Rol</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $user)
        <tr>
            <td>{!! $user->email !!}</td>
            <td>{!! $user->name !!}</td>
            <td>{!! $user->cargo !!}</td>
            <td>{!! $user->rol !!}</td>
            <td>
            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
            {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>