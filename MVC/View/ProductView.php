  <!-- PRODUCT TABLE -->
            <div class="card shadow-sm mb-4" id="products">

                <div class="card-header bg-white py-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                        <h5 class="mb-0">
                            <i class="bi bi-box-seam me-2"></i>
                            Products
                        </h5>

                        <button class="btn btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#addProduct">
                            <i class="bi bi-plus-lg"></i>
                            Add Product
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <!-- Search -->
                    <div class="row mb-3">
                        <div class="col-md-4 ms-auto">
                            <input type="text"
                                   class="form-control"
                                   placeholder="Search products...">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">

                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="https://placehold.co/50x50?text=Phone"
                                             class="product-img me-2">
                                        iPhone 14
                                    </td>
                                    <td>Electronics</td>
                                    <td>₹79,000</td>
                                    <td>25</td>
                                    <td>
                                        <span class="badge bg-success">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>
                                        <img src="https://placehold.co/50x50?text=Shoes"
                                             class="product-img me-2">
                                        Running Shoes
                                    </td>
                                    <td>Footwear</td>
                                    <td>₹2,500</td>
                                    <td>50</td>
                                    <td>
                                        <span class="badge bg-success">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>
                                        <img src="https://placehold.co/50x50?text=Bag"
                                             class="product-img me-2">
                                        Backpack
                                    </td>
                                    <td>Bags</td>
                                    <td>₹1,200</td>
                                    <td>30</td>
                                    <td>
                                        <span class="badge bg-success">In Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>
                                        <img src="https://placehold.co/50x50?text=Watch"
                                             class="product-img me-2">
                                        Smart Watch
                                    </td>
                                    <td>Accessories</td>
                                    <td>₹5,000</td>
                                    <td>5</td>
                                    <td>
                                        <span class="badge bg-warning text-dark">Low Stock</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


            <!-- ORDERS TABLE -->
            <div class="card shadow-sm mb-4" id="orders">

                <div class="card-header bg-white py-3">
                    <h5 class="mb-0">
                        <i class="bi bi-bag me-2"></i>
                        Recent Orders
                    </h5>
                </div>

                <div class="card-body table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>#1001</td>
                                <td>Rahul Shah</td>
                                <td>₹1,200</td>
                                <td><span class="badge bg-success">Completed</span></td>
                            </tr>
                            <tr>
                                <td>#1002</td>
                                <td>Priya Patel</td>
                                <td>₹850</td>
                                <td><span class="badge bg-primary">Processing</span></td>
                            </tr>
                            <tr>
                                <td>#1003</td>
                                <td>Amit Kumar</td>
                                <td>₹2,400</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
