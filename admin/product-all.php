<?php$arr_demo_product=array(    array(1,"products/product-grey-1.jpg","046IP7","เคสซิลิโคน(เปล่า) iPhone 7/8","279","50","1","40"),    array(2,"products/product-grey-2.jpg","046IP7","เคสซิลิโคน(เปล่า) iPhone 7/8","279","50","2","40"),    array(3,"products/product-grey-3.jpg","046IP7","เคสซิลิโคน(เปล่า) iPhone 7/8","279","50","3","40"),    array(4,"products/product-grey-4.jpg","046IP7","เคสซิลิโคน(เปล่า) iPhone 7/8","279","50","3","40"),    array(5,"products/product-grey-5.jpg","046IP7","เคสซิลิโคน(เปล่า) iPhone 7/8","279","50","3","40"));?><div class="row" id="table-striped">                    <div class="col-12">                        <div class="card">                            <div class="table-responsive">                                <?php                                        $i=0;                                        foreach($arr_demo_product as $a){                                        ?>                                <table width="100%" class="table table-striped mb-1 ">                                    <thead>                                        <tr>                                            <th width="10%">&nbsp;</th>                                            <th width="9%">รหัสสินค้า</th>                                            <th width="18%">ชื่อสินค้า</th>                                            <th width="6%">ราคา</th>                                            <th width="6%">สต๊อก</th>                                            <th width="6%">จอง</th>                                            <th width="6%">เหลือ</th>                                            <th width="19%">จัดการ</th>                                        </tr>                                    </thead>                                    <tbody>                                                                                <tr>                                            <td rowspan="6">                                            <img src="../img/<?php echo $arr_demo_product[$i][1]; ?>" style="width: 100%; height: auto;"></td>                                            <td align="left" valign="top"><?php echo $arr_demo_product[$i][2]; ?></td>                                            <td align="left" valign="top"><?php echo $arr_demo_product[$i][3]; ?></td>                                            <td align="center" valign="top"><?php echo $arr_demo_product[$i][4]; ?></td>                                            <td align="center" valign="top"><?php echo $arr_demo_product[$i][5]; ?></td>                                            <td align="center" valign="top"><?php echo $arr_demo_product[$i][6]; ?></td>                                            <td align="center" valign="top"><?php echo $arr_demo_product[$i][7]; ?></td>                                            <td align="center" valign="top">                                                <a class="btn btn-primary btn-sm"><i class="fa-solid fa-magnifying-glass"></i> ดู</a>                                                <a class="btn btn-primary btn-sm"><i class="fa-solid fa-shop"></i> หน้าร้าน</a>                                                <a class="btn btn-primary btn-sm"><i class="fa-solid fa-gear"></i> จัดการ</a>                                            </td>                                        </tr>                                        <?php for($j=0;$j<5;$j++){?>                                        <tr>                                            <td align="left" valign="top"><?php echo $arr_demo_product[$i][2]; ?>-00<?php echo $j;?></td>                                            <td align="left" valign="top"><?php echo $arr_demo_product[$i][3]; ?></td>                                            <td align="center" valign="top"><?php echo $arr_demo_product[$i][4]; ?></td>                                            <td align="center" valign="top"><?php echo $arr_demo_product[$i][5]; ?></td>                                            <td align="center" valign="top"><?php echo $arr_demo_product[$i][6]; ?></td>                                            <td align="center" valign="top">0</td>                                            <td align="center" valign="top"><a class="btn btn-success btn-sm"><i class="fa-solid fa-circle-plus"></i> เพิ่มสต๊อก</a></td>                                        </tr>                                        <?php } ?>                                    </tbody>                                </table>                                <?php $i++;} ?>                            </div>                        </div>                    </div>                </div>