
<?php

 $apiKey = "rzp_live_QQ6przN6QLYlmy";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" 
    data-amount="<?php echo $_POST['801'] * 100;?>" 
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="Piyush Web"
    data-description="Pay For Aarambh Package"
    data-image="https://traidev.com/img/web-desgin-development.png"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="black"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

