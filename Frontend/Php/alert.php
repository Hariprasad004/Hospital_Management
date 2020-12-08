function showAlert($type, $msg){
    $('.alert').hide();
    $dom=DOMDocument.getElementById('body');
    $elem = new DOMDocument('div', $msg);
    $elem->setClass('alert alert--$msg');
    $dom->appendChild($elem);
    sleep(4000);
    $html = preg_replace('#<div class="alert">(.*?)</div>#','',$html);
}