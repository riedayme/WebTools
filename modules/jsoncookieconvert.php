<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'JSON Cookie Convert';
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
                                <p>
                                    Convert JSON Cookie to Cookie
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                    <div class="card-style mb-50">

                        <div class="input-style-1">
                            <label>Insert Cookie JSON</label>
                            <textarea rows="5" autofocus="" id="jsoncookie" onclick="this.select()"></textarea>
                        </div>

                        <input class="btn-primary p-1 rounded-md" type="button" onclick="convert()" value="Convert">

                        <script type="text/javascript">
                            function convert() {
                                const obj = document.getElementById('jsoncookie');
                                let value = obj.value;

                                try {
                                    let convert = JSON.parse(value);
                                    let cookie = '';
                                    for (let i in convert) {
                                        cookie += convert[i].name + '=' + convert[i].value;
                                    }
                                    obj.value = cookie;
                                } catch (e) {
                                    obj.value = "Format Invalid";  
                                }
                                
                                obj.select();
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
