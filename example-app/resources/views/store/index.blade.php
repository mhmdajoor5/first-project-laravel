<h1>All Store</h1>

<style>
    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }

    .table th, .table td {
        padding: 12px 20px;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }

    .table th {
        background-color: #f8f8f8;
        font-weight: bold;
        color: #555;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    @media (max-width: 768px) {
        .table tbody tr td {
            display: block;
            padding: 8px 20px;
        }

        .table tbody tr td:before {
            content: attr(data-label);
            float: left;
            font-weight: bold;
            color: #999;
        }

        .table tbody tr td:last-child {
            border-bottom: 0;
        }
    }

    @media (max-width: 768px) {
        .table thead {
            display: none;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #f8f8f8;
        }

        .table tbody tr:nth-child(even) {
            background-color: #fff;
        }
    }

    .edit-btn {
        display: inline-block;
        padding: 8px 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .edit-btn:hover {
        background-color: #45a049;
    }

    .delete-btn {
        display: inline-block;
        padding: 8px 16px;
        background-color: #f44336;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .delete-btu {
        display: inline-block;
        padding: 8px 16px;
        background-color: #555555;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .delete-btn:hover {
        background-color: #d32f2f;
    }

    .sidebar {
        float: right;
        padding: 15px;
        background-color: #f2f2f2;
        margin-top: 6px;
    }

    .edit-btn {
        display: inline-block;
    }

</style>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <div class="sidebar">
        <a href="{{route('stores.delete.all')}}" class="delete-btn">Delete All</a>
        <a href="{{route('stores.delete.all.truncate')}}" class="delete-btu">Delete Truncate</a>
        <a href="{{route('store.create')}}" class="edit-btn">Create</a>
    </div>

    @foreach($stores as $store)

        <tr>
            <th scope="row">{{$store->id}}</th>
            <td>{{$store->title}}</td>
            <td>{{$store->body}}</td>
            <td>
                <a href="{{route('store.edit',$store->id)}}" class="edit-btn">Edit</a>
                <a href="{{route('store.delete',$store->id)}}" class="delete-btn">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
