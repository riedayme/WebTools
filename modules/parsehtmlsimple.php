<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'Parse HTML Simple';
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
                                <p>Parse you html code to entities</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                    <div class="card-style mb-50">

                        <script type="text/javascript">
                            function readelementer(id) {
                                return document.getElementById(id)
                            }
                            var char2entity = {
                                "'": '&#39;',
                                '"': '&quot;',
                                '<': '&lt;',
                                '>': '&gt;',
                                '&#038;': '&amp;'
                            };

                            function encode_entities(str) {
                                var rv = '';
                                for (var i = 0; i < str.length; i++) {
                                    var ch = str.charAt(i);
                                    rv += char2entity[ch] || ch;
                                }
                                return rv;
                            }

                            function do_encode(e) {
                                readelementer('dst').value = encode_entities(e.value)
                            }
                        </script>

                        <div class="input-style-1">
                            <label>Kode HTML</label>
                            <textarea onchange="do_encode(this)" onkeyup="do_encode(this)" placeholder="<p>test</p>" rows="10"></textarea>
                        </div>

                        <div class="input-style-1">
                            <label>Result Parse</label>
                            <textarea id="dst" onclick="this.select()" onfocus="this.select()" readonly="readonly" placeholder="<p>test</p>" rows="10"></textarea>
                        </div>

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
