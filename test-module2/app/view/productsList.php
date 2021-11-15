<div class="container">
    <h1 style="text-align: center">Danh sách khách hàng</h1>
    <div class="row mt-5">
        <div class="col-md-9">
            <form action="" method="post">
                <div class="row">
                    <p>nhập tên hàng: </p>
                    <input class="form-control ml-2"
                           name="search" type="search" placeholder="Search" aria-label="Search"
                           style="width: 300px">
                    <button class="btn btn-success ml-3 " type="submit">Tìm kiếm</button>
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <a href="index.php?page=add" type="button" class="btn btn-success">Thêm mặt hàng</a>
        </div>
    </div>
    <table class="table table-striped mt-2">
        <thead style="background-color: #449344;color: white">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên hàng</th>
            <th scope="col">Loại hàng</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody class="table-bordered">
        <?php $stt=1; foreach ($products as $product):?>
        <tr>
            <th scope="row"><?php echo $stt++ ?></th>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['category'] ?></td>
            <td style="text-align: center"><a href="index.php?page=edit&id=<?php echo $product['id'] ?>">Chỉnh sửa</a>| <a href="index.php?page=delete&id=<?php echo $product['id'] ?>">Xóa</a></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
