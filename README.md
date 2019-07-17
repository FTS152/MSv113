# MSv113
合太谷攻略圖鑑

合太谷是近期在台大學生之間非常熱門的 RPG 遊戲，為知名遊戲「楓之
谷」的私人伺服器。合太谷的遊戲內容十分豐富，具備數種職業和數十種進階職
業，搭配遼闊的世界地圖與數千種怪物，以及數不清的道具和任務。我們的目的
是要做出一個方便玩家快速查詢所需資訊的資料庫(Ex. 哪些怪物會掉落某個特定
道具、NPC 會出現在哪個地圖......)。希望經由此資料庫，可以讓玩家取得想要的
資訊，增加遊戲體驗。

Maple Story Library

Maple Story is recently well-known among students in NTU. It features numerous gaming contents. There are multiple professions and countless places for gamers to explore. Our main goal is to create a database which allows players to fetch the information they need ASAP(Ex. monster data and NPC data). With this database, we hope to enhance the overall user experience

目前完成功能：

後臺管理
預設帳號：admin 預設密碼：1234

```
login/ : 登入
login/logout/ : 登出
```

資料管理

```
/ : 首頁
xxxxxx(monster, mission, etc.)/ : 資料列表
xxxxxx/?name= : 輸入條件顯示列表
xxxxxx/view/?id= : 查看單一筆資料
xxxxxx/add/ : 新增
xxxxxx/edit/?id= : 修改單一資料
xxxxxx/delete/?id= : 刪除資料
```

目前add和edit的各資料格式
資料間的關係建立以輸入名稱為主，但名稱需是資料庫中已存在的資料

```
monster:
$_GET['name'], varchar
$_GET['level'],	int			
$_GET['hp'],	int			
$_GET['mp'],	int			
$_GET['atk'],	int			
$_GET['def'], int
$_GET['exp'], int
$_GET['hauntlist'](出現地圖清單(輸入名稱，\n區分
$_GET['trophylist'](戰利品清單(輸入名稱，\n區分

item:
$_GET['name'],    varchar
$_GET['type'],		varchar		
$_GET['description'], varchar
$_GET['rewardlist'](會給予的任務獎勵清單(輸入名稱，\n區分
$_GET['trophylist'](會掉落的怪物清單(輸入名稱，\n區分

map:
$_GET['name'],  varchar
$_GET['area'],  varchar
$_GET['hauntlist'](會出現的怪物清單(輸入名稱，\n區分
$_GET['locatelist'](會出現的npc清單(輸入名稱，\n區分

mission:
$_GET['name'],  varchar
$_GET['type'],	int		
$_GET['description'],	varchar		
$_GET['highest_lv'], int			
$_GET['lowest_lv'], int		
$_GET['npc_name'],  varchar
$_GET['rewardlist'](給予的獎勵物品清單(輸入名稱，\n區分

npc:
$_GET['name'], varchar
$_GET['description'],	varchar		
$_GET['imgurl'], varchar
$_GET['locatelist'](該NPC的出現地圖清單(輸入名稱，\n區分

profession:
需要性不高，先不做
```
