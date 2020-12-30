@extends('control.layout._layout')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
        	<i class="fa fa-list"></i>
    		All Categoreis
        </h3>
    </div>
    <div class="panel-body">
    	<table class="table table-bordered">
            <thead>
                <tr>
                    <th> # </th>
                    <th> Name </th>
                    <th> Category </th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                @foreach($gifts as $gift)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $gift['name'] }}</td>
                        <td>{{ $gift->category['name'] }}</td>
                        <td style="text-align: center;">
                            <a href="{{ route('gift.edit', ['id' => $gift['id']]) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('gift.delete', ['id' => $gift['id']]) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
