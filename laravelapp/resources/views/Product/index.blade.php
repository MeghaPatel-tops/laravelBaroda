<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Product List</h3>
                <button class="btn btn-light text-primary fw-semibold">
                    + Add Product
                </button>
            </div>
        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">

                    <thead class="table-dark">
                        <tr>
                            <th width="8%">#</th>
                            <th>Product Name</th>
                            <th width="15%">Price</th>
                            <th>Description</th>
                            <th width="18%">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php $i=1 @endphp
                         @foreach($products as $index)
                         <tr>
                            <td>{{$i}}</td>
                            <td>{{$index['pname']}}</td>
                            <td>{{$index['price']}}</td>
                            <td>{{$index['desc']}}</td>
                            <td>
                                <button class="btn btn-sm btn-warning">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                         @php $i++ @endphp
                         @endforeach

                     
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

</body>
</html>