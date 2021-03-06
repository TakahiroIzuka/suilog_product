// PHPからデータの受け取り 
let datas = JSON.parse('<?php echo json_encode($stores_js) ?>');
let link_to_show = JSON.parse('<?php echo json_encode($link_to_show) ?>');
let gmap_key = JSON.parse('<?php echo json_encode($gmap_key) ?>');
let map;
let marker = [];
let infoWindow = [];
let data = [];
let max = datas.length;

// for文で繰り返しながらobjに配列としてデータを入れ、markerdataにpushし、二次元配列を作る
for (i = 0; i < max; i++) {
    var obj = {
        id: datas[i].id,
        lat: datas[i].lat,
        lng: datas[i].lng,
        name: datas[i].name,
        type: datas[i].type,
        smoking: datas[i].smoking,
        url: link_to_show + datas[i].id
    }
    // push メソッドで空の配列にオブジェクトを追加
    data.push(obj);
}