from selenium import webdriver
import time
import logging
from selenium.webdriver.remote.remote_connection import LOGGER

import os
class Browser:
    def __init__(self):
        self.web = None
        LOGGER.setLevel(logging.WARNING)
    def Init_Browser(self, Root_Dir=""):

        # Chrome_Path = Root_Dir + "Tool/ChromeDriver/chromedriver.exe"
        Chrome_Path = Root_Dir + "Tool/ChromeDriver/chromedriver"
        # self.Chrom_Bin_Path = "Tool\Browser\Chrome.exe"
        chrome_options = webdriver.ChromeOptions()

        chrome_options.add_extension(Root_Dir + "Tool/LINE_v2.3.1_0.crx")

        chrome_options.add_argument("--window-size=1920x1080")
        chrome_options.add_argument("--mute-audio")

        self.web = webdriver.Chrome(chrome_options=chrome_options, executable_path=Chrome_Path)
        return self.web

        # self.web.get("https://www.google.com.tw")
        # self.web.get("chrome-extension://ophjlpahpchlmihnnnihgmmeilfjmjjc/index.html")
        # time.sleep(3)
        #
        # self.web.find_element_by_css_selector("#line_login_email").send_keys("")
        # self.web.find_element_by_css_selector("#line_login_pwd").send_keys("")
        # self.web.find_element_by_css_selector("#login_btn").click()

if __name__ == '__main__':
    obj = Browser()
    obj.Init_Browser('../')
