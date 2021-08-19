<?php
echo wc_get_stock_html( $product );
if( $product->is_type( 'variable' ) ){
    $available_variations = $product->get_available_variations();
    
    foreach( $available_variations as $variation ){

        if( $variation['variation_id'] == get_the_ID() ){
            echo $variation['availability_html'];
        }

    }

}
/*
$stock_status_message = $stock_status_message = $config_value['table_out_of_stock'];
if( $data['stock_status'] == 'instock' ){
    $stock_status_message =  $data['stock_quantity'] . ' ' . $config_value['table_in_stock']; 
}elseif( $data['stock_status'] == 'onbackorder' ){
    $stock_status_message = $config_value['table_on_back_order'];//'On Back Order';
}
 * //stock old style change and added wc_get_sthock
echo "<span class='{$data['stock_status']}'>" . $stock_status_message . " </span>";
*/
