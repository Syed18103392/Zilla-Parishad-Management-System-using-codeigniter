<?php
$sql = $tranning_info_complete_info;

?>
<script language="javascript">
    function printdiv(printpage) {
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr + newstr + footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
</script>

</div>
<!-- ./sidebar-wrapper -->
<!-- Page content -->
<div id="page-content-wrapper">
    <div class="page-content">
        <!-- Content Header (Page header) -->
        <section class="content-header z-depth-1">
            <div class="header-icon">
                <i class="fa fa-file-o"></i>
            </div>
            <div class="header-title">
                <h1> প্রশিক্ষণ </h1>

                <ul class="link hidden-xs">
                    <li><a href="<?php echo base_url() ?>record-tranning-info">সকল প্রশিক্ষণ সমূহ </a></li>
                </ul>
            </div>
        </section>
        <!-- page section -->
        <div class="container-fluid">
            <div class="row">
                <!-- basic forms -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                        <div class="card-content">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    &nbsp;
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                    <div id="div_print">
                                        <table class="table table-striped" width="810" height="354" border="1" align="center" style="background:#FFF; border:1px solid #23374e; padding-left:10px; color:#000;">
                                            <tr>
                                                <td height="115" width="20%" align="right">
                                                    <img height="100" width="120" src="<?php echo base_url(); ?>assets/dist/img/logo-gp.png" alt="logo" style="float:right">
                                                </td>
                                                <td colspan="4" align="center" valign="top" width="50%">
                                                    <h2 style="text-align:center; margin-top: 25px;font-size: 25px;margin-bottom: 0px;">জেলা পরিষদ , ফেনী</h2>
                                                    <p style="font-size:12px; text-align:center">
                                                        Website: www.zpfeni.gov.bd
                                                    </p>
                                                </td>
                                                <td align="right" width="20%">&nbsp;

                                                </td>
                                            </tr>


                                            <tr style="background:#999; color:#FFF; height:25px;">
                                                <td height="33" colspan="2">&nbsp;</td>
                                                <td colspan="4">
                                                    <span style="font-family:Tahoma, Geneva, sans-serif; text-align:center; font-size:20px; font-weight:bold;">
                                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; প্রশিক্ষণ সংক্রান্ত তথ্য </span>
                                                </td>
                                            </tr>
                                            <tr>


                                                <td width="155"> প্রশিক্ষণের ধরন </td>
                                                <td width="7"> : </td>
                                                <td width="226">
                                                    <?php
                                                    $tranning = $sql->traning_type;
                                                    $others = $sql->type_others;
                                                    if ($tranning == 'Driver') {
                                                        echo "ড্রাইভার";
                                                    } elseif ($tranning == 'sewing') {
                                                        echo "সেলাই";
                                                    } elseif ($tranning == 'Computer') {
                                                        echo "কম্পিউটার";
                                                    } elseif ($tranning == 'others') {
                                                        echo $others;
                                                    } else {
                                                    }
                                                    ?>

                                                </td>
                                                <td> প্রশিক্ষণার্থীর নাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->name;  ?></td>

                                            </tr>
                                            <tr>

                                                <td> প্রশিক্ষণের সময়কাল </td>
                                                <td> : </td>
                                                <td><?php echo $sql->from_date;
                                                    ($sql->from_date) ? 'হতে' : '' ?> <?php echo $sql->to_date;  ?></td>
                                                <td> ব্যাচ নং </td>
                                                <td> : </td>
                                                <td><?php echo $sql->batch_no;  ?></td>
                                            </tr>
                                            <tr>

                                                <td> পিতা / মাতা / স্বামীর নাম </td>
                                                <td> : </td>
                                                <td><?php echo $sql->parrents;  ?></td>
                                                <td> ঠিকানা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->address;  ?></td>
                                            </tr>
                                            <tr>

                                                <td> পেশা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->occupation; ?></td>
                                                <td> জন্ম তারিখ </td>
                                                <td> : </td>
                                                <td><?php echo $sql->dob; ?></td>
                                            </tr>

                                            <tr>


                                                <td> বয়স </td>
                                                <td> : </td>
                                                <td><?php echo $sql->age; ?></td>
                                                <td>জাতীয় পরিচয় পত্র </td>
                                                <td> : </td>
                                                <td><?php echo $sql->nid; ?></td>
                                            </tr>


                                            <tr>

                                                <td> মোবাইল নাম্বার </td>
                                                <td> : </td>
                                                <td><?php echo $sql->mobile; ?></td>
                                                <td> শিক্ষাগত যোগ্যতা </td>
                                                <td> : </td>
                                                <td><?php echo $sql->education; ?></td>
                                            </tr>




                                            <tr>
                                                <td>বিস্তারিত বর্ণনা </td>
                                                <td> : </td>
                                                <td colspan="4"><?php echo $sql->details; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p style="text-align:center; margin-top:10px; margin-right:100px;">
                                        <input name="b_print" type="button" class="ipt" onClick="printdiv('div_print');" value="প্রিন্ট">
                                    </p> <br />

                                    <h4> সংযুক্ত ফাইল </h4>
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th> ক্রমিক নং </th>
                                                <th> ফাইলের নাম </th>
                                                <th> ফাইল দেখুন </th>
                                                <th> ফাইল ডাউনলোড </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $filein =  $sql->add_file;
                                            $arr = json_decode($filein, true);
                                            $i = 0;
                                            foreach ($arr as $k => $v) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td valign="top"><?php echo $i; ?> </td>
                                                    <td valign="top"><?php echo $v; ?> </td>
                                                    <td valign="top">
                                                        <a href="#" onclick="window.open('<?php echo base_url(); ?>uploads/files/TRANNING/<?php echo $sql->tranning_id; ?>/<?php echo $v; ?>')"> ফাইল দেখুন </a>

                                                    </td>
                                                    <td valign="top">
                                                        <a href="<?php echo base_url(); ?>uploads/files/TRANNING/<?php echo $sql->tranning_id; ?>/<?php echo $v; ?>" download> ফাইল ডাউনলোড </a>

                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ./basic forms -->

            </div>
            <!-- ./bootstrap forms -->
        </div>
        <!-- ./row -->
    </div>
    <!-- ./cotainer -->
</div>
<!-- ./page-content -->
</div>
<!-- ./page-content-wrapper -->
<style type="text/css">
    #control-label {
        text-align: left;
    }
