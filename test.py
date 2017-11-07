import pandas
dfs = pandas.read_html('http://rate.bot.com.tw/xrt?Lang=zh-TW')
print (dfs[0])
