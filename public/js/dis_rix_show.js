function initMap() {
  // Geolocation APIに対応している
  if (navigator.geolocation) {
      // 現在地を取得
      navigator.geolocation.getCurrentPosition(
          // 取得成功した場合
          function successFunc(position) {
              // 現在地の取得し、緯度・経度を変数に格納
              let mapLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

              //マップの生成
              map = new google.maps.Map(document.getElementById('map'), {
                  center: mapLatLng, // 現在地の緯度・経度
                  zoom: 15 // ズーム
              });

              // Add Distance Matrix here
              const service = new google.maps.DistanceMatrixService();
              let matrixOptions = {
                  origins: [geo],
                  destinations: [mapLatLng], // customer address
                  travelMode: 'WALKING',
                  unitSystem: google.maps.UnitSystem.METRIC
                  };

              service.getDistanceMatrix(matrixOptions, callback);

              // Callback function used to process Distance Matrix response
              function callback(response, status) {
                if (status !== "OK") {
                  alert("Error with distance matrix");
                  return;
                }
                
                // Callbackで取得したデータとPHPから受け取ったデータをHTMLへ飛ばす
                document.getElementById("distance")
                  .textContent = "距離 : " + response.rows[0].elements[0].distance.text;
                document.getElementById("time")
                  .textContent = "ここから徒歩 : " + response.rows[0].elements[0].duration.text;
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