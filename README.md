# command
### 1：确保环境变量有php
### install
sh install.sh
### use
#### url编码 enurl
[xpisme@aliyun ~]$ enurl 'http://www.baidu.com'

http%3A%2F%2Fwww.baidu.com
#### url解码 deurl
[xpisme@aliyun ~]$ deurl http%3A%2F%2Fwww.baidu.com

http://www.baidu.com

#### base64编码 enbase
[xpisme@aliyun ~]$ enbase xpisme

eHBpc21l
#### base64解码 debase
[xpisme@aliyun ~]$ debase eHBpc21l

xpisme

#### 反序列化 deser
[xpisme@aliyun ~]$ deser 'a:1:{s:4:"name";s:6:"xpisme";}'

Array
(
    [name] => xpisme
)
