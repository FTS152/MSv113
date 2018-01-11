rm(list=ls(all.names=TRUE))
library(XML)
library(RCurl)
library(httr)
Sys.setlocale(category = "LC_ALL", locale = "cht")
urlCode = c("","a0","c0","e0","e1","e2","e3","f0","f1","g0","j0","m0","s0","t0","v0","v1","w0","z0","n0","v3","e5","cf","v2")
startNo = 1
endNo   = 150
subPath <- "http://maple.heyxu.com/tw/p/010600/np_"

alldata <- data.frame()
for( placeId in 1:length(urlCode)){
  for( pid in startNo:endNo ){
    
    if(nchar(pid) == 1) temp = "0"
    else if(nchar(pid) == 2) temp = ""
    else temp = ""

    page    <- paste(temp, pid, sep='')
    placePage  <- paste(urlCode[placeId], page, sep='')
    urlPath <- paste(subPath, placePage, sep='')
    temp    <- getURL(urlPath, encoding = "big5")
    xmldoc  <- htmlParse(temp)


    for(map in 1:30){

      name        <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='important']", xmlValue) #npc name
      description <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='explain']", xmlValue) #npc explaination
      #imgurl      <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//img", xmlAttrs, "src") #img url of npc
      location    <- xpathSApply(xmldoc, paste0("//fieldset[last()]//a[",map,"]"), xmlValue)
      
      Erroresult<- tryCatch({
        subdata <- data.frame(name,description,location)
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
write.csv(alldata, file = "/Users/walter/Desktop/npcNew.csv")
