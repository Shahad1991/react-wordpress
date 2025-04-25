<?php
function expose_acf_fields_to_rest($response, $post, $request) {
    if (!function_exists('get_fields')) return $response;

    $acf = get_fields($post->ID);
    if ($acf) {
        $response->data['acf'] = $acf;
    }
    return $response;
}
add_filter('rest_prepare_post', 'expose_acf_fields_to_rest', 10, 3);
