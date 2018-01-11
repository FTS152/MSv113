rm(list=ls(all.names=TRUE))
library(XML)
library(RCurl)
library(httr)
Sys.setlocale(category = "LC_ALL", locale = "cht")
urlCode = c("be","wa","ma","ar","th","ro")
startNo = 1
endNo   = length(urlCode)
subPath <- "http://maple.heyxu.com/tw/p/010400&Pro="
pageCode = c("","A2","A3","A4","B2","B3","B4","C2","C3","C4")
pageNo  = length(pageCode)

alldata <- data.frame()

for( pid in 1:1){
  for( id in startNo:1){
    tempUrl <- paste(subPath, urlCode[pid], sep='')
    urlPath <- paste(tempUrl, pageCode[id], sep='')
    temp    <- getURL(urlPath, encoding = "big5")
    xmldoc  <- htmlParse(temp)

    
    for(skillid in 1:20){
      name    <- xpathSApply(xmldoc,"//div[@class='egyFEEGIEphq']//div[1]//div[2]",xmlValue)
      
      skill   <- xpathSApply(xmldoc,paste0("//td[@id='Skill",skillid,"']"),xmlValue)

      #skillLev<- xpathSApply(xmldoc,"//div[@id='D_Skill1']/table/tbody/tr/td[1]/table/tbody/tr[1]/td[2]",xmlValue)

      
      Erroresult<- tryCatch({
        subdata <- data.frame(name,skill)
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
  }
}


for( pid in 2:endNo){
  if( pid == 4 || pid == 5 || pid == 6) ##special case for archer thief and pirate
    pageNo = 7
  else
    pageNo  = length(pageCode)
  for( id in startNo:pageNo){
    tempUrl <- paste(subPath, urlCode[pid], sep='')
    urlPath <- paste(tempUrl, pageCode[id], sep='')
    temp    <- getURL(urlPath, encoding = "big5")
    xmldoc  <- htmlParse(temp)

    
    for(skillid in 1:20){
      name    <- xpathSApply(xmldoc,"//div[@class='egyFEEGIEphq']//div[1]//div[2]",xmlValue)
      
      skill   <- xpathSApply(xmldoc,paste0("//td[@id='Skill",skillid,"']"),xmlValue)

      #skillLev<- xpathSApply(xmldoc,"//div[@id='D_Skill1']/table/tbody/tr/td[1]/table/tbody/tr[1]/td[2]",xmlValue)

      
      Erroresult<- tryCatch({
        subdata <- data.frame(name,skill)
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
  }
}
print(nrow(alldata))
write.csv(alldata, file = "/Users/walter/Desktop/skill.csv")