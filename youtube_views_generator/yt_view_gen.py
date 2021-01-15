from selenium import webdriver
import time

# views generator
# list of links
link = ['https://example.com',
        'https://example.com']

views = int(input("number of views: "))
view_time = int(input("view time: "))

# have to match the chromedriver version with the chrome version
browser1 = webdriver.Chrome("/chromedriver_win32/chromedriver.exe")
browser2 = webdriver.Chrome("/chromedriver_win32/chromedriver.exe")

browser1.get(link[0])
l = browser1.find_element_by_tag_name('body')
l.send_keys("k")

browser2.get(link[1])
l = browser2.find_element_by_tag_name('body')
l.send_keys("k")

for i in range(views):
    browser1.get(link[0])
    browser2.get(link[1])
    time.sleep(view_time)

browser1.close()
browser2.close()