</style>

<script type="text/javascript">
    $('#addRow').click(function() {
        addItem();
    });
    $('#items_table').on('keyup', '.update', function() {
        var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
        if (key == 8 || key == 46) return false;
        calculateTotals();
    });
    $('#taxPercentage').change(function() {
        calculateTotals(); // user changed tax percentage, recalculate everything
    });

    function calculateTotals() {

        // get all of the various input typs from the rows 
        // each will be any array of elements
        var nameElements = $('.row-name');
        var descElements = $('.row-desc');
        var quantityElements = $('.row-quantity');
        var taxElements = $('.row-tax');
        var priceElements = $('.row-price');
        // var totalElements = $('.row-total');

        // get the bottom table elements
        var taxPercentageElement = $('#taxPercentage');
        var subtotalElement = $('#subtotal');
        var totalTaxElement = $('#totalTax');
        var grandtotalElement = $('#grandtotal');

        var subtotal = 0;
        var taxTotal = 0;
        var grandtotal = 0;
        $(quantityElements).each(function(i, e) {

            // get all the elements for the current row
            var nameElement = $('.row-name:eq(' + i + ')');
            var quantityElement = $('.row-quantity:eq(' + i + ')');
            var taxElement = $('.row-tax:eq(' + i + ')');
            var priceElement = $('.row-price:eq(' + i + ')');
            var totalElement = $('.row-total:eq(' + i + ')');

            // get the needed values from this row
            var qty = quantityElement.val().trim().replace(/[^0-9$.,]/g, ''); // filter out non digits like letters
            qty = qty == '' ? 0 : qty; // if blank default to 0
            quantityElement.val(qty); // set the value back, in case we had to remove soemthing
            var price = priceElement.val().trim().replace(/[^0-9$.,]/g, '');
            price = price == '' ? 0 : price; // if blank default to 0
            priceElement.val(price); // set the value back, in case we had to remove soemthing

            // get/set row tax and total
            // also add to our totals for later
            var rowPrice = (price * 1000) * qty
            subtotal = subtotal + rowPrice;
            var tax = taxPercentageElement.val() * rowPrice;
            // taxElement.val((tax / 1000).toFixed(2));
            taxTotal = taxTotal + tax;
            var total = rowPrice + tax
            totalElement.val((total / 1000).toFixed(2));
            grandtotal = grandtotal + total;
        });

        // set the bottom table values
        subtotalElement.val((subtotal / 1000));
        totalTaxElement.val((taxTotal / 1000).toFixed(2));
        grandtotalElement.val((grandtotal / 1000).toFixed(2));
    }

    function addItem() {
        var itemRow =
            '<tr>' +

            '<td><input type="text" name="challan[]" style="width:200px;height:35px" class="form-control" placeholder="Challan Number"> </td>' +
            '<td><input type="text" name="voucher[]" style="width:200px" class="form-control" placeholder="Voucher" /></td>' +
            '<td><input type="text" name="amount[]" style="width:200px" class="form-control" placeholder="Amount" /></td>' +
            '<td><input type="text" name="payto[]" style="width:200px" class="form-control"  placeholder="Pay To" /></td>' +
            '<td>&nbsp;</td>' +


            '</tr>';
        $("#items_table").append(itemRow);
    }
    addItem(); //call function on load to add the first item
</script>


<script type="text/javascript">
    $('#delTr').click(function() {

        $('#itemTable tr:last').remove();
        calculateTotals();
    });


    $(document).ready(function(e) {
        $("#discount").bind('keyup', function(e) {
            var val = $(this).val();
            var subto = $("#subtotal").val();

            var main_amt = subto - val;

            $("#grandtotal").val(main_amt);
        });

    });
</script>