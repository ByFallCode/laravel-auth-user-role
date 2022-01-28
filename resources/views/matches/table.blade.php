<div class="table-responsive">
    <table class="table" id="matches-table">
        <thead>
        <tr>
            <th>Equipe1</th>
        <th>Equipe2</th>
        <th>Score</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($matches as $match)
            <tr>
                <td>{{ $match->equipe1 }}</td>
            <td>{{ $match->equipe2 }}</td>
            <td>{{ $match->score }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['matches.destroy', $match->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('matches.show', [$match->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('matches.edit', [$match->id]) }}"
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
