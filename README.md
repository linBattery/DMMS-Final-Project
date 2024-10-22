# DataBase 期末專題 小組討論
成員列表：
| 112550019 | 112550047 | 112550059 | 112550099 | 112550131 |
| -------- | -------- | -------- | -------- | -------- | 
| 謝嘉宸     | 徐瑋晨     | 林佑丞     | 蔡烝旭     | 張詠晶     |
## Descriptions of our data
### Introduction to the data
資料集包含七個檔案(6個.csv file、 1個.geojson file)，每個檔案儲存有關於地點位於New York City的AirBnB之相關資料，以下是資料檔案內容說明：
1. calendar.csv(740.43 MB)
    >此資料檔案主要儲存各AirBnB的訂房與價位狀態，內含有日期資料、是否接受訂房、價錢資訊及最短與最長過夜天數限制等資料。
2. listings.csv(6.64 MB)
    >此資料檔案主要儲存AirBnB主人資訊及房間類型與評論相關的資料，內部含有主人姓名、AirBnB地點、房型及評論次數等資料。
3. listings_detailed.csv(103.49 MB)
    >此資料檔案主要儲存顧客對房間留下的各式評論。
7. neighbourhoods.csv(4.96 kB)
    >此資料檔案主要儲存紐約各個街區對應至紐約的哪個行政區。
9. reviews.csv(22.68 MB)
    >此資料檔案主要儲存評論產生的日期。
11. reviews_detailed.csv(344.63 MB)
    >此資料檔案主要儲存顧客對房間留下的各式評論。
13. neighbourhoods.geojson(634.17 kB)
    >此資料檔案主要儲存AirBNB的經緯座標
