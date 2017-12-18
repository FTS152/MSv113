rm(list=ls(all.names=TRUE))
library(XML)
library(RCurl)
library(httr)
Sys.setlocale(category = "LC_ALL", locale = "cht")
urlCode = c("","/C0","/E0","/E1","/E2","/E3","/F0","/F1","/G0","/J0","/M0","/S0","/T0","/V0","/V1","/W0","/Z0","/N0","/V3","/E5","/CF","/V2")
startNo = 1
endNo   = length(urlCode)
subPath <- "http://maple.heyxu.com/tw/p/010600"

alldata <- data.frame()
for( pid in startNo:endNo ){
  urlPath <- paste(subPath, urlCode[pid], sep='')
  temp    <- getURL(urlPath, encoding = "big5")
  xmldoc  <- htmlParse(temp)

  name        <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='important']", xmlValue) #npc name
  description <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='explain']", xmlValue) #npc explaination
  imgurl      <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//img", xmlAttrs, "src") #img url of npc
  
  Erroresult<- tryCatch({
    subdata <- data.frame(name, description, imgurl[1,])
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
write.csv(alldata, file = "C:/Users/user/Desktop/Database/npc.csv")
