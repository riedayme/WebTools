<?php defined('BASEPATH') OR exit('no direct script access allowed');
$title = 'HTML Encrypter';
include "template/header.php";
?>
<section class="section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="titlemb-30 mb-30">
                                <h2><?php echo $title; ?></h2>
                                by <a target="_blank" href="http://www.isdntek.com/tagbot/encryptor.htm">isdntek.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
                <div class="row">
                    <div class="card-style mb-50">

                        <script language="javascript">
                            var quot="'"
                            var fullenc=false

                            function Encrypt() {
                                if (fullenc) {
                                    EncryptAll()
                                } else {
                                    EncryptBasic()
                                }
                            }

                            function EncryptBasic(){
                                var NewCode=escape(document.getElementById('InputArea').value)
                                NewCode='<'+'script language=javascript>document.write(unescape('+quot+ NewCode+quot+ '))<'+'/script>\n'
                                document.getElementById('OutputArea').value = NewCode
                                FileSizes()
                            }

                            function EncryptAll() {
                                NewCode=""
                                var OldCode=document.getElementById('InputArea').value
                                for (var i=0; i<OldCode.length; i++){NewCode=NewCode+Hex(OldCode.charCodeAt(i))}
                                    NewCode='<'+'script language=javascript>document.write(unescape('+quot+ NewCode+quot+ '))<'+'/script>\n'
                                document.getElementById('OutputArea').value = NewCode
                                FileSizes()
                            }

                            function Decrypt() {
                                var NewCode=unescape(document.getElementById('InputArea').value)
                                NewCode=NewCode.replace("<script language=javascript>document.write(unescape('","")
                                NewCode=NewCode.replace("'))<"+"/script>","")
                                document.getElementById('OutputArea').value = NewCode
                                FileSizes()
                            }

                            function Hex(dec){
                                var hexbase="0123456789ABCDEF"
                                hx_hi=dec/16; hx_lo=dec%16;
                                hx=hexbase.substr(hx_hi,1)+hexbase.substr(hx_lo,1)
                                hexval='%'+hx
                                return hexval;
                            }

                            function FileSizes() {
                                document.getElementById('topSize').innerHTML= 
                                document.getElementById('InputArea').value.length
                                document.getElementById('bottomSize').innerHTML= 
                                document.getElementById('OutputArea').value.length

                            }

                            function Preview(selection) {
                                FileSizes()
                                var newpage=""
                                if (selection==0) {
                                    newpage=document.getElementById('InputArea').value
                                    var w0 = window.open("","popup0","width=600,height=350,directories=no,menubar=yes,status=yes,toolbar=yes,resizable=yes,scrollbars=yes,screenY=0,top=0,screenX=80,left=80" );
                                    w0.document.writeln("<html><title>Top Window Preview</title><body>" );
                                    w0.document.writeln(newpage);
                                    w0.document.writeln("<hr><form><center><input type=\"submit\" value=\"Close Window\" onClick=\"window.close();return false; \"></center></form>" );
                                    w0.document.writeln("</body></html>" );
                                    w0.document.close() ;
                                    w0.document.focus(true)
                                }
                                else {
                                    selection=1; newpage=document.getElementById('OutputArea').value
                                    var w1 = window.open("","popup1","width=600,height=350,directories=no,menubar=yes,status=yes,toolbar=yes,resizable=yes,scrollbars=yes,screenY=0,top=0,screenX=80,left=80" );
                                    w1.document.writeln("<html><title>Bottom Window Preview</title><body>" );
                                    w1.document.writeln(newpage);
                                    w1.document.writeln("<hr><form><center><input type=\"submit\" value=\"Close Window\" onClick=\"window.close();return false; \"></center></form>" );
                                    w1.document.writeln("</body></html>" );
                                    w1.document.close() ;
                                    w1.document.focus(true)
                                }
                            }
                        </script>

                        <div class="form-check mb-20 text-center">
                            <span class="radio-style">                            
                                <input name="enctype" class="form-check-input" type="radio"  checked="" onclick="fullenc=false" id="radio-1">
                                <label class="form-check-label" for="radio-1">
                                    Basic encoding
                                </label>
                            </span>
                            <span class="radio-style">     
                                <input name="enctype" class="form-check-input" type="radio" onclick="fullenc=true" id="radio-2">
                                <label class="form-check-label" for="radio-2">
                                   Full encoding
                                </label>      
                            </span>                 
                        </div>

                        <div class="input-style-1">
                            <textarea id="InputArea" name="InputArea" onchange="FileSizes()" onkeyup="FileSizes()" onmouseup="FileSizes()" rows="10"></textarea>
                        </div>

                        <table class='text-center m-auto mb-4'>
                            <tbody>
                                <tr>
                                    <td id="topSize" style="padding-right: 10px"></td>
                                    <td><input class='btn-primary p-1' type="button" value="Preview&#8593;" onclick="Preview(0)"></td>
                                    <td>&#8593; Original Code</td>
                                    <td style="padding-right: 10px"><input class='btn-primary p-1' type="button" value="Encode" onclick="Encrypt()"> </td>
                                    <td><input class='btn-primary p-1' type="button" value="Decode" onclick="Decrypt()"></td>
                                    <td>Converted Code &#8595;</td>

                                    <td><input class='btn-primary p-1' type="button" value="Preview&#8595;" onclick="Preview(1)"></td>
                                    <td id="bottomSize" style="padding-left: 10px"></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="input-style-1">
                            <textarea id="OutputArea" name="OutputArea" onchange="FileSizes()" onkeyup="FileSizes()" onmouseup="FileSizes()" readonly="" rows="10"></textarea>
                            <input type="button" onclick="document.getElementById('OutputArea').select();document.getElementById('OutputArea').focus();" value=" Select All "/>
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
