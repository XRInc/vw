<?php if (isset($productInfo['attribute']) && count($productInfo['attribute']) > 0) { ?>
    <div id="product-options-wrapper" class="product-options">
        <?php foreach ($productInfo['attribute'] as $_option) { ?>
            <?php
            $optionValueHtml='';
            $optionvalueRequired = $_option['required'] ? 'required-entry' : '';
            switch ($_option['type']) {
                //'select','text','radio','checkbox','wholesale','list'
                case 'select' :
                    $optionValueHtml .= '<select class="form-control . ' . $optionvalueRequired . '" name="attribute[' . $_option['product_option_id'] . ']" id="attribute_' . $_option['product_option_id'] . '">';
                    $optionValueHtml .= '<option value="">-- ' . __('Please Select') . ' --</option>';
                    foreach ($_option['value'] as $_optionValue) {
                        $optionValuePriceHtml = $_optionValue['price'] > 0 ? ' ( ' . $_optionValue['price_prefix'] . $currencies->display_price($_optionValue['price']) . ' )' : '';
                        $optionValueHtml .= '<option value="' . $_optionValue['product_option_value_id'] . '">' . __($_optionValue['name']) . $optionValuePriceHtml . '</option>';
                    }
                    $optionValueHtml .= '</select>';
                    break;
                case 'text' :
                    $_optionValue = current($_option['value']);
                    $optionValuePriceHtml = $_optionValue['price'] > 0 ? ' ( ' . $_optionValue['price_prefix'] . $currencies->display_price($_optionValue['price']) . ' )' : '';
                    $optionValueHtml .= '<input type="text" class="form-control input-text ' . $optionvalueRequired . '" value="" name="attribute[' . $_option['product_option_id'] . ']" id="attribute_' . $_option['product_option_id'] . '" placeholder="' . '" />' . $optionValuePriceHtml;
                    break;
                case 'radio' :
                    foreach ($_option['value'] as $_optionValue) {
                        $optionValuePriceHtml = $_optionValue['price'] > 0 ? ' ( ' . $_optionValue['price_prefix'] . $currencies->display_price($_optionValue['price']) . ' )' : '';
                        $optionValueHtml .= '<div class="radio"><label for="attribute_' . $_option['product_option_id'] . '_' . $_optionValue['product_option_value_id'] . '"><input type="radio" class="' . $optionvalueRequired . '" value="' . $_optionValue['product_option_value_id'] . '" name="attribute[' . $_option['product_option_id'] . ']" id="attribute_' . $_option['product_option_id'] . '_' . $_optionValue['product_option_value_id'] . '" />';
                        $optionValueHtml .= '' . __($_optionValue['name']) . $optionValuePriceHtml . '</label></div>';
                    }
                    break;
                case 'checkbox' :
                    foreach ($_option['value'] as $_optionValue) {
                        $optionValuePriceHtml = $_optionValue['price'] > 0 ? ' ( ' . $_optionValue['price_prefix'] . $currencies->display_price($_optionValue['price']) . ' )' : '';
                        $optionValueHtml .= '<div class="checkbox"><label for="attribute_' . $_option['product_option_id'] . '_' . $_optionValue['product_option_value_id'] . '"><input type="checkbox" class="' . $optionvalueRequired . '" value="' . $_optionValue['product_option_value_id'] . '" name="attribute[' . $_option['product_option_id'] . '][]" id="attribute_' . $_option['product_option_id'] . '_' . $_optionValue['product_option_value_id'] . '" />';
                        $optionValueHtml .= '' . __($_optionValue['name']) . $optionValuePriceHtml . '</label></div>';
                    }
                    break;
                case 'list' :
                    $optionValueHtml .= '<ul class="options-list">';
                    foreach ($_option['value'] as $_optionValue) {
                        $optionValuePriceHtml = $_optionValue['price'] > 0 ? ' ( ' . $_optionValue['price_prefix'] . $currencies->display_price($_optionValue['price']) . ' )' : '';
                        $optionValueHtml .= '<li onclick="$(\'#attribute_' . $_option['product_option_id'] . '\').val('.$_optionValue['product_option_value_id'].');">' . __($_optionValue['name']) . $optionValuePriceHtml . '</li>';
                    }
                    $optionValueHtml .= '</ul>';
                    $optionValueHtml .= '<input type="hidden" class="' . $optionvalueRequired . '" value="" name="attribute[' . $_option['product_option_id'] . ']" id="attribute_' . $_option['product_option_id'] . '" />';
                    break;
                case 'wholesale' :
                    $optionValueHtml .= '<table class="table table-bordered options-wholesale-list">';
                    $optionValueHtml .= '<tr><th>'. __($_option['name']) .'</th><td>'. __('Qty') .'</td></tr>';
                    foreach ($_option['value'] as $_optionValue) {
                        $optionValuePriceHtml = $_optionValue['price'] > 0 ? ' ( ' . $_optionValue['price_prefix'] . $currencies->display_price($_optionValue['price']) . ' )' : '';
                        $optionValueHtml .= '<tr>';
                        $optionValueHtml .= '<th><label for="qty_' . $_option['product_option_id'] . '_' . $_optionValue['product_option_value_id'] .'">'. __($_optionValue['name']) .'</label></th>';
                        $optionValueHtml .= '<td><input type="text" name="qty[' . $_option['product_option_id'] . '][' . $_optionValue['product_option_value_id'] . ']" id="qty_' . $_option['product_option_id'] . '_' . $_optionValue['product_option_value_id'] . '" maxlength="3" value="0" title="Qty" class="form-control input-text ' . $optionvalueRequired . ' qty valid" onblur="if($(this).val()==\'\') $(this).val(0);" onfocus="if($(this).val()==\'0\') $(this).val(\'\');" />' . $optionValuePriceHtml;
                        $optionValueHtml .= '</td></tr>';
                    }
                    $optionValueHtml .= '</table>';
                    $productInfo['qty'] = false;
                    break;
            }
            ?>
            <div class="form-group">
                <?php if ($productInfo['qty'] == true) { ?>
                    <div class="top_contact_us">
                        <div class="top_size"></div>
                        <div class="top_weixin"><label class="required"><a  id="contact_weixin" ><?php echo $_option['required'] ? '<em>*</em>' : ''; ?><?php echo __($_option['name']); ?></a></label></div>
                    </div>
                    <div id="light_weixin" class="white_content">
                        <img class="hidden-xs"  src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/size.png" alt="" />
                        <img class="hidden-lg hidden-md hidden-sm"  src="<?php echo DIR_WS_TEMPLATE_IMAGES; ?>banners/size.png" alt="" width="100%"/>
                    </div>
                    <div id="fade" class="black_overlay"  onClick="closeWindow()">
                    </div>

                <?php } ?>
                <div class="options-<?php echo $_option['type']; ?>">
                    <?php echo $optionValueHtml; ?>
                </div>
            </div>
        <?php } ?>
        <?php if ($productInfo['qty'] == true) { ?>
            <p class="required">* <?php echo __('Required Fields'); ?></p>
        <?php } ?>
    </div>
    <script  type="text/javascript">
/*        function openWindow(obj){
            switch(obj.id)
            {
                case 'contact_weixin':
                    qq_or_weixin = "light_weixin";
                    break;
            }
            document.getElementById(qq_or_weixin).style.display='block';
            document.getElementById('fade').style.display='block';
        }
        function closeWindow(){
            document.getElementById(qq_or_weixin).style.display='none';
            document.getElementById('fade').style.display='none';
        }*/

       /* $('.top_weixin').on('click',function(){
            $('#light_weixin').parent().siblings().toggle();
        });*/
$(document).ready(function(){
    $(".top_weixin").on("click",function(){
        if($("#light_weixin").hasClass("active")){
            $("#light_weixin").removeClass("active");
        }else{
            $("#light_weixin").addClass("active");
        }

    });
});
    </script>
<style>
    .active{
        display: block !important;
    }
</style>
    <script type="text/javascript">
        $("#product-options-wrapper li").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
        </script>
<?php } ?>
