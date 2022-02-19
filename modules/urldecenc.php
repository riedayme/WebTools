<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'URL Decode/Encode';
include "template/header.php";
?>
<section class="section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 col-12">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="titlemb-30 mb-30">
                                <h2><?php echo $title; ?></h2>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                    <div class="card-style mb-50">

                        <div class="input-style-1">
                           <label>Insert URL</label>
                           <textarea rows="5" autofocus="" id="dencoder"></textarea>
                       </div>

                       <input class="btn-primary p-1" type="button" onclick="decode()" value="Decode">
                       <input class="btn-primary p-1" type="button" onclick="encode()" value="Encode">

                       <script type="text/javascript">
                        function encode() {
                            var obj = document.getElementById('dencoder');
                            var unencoded = obj.value;
                            obj.value = encodeURIComponent(unencoded).replace(/'/g,"%27").replace(/"/g,"%22");  
                        }
                        function decode() {
                            var obj = document.getElementById('dencoder');
                            var encoded = obj.value;
                            obj.value = decodeURIComponent(encoded.replace(/\+/g,  " "));
                        }
                    </script>

                </div>
            </div>
        </div>
        <!-- end container -->
    </div>
</div>
</section>
<?php
include "template/footer.php";
?>