### Where is the data from
資料集來自於kaggle上的[Inside AirBnB-USA](https://www.kaggle.com/datasets/konradb/inside-airbnb-usa)
### Meaning of columns and tables
:::warning
這邊可能需要畫圖、describe table、column敘述
可以用[dbdiagram.io](https://dbdiagram.io/home)畫圖
:::
### Others
目前暫時以AirBNB的基本操作為主軸，未來可能再擴充安全指標、餐廳推薦、交通資訊等功能

[別人の成品，可供參考](https://insideairbnb.com/new-york-city/)
## Source of our data
Source: ( * 表示未來有可能擴充的功能 )
1. [USA AirBNB](https://www.kaggle.com/datasets/konradb/inside-airbnb-usa)
2. [*NYPD arrests and crime dataset](https://www.kaggle.com/datasets/kamaravichow/nypd-arrests-and-crime-dataset)
4. [*National Register of Historic Places Map(for recreation)](https://data.ny.gov/Recreation/National-Register-of-Historic-Places-Map/y36f-mkpp)
5. [*NYC Transit Subway Entrance And Exit Data](https://www.kaggle.com/datasets/new-york-state/nys-nyc-transit-subway-entrance-and-exit-data?select=nyc-transit-subway-entrance-and-exit-data.csv)
6. [*New York City Restaurant Inspection](https://www.kaggle.com/datasets/minisam/new-york-city-restaurant-inspection20172021?select=DOHMH_New_York_City_Restaurant_Inspection_Results.csv)
## Application Design
### Main idea
假設情境：你是一個即將來紐約的旅客。你想找個便宜、地理位置優良、安全的地方落腳，但卻發現自己無從找起。我們希望改善他的窘境。

我們希望訪客使用我們的資料庫時，他們可以根據諸多數據綜合做出最佳居住地點的決策。我們列入考慮的選擇因子包含但不限於：

* 犯罪紀錄
* 餐廳位置
* 交通資訊 （To be updated） 

其中訪客也可以對這個資料庫做出貢獻，即上傳自己的居住經驗供來人參考。
### Functionality
1. 搜尋(Airbnb、*餐廳、*交通資訊)
2. 新增、修改評論(Airbnb)
3. 推薦評分最高的(Airbnb、*餐廳)
4. *提供安全資訊(依危險指數用顏色分級)
5. *提供鄰近的地鐵站資訊

:::info
「*」意義： 擴充功能，敬請期待
優先級順序：安全指標(犯罪紀錄) -> 交通資訊 -> 餐廳位置
:::

### Interface

#### Guest
> 訪客模式 —— 功能為查詢既有資料、匿名評論。

範例流程:


```mermaid
flowchart LR
    id1([輸入紐約城區])
    id2([看到AirBnB資訊])
    id3([AirBnB詳細資訊])
    id4([AirBnB 評論區])
    id1 --> |輸入城區|id2 --> |若對某AirBnB有興趣|id3 --> |若想匿名評論|id4

```


## Work Plan


---

## Work Record
### 20241017
討論主題，找尋DataSet，並且從中篩選合適者。
* [FoodData Central](https://www.kaggle.com/datasets/willianoliveiragibin/fooddata-central?select=food_nutrient.csv)
* [London AirBNB](https://www.kaggle.com/datasets/jinxzed/londonairbnb?select=reviews+detailed.csv)
* [Attractions in China](https://www.kaggle.com/datasets/audreyhengruizhang/china-city-attraction-details)
* [BikeShare](https://www.kaggle.com/datasets/taweilo/capital-bikeshare-dataset-202005202408)
* [Overall French Demographics](https://www.kaggle.com/datasets/etiennelq/french-employment-by-town)
* [USA AirBNB](https://www.kaggle.com/datasets/konradb/inside-airbnb-usa)
* [NYPD arrests and crime dataset](https://www.kaggle.com/datasets/kamaravichow/nypd-arrests-and-crime-dataset)

:::success
最終決定：
AirBNB New York City Dataset

原因：
1. 實用性高
2. 資料量充足
3. 欄位分類豐富
4. 擴充性高
:::

:::info
擴充包
安全指標：犯罪率
交通資訊：地鐵
美食資訊：餐廳
遊樂資訊：景點
:::

--- 

### To-Do List
### Data
- [ ] The description of your data
- [ ] Introduction to the data
- [ ] Where is the data from
- [ ] What do the columns and tables mean
- [ ] Other information about your data (e.g. will it be updated in the future?)
- [ ] The source of your data
- [ ] Link to your data source
### Application Design
- [ ] Main idea
- [ ] The purpose of your application
- [ ] Functionality
- [ ] What kind of information will be presented to users
- [ ] What kind of interaction will be available
- [ ] What will be the scenario when a user use your application
- [ ] What kind of data will users be able to interact with
- [ ] Interface
- [ ] Expected interface look (use figure or text to explain)
### Work Plan
- [ ] Time schedule
:::info
No need for an exact date, just list all the tasks and sub-goals of your project, then tell us which part will be done first etc.
:::
- [ ] Discussion
:::info
We want to see how your team work together throughout this project, so please open a discussion board/channel (e.g. Hackmd note, Trello board) and record your discussion throughout the project. In the proposal, just open the discussion board/channel and provide the link
:::

- [ ] Repo
:::info
Please open a github/gitlab repo for your project, your need to upload the source code of the project in the repo and a README to describe your functionality and the steps of reproducibility (at the end of the project
:::
- [ ] Git (Optional) 
:::info
We encourage you to do version control and show contribution of each member using git, you will get extra points if you do this. In this proposal, just open the repo and provide the link.
:::




## Loading Data into Table FAQ

大致Review Column 骨架：

```
CREATE TABLE hotel_reviews (
    listing_id INT,
    id INT,
    date DATE,
    reviewer_id INT,
    reviewer_name VARCHAR(255),
    comments TEXT
);
```

1. 逗號問題：如何規避評論區裡面的 ","，以防創造Table時發生錯誤？

```
LOAD DATA INFILE '/path/to/your/csvfile.csv' 
INTO TABLE hotel_reviews
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(listing_id, id, date, reviewer_id, reviewer_name, comments);
```
:::info
```FIELDS TERMINATED BY ','```: Specifies that fields in the CSV are separated by commas.

```OPTIONALLY ENCLOSED BY '"'```: Tells MySQL that fields may be enclosed in double quotes, which is important for fields like comments that contain commas.

```LINES TERMINATED BY '\n'```: Specifies that each line represents a new record.

```IGNORE 1 LINES```: Skips the header row of your CSV file.
:::

2. ```</br>``` 問題，如何過濾Html的換行字元？

A. 換成SQL的換行字元
    
```
UPDATE hotel_reviews 
SET comments = REPLACE(comments, '</br>', '\n');
```

B. 全部拿掉

```
UPDATE hotel_reviews 
SET comments = REPLACE(REPLACE(comments, '</br>', ''), '<br/>', '');
```
    



