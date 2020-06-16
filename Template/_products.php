<?php
    $item_id = $_GET['item_id']?? 1;
    foreach($product -> getData() as $item):
        if ($item['item_id'] == $item_id):
?>
            <!-- product -->
            <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo $item['item_image']?? "./assets/products/1.png" ?>" alt="product1" class="img-fluid">
                            <div class="form-row pt-4 font-size-16 font-baloo">
                                <div class="col">
                                    <button type="submit" class="btn btn-danger form-control">Proceed To Buy</button>
                                </div>
                                <div class="col">
                                    <?php 
                                        if (in_array($item['item_id'], $Cart->getCartId($product -> getData('cart')))) {
                                            echo '<button type="submit" disabled class="btn btn-success form-control font-size-16">In the Cart</button>';
                                        }else{
                                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning form-control font-size-16">Add to Cart</button>';
                                        }
                                    ?>
                                    <!-- <button type="submit" class="btn btn-warning form-control">Add to Cart</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-5">
                            <h4 class="font-size-20 font-baloo"><?php echo $item['item_name']?? 'Unknown' ?></h4>
                            <small>By <?php echo $item['item_brand']?? 'Brand' ?></small>
                            <div class="d-flex">
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <a href="" class="px-2 font-size-14">20,534 ratings | 1000+ answered questions</a>
                            </div>
                            <hr class="m-0">
                            <!-- product price -->
                            <table class="my-3">
                                <tr class="font-rale font-size-14">
                                    <td>M.R.P :</td>
                                    <td><strike>$162.00</strike></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Deal Price</td>
                                    <td class="font-size-20 text-danger">$<span><?php echo $item['item_price']?? 0 ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>You Save</td>
                                    <td class="font-size-16 text-danger"><span>$152.00</span></td>
                                </tr>
                            </table>
                            <!-- !product price -->
                            <!-- policy -->
                            <div id="policy">
                                <div class="d-flex">
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="" class="font-size-12 font-rale">10 Days <br> Replacement</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-truck border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="" class="font-size-12 font-rale">Daily Tuition <br>Deliverd</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="" class="font-size-12 font-rale">1 Year <br>Warranty</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- !policy -->

                            <!-- order detail -->
                            <div id="order-detail" class="font-rale d-flex flex-column text-dark">
                                <small>Delivery by : Mar 29 - Apr 1</small>
                                <small>Sold By <a href="">Daily Electronics</a>(4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class="fas fa-map-marker-alt color-second"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                            </div>
                            <!-- order detail -->

                            <div class="row">
                                <div class="col-6">
                                    <!-- color -->
                                    <div class="color my-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="font-baloo">Color</h6>
                                            <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                            <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                            <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        </div>
                                    </div>
                                    <!-- color -->
                                </div>
                                <div class="col-6">
                                    <div class="qty d-flex">
                                        <h6 class="font-baloo">Qty</h6>
                                        <div class="px-4 d-flex font-rale">
                                            <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                            <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                            <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- size -->
                            <div class="size my-3">
                                <h6 class="font-baloo">Size</h6>
                                <div class="d-flex justify-content-between w-75">
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">4G RAM</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">8G RAM</button>
                                    </div>
                                    <div class="font-rubik border p-2">
                                        <button class="btn p-0 font-size-14">16G RAM</button>
                                    </div>
                                </div>
                            </div>
                            <!-- size -->
                        </div>
                        <div class="col-12">
                            <h6 class="font-rubik">Product Description</h6>
                            <hr>
                            <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia voluptas perferendis id labore harum minima sit deleniti obcaecati dignissimos, autem aperiam eveniet deserunt eum a quo ipsam, officia dicta molestias?</p>
                            <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia voluptas perferendis id labore harum minima sit deleniti obcaecati dignissimos, autem aperiam eveniet deserunt eum a quo ipsam, officia dicta molestias?</p>
                            <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia voluptas perferendis id labore harum minima sit deleniti obcaecati dignissimos, autem aperiam eveniet deserunt eum a quo ipsam, officia dicta molestias?</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product -->
<?php
        endif;
    endforeach;
?>