<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="kids-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($kids as $kid)
                <tr>
                    <td>{{ $kid->name }}</td>
                    <td>{{ $kid->description }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['kids.destroy', $kid->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('kids.show', [$kid->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('kids.edit', [$kid->id]) }}"
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

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $kids])
        </div>
    </div>
</div>
