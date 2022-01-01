<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blogs)
            <tr>
                <td>{{ $blogs->id }}</td>
                <td>{{ $blogs->title }}</td>
                <td>{{ $blogs->description }}</td>
                <td>{{ $blogs->created_at }}</td>
                <td>{{ $blogs->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
