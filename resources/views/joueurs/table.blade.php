<div class="table-responsive">
    <table class="table" id="joueurs-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Equipe Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($joueurs as $joueur)
            <tr>
                <td>{{ $joueur->name }}</td>
            <td>{{ $joueur->equipe->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['joueurs.destroy', $joueur->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('joueurs.show', [$joueur->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('joueurs.edit', [$joueur->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
