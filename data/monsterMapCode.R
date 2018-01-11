rm(list=ls(all.names=TRUE))
library(XML)
library(RCurl)
library(httr)
Sys.setlocale(category = "LC_ALL", locale = "cht")
startNo = 1
endNo   = 30
lvrange = c("000","001","002","004","006","007","008","010","012","015","017","019","020","021","022","023","024","025","027","028","029","030","031","032","033","034","035","036","037","038","039","040","041","042","043","044","045","046","047","048","049","050","051","052","053","054","055","056","057","058","059","060","062","063","064","065","066","067","068","069","070","071","072","073","074","075","076","077","078","080","082","083","085","087","088","089","090","092","093","094","095","097","098","099","100","101","102","103","105","108","110","113","115","125","130","140","152","155","160","175")

subPath <- "http://maple.heyxu.com/tw/p/010200/mo"
alldata <- data.frame()
for( lv in 1:length(lvrange)){
for( pid in startNo:endNo ){
  if(nchar(pid) == 1) temp = "00"
  else if(nchar(pid) == 2) temp = "0"
  else temp = ""


    page    <- paste(temp, pid, sep='')
    lvpage  <- paste(lvrange[lv], page, sep='')
    urlPath <- paste(subPath, lvpage, sep='')
    temp    <- getURL(urlPath, encoding = "big5")
    xmldoc  <- htmlParse(temp)

    for(map in 1:30){
    
    name     <- xpathSApply(xmldoc, "//div//table//tr[position()>1]//span[@class='important']", xmlValue) 
    total    <- xpathSApply(xmldoc, "//div[@data-id='boxTitle']//h1", xmlValue)
    total_str<- strsplit(total, ' ')
    total_str<- unlist(total_str)
    name     <- total_str[4]
    level    <- total_str[3]
    HP       <- xpathSApply(xmldoc, "//div[@class='alignTop']//table//tr[2]//td[1]", xmlValue)
    MP       <- xpathSApply(xmldoc, "//div[@class='alignTop']//table//tr[2]//td[2]", xmlValue)
    AD       <- xpathSApply(xmldoc, "//td[@class='remain']//tr[2]//td[1]", xmlValue)
    AR       <- xpathSApply(xmldoc, "//td[@class='remain']//tr[2]//td[3]", xmlValue)
    EL       <- xpathSApply(xmldoc, "//div[@class='alignTop']//table//tr[2]//td[3]", xmlValue)
    imgurl   <- xpathSApply(xmldoc, "//td[@class='alignCenter']//img", xmlAttrs, "src")

  
    location <- xpathSApply(xmldoc, paste0("//table[@class='fill tableBorder']//tr//td[@class='remain']//a","[",map,"]"), xmlValue)
  
   # location <- xpathSApply(xmldoc, "//table[@class='fill tableBorder']//tr//td[@class='remain']//a", xmlValue)
   #location1 <- xpathSApply(xmldoc, "//td[@class='remain']//a[2]", xmlValue)
   #location2 <- xpathSApply(xmldoc, "//tr[1]//td[@class='remain']//a[3]", xmlValue)
   #location40 <- xpathSApply(xmldoc, "//tr[1]//td[@class='remain']//a[40]", xmlValue)
    
    
    #clear the data, tranfer from string to int
    HP = gsub(',', '', HP)
    MP = gsub(',', '', MP)
    AD = gsub(',', '', AD)
    AR = gsub(',', '', AR)
    EL = gsub(',', '', EL)
    HP = strtoi(HP)
    MP = strtoi(MP)
    AD = strtoi(AD)
    AR = strtoi(AR)
    EL = strtoi(EL)


      Erroresult<- tryCatch({
        subdata <- data.frame(urlPath, name, level, HP, MP, AD, AR, EL, imgurl,location)
        alldata <- rbind(alldata, subdata)
      }, warning = function(war) {
        print(paste("MY_WARNING:  ", urlPath))
      }, error = function(err) {
        print(paste("MY_ERROR:  ", urlPath))
      }, finally = {
        print(paste("End Try&Catch", urlPath))
      })
    
  }    

}
}
print(nrow(alldata))
write.csv(alldata, file = "/Users/walter/Desktop/treasure.csv")