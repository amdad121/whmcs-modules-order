<?php
include 'header.php';
include 'data.php';

$id = validation($_GET['id']);

function validation($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$item = null;
foreach ($data as $value) {
    if ($id == $value['id']) {
        $item = $value;
        break;
    }
}

if ($item == null) {
    header('Location: /');
}

$charge = $item['price'] / 100 * 1.85;
$total = $charge + $item['price'];
?>
<section class="mb-4">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Confirm Order</h2>
    <p class="text-center w-responsive mx-auto mb-3">Please write down real information for contactting to you.</p>
    <p class="w-responsive mx-auto mb-3">
        <b>Please first you send taka to us following step below. To send money: </b> <br>

        01. Go to your bKash Mobile Menu by dialing *247#<br>
        02. Choose “Send Money”<br>
        03. Enter <b>01821179781</b> Number you want to send money to<br>
        04. Enter <b><?php echo round($total) ?></b> you want to
        send (with Bkash Charge) <br>
        05. Enter a reference <b>0</b>.<br>
        06. Now enter your bKash Mobile Menu PIN to confirm the transaction<br>

        Done! You and the Receiver both will receive a confirmation message from bKash with <b>TrxID</b>.
    </p>
    <div class="row justify-content-md-center">
        <div class="col-md-8 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form"
                action="<?php echo htmlspecialchars('confirm.php'); ?>"
                method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="email" id="email" name="email" class="form-control">
                            <label for="email" class="">Email Address</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="number" id="bkash" name="bkash" class="form-control">
                            <label for="bkash" class="">Bkash Number</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="trxid" name="trxid" class="form-control">
                            <label for="trxid" class="">Bkash TrxID</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <select name="module" id="module" class="browser-default custom-select">
                                <?php if ($item['id'] == '1'): ?>
                                <option
                                    value="<?php echo $item['title'] ?>"
                                    readonly selected><?php echo $item['title'] ?>
                                </option>
                                <?php endif; ?>
                                <?php if ($item['id'] == '2'): ?>
                                <option
                                    value="<?php echo $item['title'] ?>"
                                    readonly selected><?php echo $item['title'] ?>
                                </option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="comment" name="comment" rows="2"
                                class="form-control md-textarea"></textarea>
                            <label for="comment">Comment</label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
</section>
</div>
<?php include 'footer.php';
