

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
                  origins: (geos),
                  destinations: [mapLatLng], // customer address
                  travelMode: 'WALKING',
                  unitSystem: google.maps.UnitSystem.METRIC
                  };

              service.getDistanceMatrix(matrixOptions, callback);

              function orgRound(value, base) {
                return Math.round(value * base) / base;
              }

              // Callback function used to process Distance Matrix response
              function callback(response, status) {
                if (status !== "OK") {
                  alert("Error with distance matrix");
                  return;
                }
                // 値を０からナンバリング
                for (let i = 0; i < max; i++) {
                  response.rows[i].elements.push([i]);
                  // console.log(response.rows[i].elements);
                }
                // 現在地から近い順にソート
                for (i = 0; i < max - 1; i++) {
                  for (let j = max - 1; j > i; j--) {
                    if(response.rows[j - 1].elements[0].distance.value > response.rows[j].elements[0].distance.value) {
                      let temp = response.rows[j];
                      response.rows[j] = response.rows[j - 1];
                      response.rows[j - 1] = temp;
                    }
                  }
                }
                console.log(response)
                // Callbackで取得したデータとPHPから受け取ったデータをHTMLへ飛ばす
                for (i = 0; i < max; i++) {
                  let store_id = response.rows[i].elements[1];
                  document.getElementById("url" + i)
                    .href = stores[store_id].url;

                  // document.getElementById("store_pic" + i)
                  //   .src = stores[store_id].store_pic;

                  document.getElementById("name" + i)
                    .textContent = stores[store_id].name;

                  document.getElementById("score" + i)
                    .textContent = "食べログ評価 : " + stores[store_id].score;

                  document.getElementById("type" + i)
                    .textContent = "ジャンル : " + stores[store_id].type;

                  document.getElementById("station" + i)
                    .textContent = "最寄駅 : " + stores[store_id].station;

                  document.getElementById("distance" + i)
                    .textContent = Math.round(response.rows[i].elements[0].distance.value / 100) / 10;

                  if(response.rows[i].elements[0].duration.value < 3600) {
                    document.getElementById("time_m" + i)
                      .textContent = Math.round(response.rows[i].elements[0].duration.value / 60);
                  }else {
                    let hour = Math.floor(response.rows[i].elements[0].duration.value / 3600);
                    let minuts = (response.rows[i].elements[0].duration.value / 3600) - hour
                    document.getElementById("time_h" + i)
                      .textContent = hour;
                    document.getElementById("hour" + i)
                      .textContent = "時間";
                    document.getElementById("time_m" + i)
                      .textContent = Math.round(minuts * 60);
                  }

                  if(stores[store_id].smoking_green == "全席喫煙可") {
                    document.getElementById("smoking_green" + i)
                      .textContent = stores[store_id].smoking_green;
                      document.getElementById("smoking_yellow" + i)
                      .textContent = '';
                  } else{
                    document.getElementById("smoking_green" + i)
                      .textContent = '';
                    document.getElementById("smoking_yellow" + i)
                      .textContent = stores[store_id].smoking_yellow;
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