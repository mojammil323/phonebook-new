<table class="table table-borderd table-hover">
    <h3 class="fw-bold bg-success text-center text-white">Records table</h3>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vcard as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->contact}}</td>
                <td>
                    <div class="btn-group">
                        <form action="/vcard/{{ $item->id }}" method="post">
                            @csrf
                            @method("delete")
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                        <a href="" class="btn btn-info">Edit</a>
                    </div>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>