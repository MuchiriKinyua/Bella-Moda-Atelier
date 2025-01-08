<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="kings-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($kings as $king)
                <tr>
                    <td>{{ $king->name }}</td>
                    <td>{{ $king->description }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['kings.destroy', $king->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('kings.show', [$king->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('kings.edit', [$king->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $kings])
        </div>
    </div>
</div>
