<div class="container">
    <h1 style="text-align: left">Chỉnh sửa thông tin sản phẩm</h1>
    <div class="row mt-5">
        <div class="col-md-9">
            <input type="hidden">
        </div>
    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-2"><p>Tên hàng:</p></div>
            <div class="col-md-9 input-group mb-3 " style="text-align: left"><input type="text" name="name" value="<?php echo $product['name'] ?>"></div>
        </div>
        <div class="row">
            <div class="col-md-2"><p>Loại hàng:</p></div>
            <div class="input-group mb-3 col-md-3">
                <select class="custom-select" id="inputGroupSelect01" name="category">
                    <option selected value="<?php echo $product['category'] ?>"><?php echo $product['category'] ?></option>
                    <option value="Laptop">Laptop</option>
                    <option value="Điện thoại">Điện thoại</option>
                    <option value="TV">TV</option>
                    <option value="Điều hòa">Điều hòa</option>
                </select>
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
        <div class="row">
            <div class="col-md-2"><p>Giá:</p></div>
            <div class="col-md-9" style="text-align: left"><input type="number" name="price" value="<?php echo $product['price'] ?>"></div>
        </div>
        <div class="row">
            <div class="col-md-2"><p>Số lượng:</p></div>
            <div class="col-md-9" style="text-align: left"><input type="number" name="quantity" value="<?php echo $product['quantity'] ?>" ></div>
        </div>
        <div class="row">
            <div class="col-md-2"><p>Mô tả:</p></div>
            <div class="col-md-9" style="text-align: left"><textarea name="information" ><?php echo $product['description'] ?></textarea></div>
        </div>
        <div class="row">
            <button class="btn btn-success" style="color: white; ">Nhập</button>
            <a href="index.php?page=listHome" class="btn btn-success" style="margin-left: 10px">Thoát</a>
        </div>

    </form>
</div>