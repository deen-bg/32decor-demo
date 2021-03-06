<style>
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 24px;
  color: #000;
}
@media only screen and (max-width: 640px) and (min-width: 360px){
    #gallery-head{
        font-size: 24px;
        text-align: center;
       
    }
    #gallery-product{
        font-size: 16px;
        color: black;
    }
}
</style>
<section>
    <div class="container" style="text-align: center;">
        <div data-aos="fade-up"data-aos-duration="1000">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 mb-5">
            <h1 id="product" style="margin-top: 0px;">GALLERY</h1>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #b8ac9f;padding-top: 0px;padding-bottom: 0px;">
    <div class="container-fluid">
        <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-5 pt-5">
                    <h3 id="gallery-head" style="margin-top: 0px; text-align: center;"><b style="color: aliceblue;">โครงการ Piano Comodo</b></h3>
                    <h4 id="gallery-product" style="margin-top: 0px; color: aliceblue;">หากคุณกำลังตัดสินใจตกแต่งหรือรีโนเวทบ้านสักหลัง แต่กลัวว่านานไปแล้วจะเบื่อ</h4>
                    <h4 id="gallery-product" style="margin-top: 0px;  color: aliceblue;">วันนี้ 32 Interior Design มีสไตล์การออกแบบที่อยู่อย่างไรก็ไม่เบื่อ นานแค่ไหนก็ดูไม่เก่ามาให้ชมกัน(ครับ/ค่ะ)</h4>
                    <div class="button" style="text-align: center;">
                        <button type="button" class="btn btn-outline-light mt-3 mb-3" style="border-radius: 12px;">View All</button>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-left: 0px;padding-right: 0px;">
                    <img src="<?=base_url('assets/img/detail/gallery-piano.png');?>" class="img-rounded" id="accounting2" style="width: 100%;">
                </div>
        </div>
    </div><!-- end container -->
</section>

<section class=" pb-5" id="background-about">
    <div class="container">
        <div data-aos="fade-up"data-aos-duration="1000">
            <div class="row "> <!-- row1 -->
                <?php 
                    foreach($list_galleries as $val) : 
                        echo '<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mt-3">';
                            echo '<div class="card" style="width: 100%;">';
                                echo '<a href="'.base_url('gallery-detail/'.$val['id'].'/?slug='.$val['name']).'">';
                                    echo '<img src="'.base_url('assets/img/review/ex1.png').'" id="about-product-banner" class="img-fluid ">';
                                    echo '<div class="centered">'.$val['name'].'</div>';
                                echo '</a>';
                            echo '</div>';
                        echo '</div>';
                    endforeach;
                ?>
            </div>
            <!-- pagination -->
      <div class="row mt-4 mb-4">
        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="container">
            <?=$pagination;?>
          </div>
        </div>
      </div>
      <!-- end -->  
        </div>
    </div>
</section>
