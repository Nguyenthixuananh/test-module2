<div class="container">
    <h1 style="text-align: center">Kết quả tìm kiếm mặt hàng</h1>
    <div class="row mt-5">
        <div class="col-md-9">
            <input type="hidden">
        </div>
        <div class="col-md-3">
            <a href="index.php?page=listHome" type="button" class="btn btn-success">Xem danh sách mặt hàng</a>
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
                <td style="text-align: center"><a href="index.php?page=edit">Chỉnh sửa</a>| <a href="page=delete">Xóa</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>

