rm(list=ls(all.names=TRUE))
library(XML)
library(RCurl)
library(httr)
Sys.setlocale(category = "LC_ALL", locale = "cht")
##防具
type = "防具"
urlCode = c("ht_all","co_all","pa_all","su_all","gl_all","sh_all","ta_all","fw_all","ew_al","ea_all","nk_all","ca_all","ht_wa","co_wa","pa_wa","su_wa","gl_wa","sh_wa","ta_wa","ht_ar","co_ar","pa_ar","su_ar","gl_ar","sh_ar","ht_ma","co_ma","pa_ma","su_ma","gl_ma","sh_ma","ta_ma","ht_th","co_th","pa_th","su_th","gl_th","sh_th","ta_th","ht_ro","su_ro","gl_ro","sh_ro")
types   = c("全職帽子","全職上衣","全職褲裙","全職套裝","全職手套","全職鞋子","全職盾牌","全職臉飾","全職眼飾","全職耳環","全職墬飾","全職披風","戰士帽子","戰士上衣","戰士褲裙","戰士套裝","戰士手套","戰士鞋子","戰士盾牌","弓手帽子","弓手上衣","弓手褲裙","弓手套裝","弓手手套","弓手鞋子","法師帽子","法師上衣","法師褲裙","法師套裝","法師手套","法師鞋子","法師盾牌","盜賊帽子","盜賊上衣","盜賊褲裙","盜賊套裝","盜賊手套","盜賊鞋子","盜賊盾牌","海盜帽子","海盜套裝","海盜手套","海盜鞋子")
startNo = 1
endNo   = length(urlCode)
subPath <- "http://maple.heyxu.com/tw/p/010B00/"

alldata <- data.frame()
for( pid in startNo:endNo ){
  urlPath <- paste(subPath, urlCode[pid], sep='')
  
  temp    <- getURL(urlPath, encoding = "big5")
  xmldoc  <- htmlParse(temp)
  name    <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='important']", xmlValue) #道具名稱
  description <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='explain']", xmlValue) #道具敘述
  
  Erroresult<- tryCatch({
    subdata <- data.frame(type, name, description)
    alldata <- rbind(alldata, subdata)
  }, warning = function(war) {
    print(paste("MY_WARNING:  ", urlPath))
  }, error = function(err) {
    print(paste("MY_ERROR:  ", urlPath))
  }, finally = {
    print(paste("End Try&Catch", urlPath))
  })
  print(subdata)
}


##武器
type = "武器"
urlCode = c("sw","s2","ax","a2","ha","h2","ar","pi","bo","cb","kn","ag","ss","st","gn","ft")
types   = c("單手劍","雙手劍","單手斧","雙手斧","單手棍","雙手棍","槍","矛","弓","弩","短劍","拳","套","法杖","權杖","火槍","指虎")
startNo = 1
endNo   = length(urlCode)
for( pid in startNo:endNo ){
  urlPath <- paste(subPath, urlCode[pid], sep='')
  
  temp    <- getURL(urlPath, encoding = "big5")
  xmldoc  <- htmlParse(temp)
  name    <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='important']", xmlValue) #道具名稱
  description <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='explain']", xmlValue) #道具敘述
  
  Erroresult<- tryCatch({
    subdata <- data.frame(type, name, description)
    alldata <- rbind(alldata, subdata)
  }, warning = function(war) {
    print(paste("MY_WARNING:  ", urlPath))
  }, error = function(err) {
    print(paste("MY_ERROR:  ", urlPath))
  }, finally = {
    print(paste("End Try&Catch", urlPath))
  })
  print(subdata)
}


##道具
type = "道具"
urlCode = c("it_","it_mm","it_ms","it_mt","it_sb","it_sc","it_st","it_wd","po_10","po_30","po_60","po_70","po_99","po_fb","po_in","po_ot","po_st","po_tr","po_we")
types   = c("蒐集品","製造方法","催化劑","常用材料","四轉技能書","寶石成礦","寶石母礦","字母餅乾","10%卷軸","30%卷軸","60%卷軸","70%卷軸","100%卷軸","恢復藥水","補品藥水","其他道具","強化藥水","傳送卷軸","飛鏢弓箭子彈")
startNo = 1
endNo   = length(urlCode)
subPath <- "http://maple.heyxu.com/tw/p/010100/"

for( pid in startNo:endNo ){
  urlPath <- paste(subPath, urlCode[pid], sep='')
  
  temp    <- getURL(urlPath, encoding = "big5")
  xmldoc  <- htmlParse(temp)
  name    <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='important']", xmlValue) #道具名稱
  description <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='explain']", xmlValue) #道具敘述
  
  Erroresult<- tryCatch({
    subdata <- data.frame(type, name, description)
    alldata <- rbind(alldata, subdata)
  }, warning = function(war) {
    print(paste("MY_WARNING:  ", urlPath))
  }, error = function(err) {
    print(paste("MY_ERROR:  ", urlPath))
  }, finally = {
    print(paste("End Try&Catch", urlPath))
  })
  print(subdata)
}


print(nrow(alldata))
write.csv(alldata, file = "C:/Users/user/Desktop/Database/items.csv")
