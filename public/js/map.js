function initMap() {
  // Geolocation APIに対応している
  if (navigator.geolocation) {
      // 現在地を取得
      navigator.geolocation.getCurrentPosition(
          // 取得成功した場合
          function successFunc(position) {
              // 現在地の取得し、緯度・経度を変数に格納
              var mapLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

              //マップの生成
              map = new google.maps.Map(document.getElementById('map'), {
                  center: mapLatLng, // 現在地の緯度・経度
                  zoom: 15 // ズーム


              });

              //マーカーとウインドウの生成
              for (var i = 0; i < max; i++) {
                  var markerLatLng = {
                      lat: data[i]['lat'],
                      lng: data[i]['lng']
                  }
                  // マーカーの生成
                  marker[i] = new google.maps.Marker({
                      position: markerLatLng,
                      map: map,
                      title: data[i]['name'],
                      animation: google.maps.Animation.DROP
                  });

                  // 情報ウィンドウの生成
                  let contentStr = 
                      '<div>' +
                          '<h5>' + data[i]["name"] + '</h5>' + 
                          '<p class="window_p">' + data[i]["type"] + '</p>' + 
                          '<p class="window_p">' + data[i]["smoking"] + '</p>' + 
                          '<a href=' + data[i]["url"] + '>詳細を見る</a>' +
                      '</div>';
                  infoWindow[i] = new google.maps.InfoWindow({
                      content: contentStr
                  });

                  // Markerがクリックされたときに、情報ウィンドウを表示させる
                  // イベントリスナーを使って、Markerがクリックされたときにshowinfo(i)する
                  // 別の関数を定義して変数iの値を固定して関数に引き渡す
                  google.maps.event.addListener(marker[i], 'click', showInfo(i));

                  function showInfo(index) {
                      return function() {
                          var i = 0;
                          while (infoWindow[i]) {
                              infoWindow[i++].close();
                          }
                          //indexにはクリックされたiの数字が引数として、渡される
                          infoWindow[index].open(map, marker[index]);
                      }
                  }

              }

          },
          // 取得失敗した場合
          function errorFunc(error) {
              // エラーメッセージを表示
              switch (error.code) {
                  case 1: // PERMISSION_DENIED
                      alert("位置情報の利用が許可されていません");
                      break;
                  case 2: // POSITION_UNAVAILABLE
                      alert("現在位置が取得できませんでした");
                      break;
                  case 3: // TIMEOUT
                      alert("タイムアウトになりました");
                      break;
                  default:
                      alert("その他のエラー(エラーコード:" + error.code + ")");
                      break;
              }
          }
      );
      // Geolocation APIに対応していない
  } else {
      alert("この端末では位置情報が取得できません");
  }
}