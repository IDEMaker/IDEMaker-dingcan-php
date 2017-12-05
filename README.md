# IDEMaker开源订餐系统
IDEMaker开源订餐系统是-B2B2C商业化的开源项目平台

MVC设计架构模式，基于php+mysql的外卖订餐网站，包括前端,后台,商家后台。  

### 源码演示地址：<http://dingfan.fmlynet.cn/>  

### 管理后台系统：<http://www.dingfan.fmlynet.cn/?m=admin&c=Indexc&a=index>

### 商家后台系统：<http://www.dingfan.fmlynet.cn/?m=adminmer&c=Indexc&a=index>

### 运行环境：Apache+PHP+Mysql   Nginx+PHP+Mysql  PHP版本:>=5.6<5.7
             

### 代码说明
* configs/database.php 需要配置数据库连接信息（主机、用户名、密码）
* config/config.php    系统信息配置文件
* oam.sql 是数据库备份文件，需要提前导入到mysql中
* 系统后台提供 验证码配置 支付配置 邮箱配置 手机验证码配置 


### 技术架构：管理后台/商家后台PHP+Mysql 前端jQuery、html、CSS、Bootstrap

### 前端管理：个人中心 我的地址 我的余额 我的订单 我的积分 账户设置。

### 管理后台：商品管理 分类管理 用户管理  商家管理 订单管理 接单管理 我的店铺 缓存管理 日志管理 系统管理 管理员管理。

### 商家后台：商品管理 分类管理 订单管理  接单管理 我的店铺。

### 网站目录
* controllers/admin     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;后台管理目录
* controllers/adminmer  商家管理目录
* controllers/home      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;前端管理目录


* models/admin          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;后台管理逻辑处理目录
* models/adminmer       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商家管理逻辑处理目录
* models/home           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;前端管理逻辑处理目录


* views/admin           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;后台管理视图目录
* views/adminmer        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;商家管理视图目录
* views/home            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;前端管理视图目录



* webs/Srce/css         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;项目css文件目录
* webs/Srce/image       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;项目image文件目录
* webs/Srce/js          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;项目js文件目录


### 项目版权说明

##### 项目由(原订饭组系统<http://www.dingfanzu.com/>)进行二次开发,本次开发基于mvc设计模式（框架由PACKIDE官方提供<http://www.fmlynet.cn/>）。<br/>

##### 本次开发对代码业务逻辑优化以及扩展性做出更新，增加或更新功能如下:<br/>

### 前端

 * 用户首页 访问自动定位用户所在城市，给出相应的店铺信息。      （增加）
 * 用户首页 切换城市（随意切换）,给出相应的店铺信息,或提示语句。（优化）
 * 用户中心 余额支付。（增加）
 * 用户中心 支付宝支付。（优化）
 * 用户中心 用户下单后未支付，查询订单时可进行支付。（优化）
 * 用户中心 用户下单后取消订单，逻辑重新处理,如用户非法取消订单，取消订单时是否支付（优化）
 * 用户中心 充值功能（支付宝支付,最小充值0.01）。（增加）
 * 用户注册 验证码获取请求。(优化)
 ### 管理
 
 * 商品管理 部分字段功能如: 库存，热销（增加）商品修改页面逻辑。（优化）
 * 用户管理 修改时部分字段如:用户余额，用户积分，用户密码。（增加） 
 * 商家管理 入驻逻辑优化如:店铺所属地区，店铺审核，店铺联系方式（增加）,商家入驻时自动获取（店铺账户，店铺密码）。修改时部分字段如店铺余额，店铺密码（增加）。商家（提现申请 ，提现记录 ，入驻申请)（增加）
 * 我的店铺 查看当前店铺详细信息（管理平台也有自己的店铺），部分字段如:店铺密码。(增加)，查看当前管理账户的余额（增加）
 * 订单管理 可查看所有店铺的销售订单，可根据关键字查询上一年销售订单（优化）
 * 接单管理 订单状态，接单（查询自己店铺的单子），拒单（商家忙碌可以拒单）， 已完成订单（订单完成处理给所属店铺增加余额），未完成订单（买卖方达成一致协商退款）。（优化） 
 * 缓存管理 可对系统的编译文件，或者缓存文件进行清理。（增加）
 * 日志管理 可对系统的 用户充值/或下单消费记录，用户积分消费记录，商家系统余额充值/余额提现记录，管理后台操作记录 文件清除。（增加）
 * 建议管理 用户可以提出建议，增进对系统的优化。（优化）
 * 系统管理 验证码配置，邮箱配置, 支付配置 ，系统配置。（增加）
 
### 商家
 
 * 商品管理 商品添加（分类只允许展示自己的分类）（优化），部分字段功能如: 库存，热销（增加）商品修改页面逻辑。（优化）。
 * 订单管理 可查看当前店铺的销售订单，可根据关键字查询当前店铺的销售订单。（优化）
 * 接单管理 订单状态，接单（查询自己店铺的单子），拒单（商家忙碌可以拒单）， 已完成订单（订单完成处理给所属店铺增加余额），未完成订单（买卖方达成一致协商退款）。（优化） 
 * 我的店铺 查看当前店铺详细信息，部分字段如:店铺密码。(增加)，查看当前店铺的余额（增加），余额提现（提现必须大于100）（增加），提现记录。（增加）
 #### 注: 商家系统 管理中所有CURD 都有非法操作提醒如:接单，拒单，已完成订单，未完成订单等功能防止商家非法截取其他店铺的单子。