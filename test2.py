import requests
from bs4 import BeautifulSoup
res = requests.get('https://tw.bid.yahoo.com/search/auction/product?qt=ctg&cid=2092107360&clv=1&kw=nintendo+switch&p=nintendo+switch')
soup = BeautifulSoup(res.text,'lxml')

for item in soup.select('.GridItem__itemInfo___3Ij99'):
    print (item.select('.GridItem__price___23XQ9')[0].text, item.select('.GridItem__title___3Dnzw')[0].text)

