<?php
include 'header.php';
include 'data.php';
?>
<div class="row">
    <?php foreach ($data as $key => $item): ?>
    <div class="col-md-4">
        <div class="card">
            <div class="view overlay">
                <img class="card-img-top"
                    src="img/<?php echo $item['image']; ?>"
                    alt="">
                <a
                    href="order.php?id=<?php echo $item['id']; ?>">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    <a
                        href="order.php?id=<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a>
                </h4>
                <hr>
                <p class="card-text"><?php echo $item['description']; ?>
                </p>
                <hr>
                <div class="d-flex justify-content-around">
                    <p>BDT <?php echo $item['price']; ?>/-
                    </p>
                    <a href="order.php?id=<?php echo $item['id']; ?>"
                        class="black-text d-flex justify-content-end">
                        <h5>Buy Now <i class="fas fa-angle-double-right"></i></h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <!-- <div class="col-md-4">
        <div class="card">
            <div class="view overlay">
                <img class="card-img-top" src="img/icon.png" alt="">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="">Bkash for Whmcs</a>
                </h4>
                <hr>
                <p class="card-text">Bkash is one of the most popular payment system in Bangladesh. We made a simple
                    Bkash modules for Whmcs.</p>
                <hr>
                <div class="d-flex justify-content-around">
                    <p>BDT 1500/-</p>
                    <a href="order.html" class="black-text d-flex justify-content-end">
                        <h5>Buy Now <i class="fas fa-angle-double-right"></i></h5>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
</div>
</div>
<?php include 'footer.php';
